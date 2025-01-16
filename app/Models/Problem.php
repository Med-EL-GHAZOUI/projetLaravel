<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Modèle pour les problèmes
class Problem extends Model{
    use HasFactory;// Les champs de la table qui peuvent être remplis
    protected $fillable = ['name', 'email', 'description'];// Un problème appartient à un utilisateur
}