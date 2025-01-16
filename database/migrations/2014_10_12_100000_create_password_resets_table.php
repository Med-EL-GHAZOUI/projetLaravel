<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */// Création de la table 'password_resets'
    public function up(){
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */// Suppression de la table 'password_resets'
    public function down(){
        Schema::dropIfExists('password_resets');
    }
};