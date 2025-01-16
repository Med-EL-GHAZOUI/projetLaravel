<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DevoirController extends Controller
{
    // Afficher le formulaire d'upload pour le professeur
    public function showUploadForm()
    {
        return view('devoirprof'); // Vue pour l'enseignant
    }

    // Traiter l'upload du devoir par le professeur
    public function uploadDevoir(Request $request)
    {
        // Validation du formulaire avec messages en français
        $request->validate([
            'devoir_type' => 'required|in:js,sql,php', // Types valides de devoir
            'devoir_fichier' => 'required|file|mimes:pdf,docx,zip|max:10240', // Limite de 10 Mo
        ], [
            'devoir_type.required' => 'Le type de devoir est obligatoire.',
            'devoir_type.in' => 'Veuillez sélectionner un type de devoir valide.',
            'devoir_fichier.required' => 'Le fichier de devoir est obligatoire.',
            'devoir_fichier.file' => 'Le fichier téléchargé doit être un fichier valide.',
            'devoir_fichier.mimes' => 'Le fichier de devoir doit être au format pdf, docx, ou zip.',
            'devoir_fichier.max' => 'Le fichier ne doit pas dépasser 10 Mo.',
        ]);

        // Obtenez le fichier téléchargé
        $file = $request->file('devoir_fichier');
        $type = $request->input('devoir_type'); // Récupérer le type de devoir

        // Définir le nom du fichier en fonction du type
        $fileName = 'devoir_' . $type . '.' . $file->getClientOriginalExtension(); // Format par ex: devoir_sql.pdf

        // Stocker le fichier avec son nom sous le bon dossier sur le disque public
        $filePath = $file->storeAs('devoirs/' . $type, $fileName, 'public'); 

        return back()->with('success', 'Le devoir a été téléchargé avec succès');
    }

    // Afficher les devoirs pour l'étudiant
    public function showDevoirs() {
        // Récupérer les devoirs depuis le dossier de stockage
        $devoirs = collect([
            ['type' => 'sql', 'description' => 'Ce devoir vous aidera à comprendre les bases du SQL.', 'file_name' => 'devoir_sql.pdf'],
            ['type' => 'js', 'description' => 'Un devoir pour évaluer vos compétences en JavaScript.', 'file_name' => 'devoir_js.pdf'],
            ['type' => 'php', 'description' => 'Un devoir pour évaluer vos compétences en PHP.', 'file_name' => 'devoir_php.pdf']
        ]);

        // Vérifier si tous les devoirs sont vides
        $allEmpty = true;

        foreach ($devoirs as $devoir) {
            $path = 'devoirs/' . $devoir['type'] . '/' . $devoir['file_name'];
            if (Storage::disk('public')->exists($path)) {
                $allEmpty = false; // Si un fichier est trouvé, tous ne sont pas vides
                break;
            }
        }

        // Filtrer les devoirs existants
        $devoirs = $devoirs->filter(function ($devoir) {
            return Storage::disk('public')->exists('devoirs/' . $devoir['type'] . '/' . $devoir['file_name']);
        });

        return view('devoiretu', compact('devoirs', 'allEmpty'));
    }
}