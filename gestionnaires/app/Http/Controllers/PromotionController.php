<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Promotion;

class PromotionController extends Controller
{

    
    public function promotion()
    {
        // Retrieve promotions for the logged-in gestionnaire
        $promotion = Promotion::where('id_gestionnaire', session('gestionnaire')->id)->first();

        // Return the promotions to the view
        return view('promotion', compact('promotion'));
    }
    public function addPromotion(Request $request)
    {
        // Retrieve the necessary values from the request
        $nouveauPrix = $request->input('newPrice');
        $dateFin = $request->input('dateFin');

        // Assuming you have a Promotion model
        $promotion = new Promotion();
        $promotion->reduction = $nouveauPrix;
        $promotion->date_fin = $dateFin;
        $promotion->id_gestionnaire = session('gestionnaire')->id; // Assuming the promotion is linked to a gestionnaire
        $promotion->save();

        return redirect()->back()->with('success', 'La promotion a été ajoutée avec succès!');
    }
}
