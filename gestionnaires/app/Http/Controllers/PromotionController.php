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

    // Get today's date
    $today = now();

    // Get the gestionnaire's original price
    $gestionnaire = session('gestionnaire');
    $originalPrice = $gestionnaire->prix;

    // Validate that dateFin is in the future
    if (strtotime($dateFin) <= strtotime($today)) {
        return redirect()->back()->with('error', 'La date de fin doit être une date future.');
    }

    // Validate that the new price is less than the original price
    if ($nouveauPrix >= $originalPrice) {
        return redirect()->back()->with('error', 'Le nouveau prix doit être inférieur au prix original.');
    }

    // Check if a promotion exists for the gestionnaire ID
    $existingPromotion = Promotion::where('id_gestionnaire', $gestionnaire->id)->first();

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
        $promotion->id_gestionnaire = $gestionnaire->id; // Assuming the promotion is linked to a gestionnaire
        $promotion->save();
        $message = 'La promotion a été ajoutée avec succès!';
    }

    return redirect()->back()->with('success', $message);
}


public function deletePromotion()
{

    $idGest = session('gestionnaire')->id;
    $promotion = Promotion::where('id_gestionnaire', $idGest)->first();
    if ($promotion) {
        $promotion->delete();
        return redirect()->back()->with('success', 'Promotion deleted successfully.');
    } else {
        return redirect()->back()->with('error', 'Promotion not found.');
    }
}
    
}
