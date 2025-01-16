<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Etudiant extends Controller{
    // Afficher la page de connexion pour les étudiants
    public function login() {
        return view('loginetud');
    }
}