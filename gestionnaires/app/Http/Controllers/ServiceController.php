<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
class ServiceController extends Controller
{
    public function allServices()
    {
        // $categories = Category::all();
        return view("services-gestionnaire");
    }

    
}
