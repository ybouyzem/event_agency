<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionnaireController;
use App\Http\Middleware\CheckGestionnaire;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


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
Route::match(['get', 'post'], '/index/modifierClientInfo/{clientId}', [ClientController::class, 'modifierClientInfo'])->name('modifierClientInfo');
Route::post('/client/change-password/{clientId}', [ClientController::class, 'changePassword'])->name('changePassword');



Route::match(['get', 'post'], '/index/signup', [ClientController::class, 'signupClient'])->name('signupClient');
Route::match(['get', 'post'], '/signin', [ClientController::class, 'signinClient'])->name('signinClient');
Route::get('/index/logout', [ClientController::class, 'logout'])->name('logout');

//favoris
Route::get('/index/{id}/{id_service}/{id_gest}', [ClientController::class, 'favoris'])->name('favoris');
Route::get('/index/delfav/{clientId}/{idService}/{gestionnaireId}', [ClientController::class, 'deleteFavoris'])->name('deleteFavoris');
Route::get('/index/mesfavoris', [ClientController::class, 'favorisClient'])->name('favorisClient');

//promotion
Route::match(['get', 'post'], '/promotion', [PromotionController::class, 'promotion'])->name('promotion');
Route::match(['get', 'post'], '/add-promotion', [PromotionController::class, 'addPromotion'])->name('addPromotion');
Route::match(['get', 'post'], '/delete-promotion', [PromotionController::class, 'deletePromotion'])->name('deletePromotion');


//forgot password
Route::get('password/reset', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [PasswordResetController::class, 'sendResetCode'])->name('password.reset.send');
// Route::get('/test-email', function () {
//     $code = Str::random(6);
//     Mail::to("bouyzemyounes1@gmail.com")->send(new App\Mail\PasswordResetCode($code));
//     return 'Email sent!';
// });



Route::get('/auth/google', [ClientController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [ClientController::class, 'handleGoogleCallback']);






//allGest
Route::get('/index/allGest', [IndexController::class, 'allGest'])->name('allGest');
//allPrestataires
Route::get('/index/allPres', [GestionnaireController::class, 'allPres'])->name('allPres');

// // Show the form to request a password reset link
// Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// // Handle the form submission to send the reset link
// Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// // Show the form to reset the password
// Route::get('reset-password/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');

// // Handle the form submission to reset the password
// Route::post('reset-password', [PasswordResetController::class, 'reset'])->name('password.update');


//admin
// Route::get('/index-admin', [AdminController::class, 'index'])->name('index');


// Route::get('/index-gestionnaire', [GestionnaireController::class, 'index'])
//     ->name('index-gestionnaire')
//     ->middleware(CheckGestionnaire::class);
