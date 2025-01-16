<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// Création de la classe EtudiantSeeder
class EtudiantSeeder extends Seeder{
    public function run(){
        DB::table('etudiant')->insert([
            'name' => 'Etudiant Test',
            'email' => 'etudiant@test.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('etudiant')->insert([
            'name' => 'Etudiant Deux',
            'email' => 'etudiant2@test.com',
            'password' => Hash::make('password2'),
        ]);
        DB::table('etudiant')->insert([
            'name' => 'Etudiant Trois',
            'email' => 'etudiant3@test.com',
            'password' => Hash::make('password3'),
        ]);
    }
}