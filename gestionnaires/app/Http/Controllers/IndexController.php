<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gestionnaire;
use App\Models\Favoris;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;



class IndexController extends Controller
{
    public function index()
    {
        $gestionnaires = Gestionnaire::all();
        // $clientId = session('client')->id;
        $favoriteGests = Favoris::all();
        $promotions = DB::select('SELECT * FROM promotion, gestionnaire WHERE promotion.id_gestionnaire = gestionnaire.id');

        return view('index', ['gestionnaires' => $gestionnaires, 'favoriteGests' => $favoriteGests, 'promotions' => $promotions]); 
    }
    

    public function accountType()
    {
        return view("account-type");
    }

    public function allGest()
    {
        $favoriteGests = Favoris::all();
        $gestionnaires = Gestionnaire::paginate(6); // 10 items per page

        return view('tous-gestionnaires', ['gestionnaires' => $gestionnaires, 'favoriteGests' => $favoriteGests]); 
    }
}
