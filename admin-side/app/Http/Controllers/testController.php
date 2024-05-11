<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function login()
    {
        return view("se-connecter");
    }

    public function reservations()
    {
        return view("reservations");
    }
    public function services()
    {
        return view('services');
    }
    
    public function clients()
    {
        return view('clients');
    }
}
