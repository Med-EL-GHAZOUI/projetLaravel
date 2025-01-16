<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DevoirController extends Controller{
    // Afficher le formulaire d'upload pour le professeur
    public function showUploadForm(){
        return view('devoirprof'); // Vue pour l'enseignant
    }
    // Traiter l'upload du devoir par le professeur
    public function uploadDevoir(Request $request){
        // Validation du formulaire avec messages en français
        $request->validate([
            'assignment_type' => 'required|in:js,sql,php', // Types valides de devoir
            'assignment_file' => 'required|file|mimes:pdf,docx,zip|max:10240', // Limite de 10 Mo
        ], 
        //definir les messages d'erreur
        [
            'assignment_type.required' => 'Le type de devoir est obligatoire.',
            'assignment_type.in' => 'Veuillez sélectionner un type de devoir valide.',
            'assignment_file.required' => 'Le fichier de devoir est obligatoire.',//
            'assignment_file.file' => 'Le fichier téléchargé doit être un fichier valide.',
            'assignment_file.mimes' => 'Le fichier de devoir doit être au format pdf, docx, ou zip.',
            'assignment_file.max' => 'Le fichier ne doit pas dépasser 10 Mo.',
        ]);
        // Obtenez le fichier téléchargé
        $file = $request->file('assignment_file');// Récupérer le fichier de devoir
        $type = $request->input('assignment_type'); // Récupérer le type de devoir
        // Définir le nom du fichier en fonction du type
        $fileName = 'devoir_' . $type . '.' . $file->getClientOriginalExtension(); // Format: devoir_sql.pdf
        // Stocker le fichier avec son nom sous le bon dossier sur le disque public
        $filePath = $file->storeAs('devoirs/' . $type, $fileName, 'public'); // Use the "public" disk here
        // Rediriger avec un message de succès
        return back()->with('success', 'Le devoir a été téléchargé avec succès');
    }
    // Afficher les devoirs pour l'étudiant
    public function showDevoirs() {
        // Récupérer les devoirs depuis le dossier de stockage
        $devoirs = collect([
            // Définir les types de devoirs et leurs descriptions
            ['type' => 'sql', 'description' => 'Ce devoir vous aidera à comprendre les bases du SQL.', 'file_name' => 'devoir_sql.pdf'],
            ['type' => 'js', 'description' => 'Un devoir pour évaluer vos compétences en JavaScript.', 'file_name' => 'devoir_js.pdf'],
            ['type' => 'php', 'description' => 'Un devoir pour évaluer vos compétences en PHP.', 'file_name' => 'devoir_php.pdf']
        ]);
        // Filtrer les devoirs pour vérifier s'ils existent sur le disque
        $devoirs = $devoirs->filter(function ($devoir) {
        // Vérifier si le fichier existe dans le dossier de stockage public
            return Storage::disk('public')->exists('devoirs/' . $devoir['type'] . '/' . $devoir['file_name']);
        });
        // Retourner la vue avec les devoirs
        return view('devoiretu', compact('devoirs'));
    }
}