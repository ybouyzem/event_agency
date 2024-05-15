<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{

    
// Assuming this function is inside a controller
public function allServices()
{
    $id_gestionnaire = session('gestionnaire')->id ;
    $services = db::table('categorie')
        ->join('service', 'categorie.id', '=', 'service.id_categorie')
        ->select('categorie.nom', 'service.*')
        ->where('service.id_gestionnaire', $id_gestionnaire)
        ->get();

    return view('services-gestionnaire', ['services' => $services]);
}   
}
