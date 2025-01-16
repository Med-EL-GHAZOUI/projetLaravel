<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\DevoirController;


class AuthController extends Controller{    
    // Enregistrer un étudiant
    public function registerStudent(Request $request){
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);
        // Créer un compte étudiant
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'student'
        ]);
        // Récupérer les devoirs depuis le dossier de stockage
        $devoirs = collect([
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
        return view('devoiretu', compact('devoirs'))->with('success', 'Student account created successfully!');
    }
    // Enregistrer un Professor
    public function registerProfessor(Request $request){
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);
        // Créer un compte professeur
        User::create([ 
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'professor',
        ]);
        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Professor account created successfully!');
    }
}