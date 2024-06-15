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
        $nouveauPrix = $request->input('newPrice') ?? 0; // Default to 0 if not provided
        $dateFin = $request->input('dateFin');
    
        // Check if a promotion exists for the gestionnaire ID
        $existingPromotion = Promotion::where('id_gestionnaire', session('gestionnaire')->id)->first();
    
        if ($existingPromotion) {
            // Modify the existing promotion
            $existingPromotion->reduction = $nouveauPrix;
            $existingPromotion->date_fin = $dateFin;
            $existingPromotion->save();
            $message = 'La promotion a été modifiée avec succès!';
        } else {
            // Create a new promotion
            $promotion = new Promotion();
            $promotion->reduction = $nouveauPrix;
            $promotion->date_fin = $dateFin;
            $promotion->id_gestionnaire = session('gestionnaire')->id; // Assuming the promotion is linked to a gestionnaire
            $promotion->save();
            $message = 'La promotion a été ajoutée avec succès!';
        }
    
        return redirect()->back()->with('success', $message);
    }
    
}
