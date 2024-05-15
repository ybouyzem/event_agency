<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionnaireController;
use App\Http\Middleware\CheckGestionnaire;

Route::match(['get', 'post'], '/se-connecter-gestionnaire', [GestionnaireController::class, 'authentification'])->name('authentification');
Route::match(['get', 'post'], '/se-connecter-gestionnaire/add', [GestionnaireController::class, 'signup'])->name('signup');
Route::match(['get', 'post'], '/se-connecter-gestionnaire/login', [GestionnaireController::class, 'signin'])->name('signin');
Route::match(['get', 'post'], '/index-gestionnaire', [GestionnaireController::class, 'index'])->name('index-gestionnaire');
Route::get('/se-connecter-gestionnaire/logout', [GestionnaireController::class, 'logout'])->name('logout');
Route::match(['get', 'post'], '/services-gestionnaire', [ServiceController::class, 'allServices']);
Route::match(['get', 'post'], '/services-gestionnaire/add', [ServiceController::class, 'ajouterService'])->name('ajouter-service');

// Route::get('/index-gestionnaire', [GestionnaireController::class, 'index'])
//     ->name('index-gestionnaire')
//     ->middleware(CheckGestionnaire::class);
