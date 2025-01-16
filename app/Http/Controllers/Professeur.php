<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Professeur extends Controller{
    // Afficher la page de connexion pour les professeurs
    public function login() {
        return view('loginprof');
    }
}