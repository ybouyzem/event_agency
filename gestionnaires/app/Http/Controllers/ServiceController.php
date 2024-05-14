<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
class ServiceController extends Controller
{
    public function allCategories()
    {
        $categories = Category::all();
        return view("services", compact("categories"));
    }
}
