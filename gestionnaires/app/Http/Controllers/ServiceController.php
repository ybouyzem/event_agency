<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{


public function allServices()
{
    $categories = DB::table("categorie")->get();


    $id_gestionnaire = session('gestionnaire')->id ;
    $services = db::table('categorie')
        ->join('service', 'categorie.id', '=', 'service.id_categorie')
        ->select('categorie.nom', 'service.*')
        ->where('service.id_gestionnaire', $id_gestionnaire)
        ->get();

    return view('services-gestionnaire', ['services' => $services], ['categories' => $categories]);
}

public function ajouterServicePage()
{
    $categories = DB::table("categorie")->get();
    return view('ajouter-service-page', ['categories' => $categories]);
}

public function ajouterService(Request $request)
{
    // Validate the form data

    $id_categorie = $request->input('id_categorie');
    $titre = $request->input('titre');
    $detail = $request->input('detail');
    $prix_debut = $request->input('prix_debut');
    $prix_fin = $request->input('prix_fin');
    $deplacement = $request->input('deplacement');
    $imagePath = $request->input('image');

    // Create a new Service instance
    $service = new Service();
    $service->id_gestionnaire =  session('gestionnaire')->id ; // Assuming you have a logged-in user
    $service->id_categorie = $id_categorie;
    $service->titre = $titre;
    $service->image = $imagePath;
    $service->detail = $detail;
    $service->{'prix-debut'} = $prix_debut;
    $service->{'prix-fin'} = $prix_fin;
    $service->deplacement = $deplacement;
    $service->save();

    // Redirect back with a success message
    return redirect()->route('allServices');
}

public function supprimerService($serviceId)
{
    $service = Service::find($serviceId);
    if (!$service) {
        return response()->json(['error' => 'Service not found'], 404);
    }

    $service->delete();
    return redirect()->back();
}


public function modifierService()
{

}

}
