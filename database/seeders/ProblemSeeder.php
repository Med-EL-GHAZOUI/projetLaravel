<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProblemSeeder extends Seeder{
    public function run(){
        DB::table('problems')->insert([
            'name' => 'Problème Test',
            'email' => 'probleme@test.com',
            'description' => 'Ceci est un problème de test.',
        ]);
    }
}