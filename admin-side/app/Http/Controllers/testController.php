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
        return view("login");
    }

    public function reservations()
    {
        return view("reservations");
    }
    public function services()
{
    return view('services');
}
}
