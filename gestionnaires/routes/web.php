<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionnaireController;

Route::get('/se-connecter-gestionnaire', [GestionnaireController::class, 'login']);
