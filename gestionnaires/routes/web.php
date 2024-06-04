<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionnaireController;
use App\Http\Middleware\CheckGestionnaire;


Route::get("/", [IndexController::class,"index"])->name("index");
// Route::get("/", [GestionnaireController::class,"allGest"])->name("allGest");

Route::match(['get', 'post'], '/se-connecter-gestionnaire', [GestionnaireController::class, 'authentification'])->name('authentification');
Route::match(['get', 'post'], '/se-connecter-gestionnaire/add', [GestionnaireController::class, 'signup'])->name('signup');
Route::match(['get', 'post'], '/se-connecter-gestionnaire/login', [GestionnaireController::class, 'signin'])->name('signin');
Route::match(['get', 'post'], '/index-gestionnaire', [GestionnaireController::class, 'index'])->name('index-gestionnaire');
Route::get('/se-connecter-gestionnaire/logout', [GestionnaireController::class, 'logout'])->name('logout');
Route::match(['get', 'post'], '/services-gestionnaire', [ServiceController::class, 'allServices'])->name('allServices');
Route::match(['get', 'post'], '/services-gestionnaire/ajouter', [ServiceController::class, 'ajouterServicePage'])->name('ajouterServicePage');
Route::match(['get', 'post'], '/services-gestionnaire/add', [ServiceController::class, 'ajouterService'])->name('ajouter-service');
Route::match(['get', 'delete'], '/services-gestionnaire/supprimer/{serviceId}', [ServiceController::class, 'supprimerService']);
Route::match(['get', 'post'], '/services-gestionnaire/modifier/{serviceId}', [ServiceController::class, 'modifierService'])->name('modifier-service');
Route::get('/se-connecter-gestionnaire/account-type', [IndexController::class, 'accountType'])->name('accountType');
Route::get('/profile-gestionnaire', [GestionnaireController::class, 'profile'])->name('profileGestionnaire');
Route::get('/gestionnaire/{id}', [GestionnaireController::class, 'showDetail'])->name('gestionnaire.showDetail');

//gestionnaire profile
Route::match(['get', 'post'], '/profile-gestionnaire/modifier/{gestId}', [GestionnaireController::class, 'modiferInfoGestionnaire'])->name('modiferInfoGestionnaire');
Route::match(['get', 'post'], '/profile-gestionnaire/modifierImages/{gestId}', [GestionnaireController::class, 'modifierImageGestionnaire'])->name('modifierImageGestionnaire');
Route::match(['get', 'post'], '/profile-gestionnaire/modiferMotPasse/{gestId}', [GestionnaireController::class, 'modifierMotPasse'])->name('modifierMotPasse');


//client
Route::get( '/index/signin', [ClientController::class, 'index']);
Route::get( '/index/profile', [ClientController::class, 'profileClient'])->name('profileClient');

Route::match(['get', 'post'], '/index/signup', [ClientController::class, 'signupClient'])->name('signupClient');
Route::match(['get', 'post'], '/signin', [ClientController::class, 'signinClient'])->name('signinClient');
Route::get('/index/logout', [ClientController::class, 'logout'])->name('logout');

//favoris
Route::get('/index/{id}/{id_service}/{id_gest}', [ClientController::class, 'favoris'])->name('favoris');
Route::get('/index/delfav/{clientId}/{idService}/{gestionnaireId}', [ClientController::class, 'deleteFavoris'])->name('deleteFavoris');
Route::get('/index/mesfavoris', [ClientController::class, 'favorisClient'])->name('favorisClient');



//admin
// Route::get('/index-admin', [AdminController::class, 'index'])->name('index');


// Route::get('/index-gestionnaire', [GestionnaireController::class, 'index'])
//     ->name('index-gestionnaire')
//     ->middleware(CheckGestionnaire::class);
