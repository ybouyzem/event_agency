<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gestionnaire;


class IndexController extends Controller
{
    public function index()
    {
        $gestionnaires = Gestionnaire::all();
        return view('index', ['gestionnaires' => $gestionnaires]);    }
    
    public function accountType()
    {
        return view("account-type");
    }
}
