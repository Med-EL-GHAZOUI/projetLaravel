<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemsTable extends Migration{
    public function up(){// Création de la table 'problems'
        Schema::create('problems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->text('description');
            $table->timestamps();
        });
    }// Suppression de la table 'problems'
    public function down(){
        Schema::dropIfExists('problems');
    }
}