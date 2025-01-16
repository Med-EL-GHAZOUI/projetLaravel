<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DevoirController;
use App\Http\Controllers\ProblemController;


// Route index
Route::get('/', function () {
    return view('index');
});

// Routes principales pour se connecter ou enregistrer un compte
Route::get('login', [AuthController::class, 'index'])->name('login'); // Main login page with 2 buttons
Route::get('register', [AuthController::class, 'showRegisterPage'])->name('register'); // Main register page with 2 buttons

// Routes pour l'enregistrement ou la connection d'un etudiant
Route::get('loginetu', [AuthController::class, 'showLoginStudent'])->name('loginetu'); // Student login page
Route::post('loginetu', [AuthController::class, 'loginStudent'])->name('login.student'); // Student login action
Route::get('registeretu', [AuthController::class, 'showRegisterStudent'])->name('registeretu'); // Student register page
Route::post('registeretu', [AuthController::class, 'registerStudent'])->name('register.student'); // Student register action

// Routes pour l'enregistrement ou la connection d'un professeur
Route::get('loginprof', [AuthController::class, 'showLoginProfessor'])->name('loginprof'); // Professor login page
Route::post('loginprof', [AuthController::class, 'loginProfessor'])->name('login.professor'); // Professor login action
Route::get('registerprof', [AuthController::class, 'showRegisterProfessor'])->name('registerprof'); // Professor register page
Route::post('registerprof', [AuthController::class, 'registerProfessor'])->name('register.professor'); // Professor register action

// Logout Route
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Routes des devoirs
Route::get('/devoiretu', [DevoirController::class, 'showDevoirs'])->name('devoiretu');  // Afficher les devoirs pour l'étudiant
Route::get('/devoirprof', [DevoirController::class, 'showUploadForm'])->name('devoirprof');  // Formulaire d'upload pour le professeur
Route::post('/devoirprof/upload', [DevoirController::class, 'uploadDevoir'])->name('devoir.upload');  // Traitement de l'upload

Route::get('/problems/create', [ProblemController::class, 'create'])->name('problems.create');
Route::post('/problems', [ProblemController::class, 'store'])->name('problems.store');