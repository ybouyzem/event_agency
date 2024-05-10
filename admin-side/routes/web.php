<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

Route::get('/', [testController::class, 'login'])->name('login');
Route::get("/index", [testController::class, 'index'])->name('index');
Route::get('/reservations', [testController::class,'reservations'])->name('reservation');
Route::get('/services', [testController::class,'services'])->name('services');
Route::get('/clients', [ClientController::class,'allClients']);
