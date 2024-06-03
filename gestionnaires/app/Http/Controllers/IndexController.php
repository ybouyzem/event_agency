<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gestionnaire;
use App\Models\Favoris;
use Illuminate\Support\Facades\Session;


class IndexController extends Controller
{
    public function index()
    {
        $gestionnaires = Gestionnaire::all();
        // $clientId = session('client')->id;
        $favoriteGests = Favoris::all();
        return view('index', ['gestionnaires' => $gestionnaires, 'favoriteGests' => $favoriteGests]); 
    }
    

    public function accountType()
    {
        return view("account-type");
    }
}
