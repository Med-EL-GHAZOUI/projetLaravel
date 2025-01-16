<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Problem;

class ProblemController extends Controller{
    // Afficher le formulaire de création de problème
    public function create(){
        return view('create');
    }
    // Enregistrer un problème
    public function store(Request $request){// Validation des données du formulaire
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'description' => 'required',
        ]);
        Problem::create([// Créer un problème
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ]);
        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Votre problème a été soumis avec succès.');
    }
}