<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Hash;
use App\Http\Requests\GestionnaireRequest;
use Illuminate\Http\Request;
use App\Models\Gestionnaire;

class GestionnaireController extends Controller
{  
    public function signup(GestionnaireRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['motDePasse'] = Hash::make($request->motDePasse);
    
        try {
            $gestionnaire = Gestionnaire::create($validatedData);
            return response()->json(['message' => 'Profile created successfully', 'gestionnaire' => $gestionnaire], 201);
        } catch (\Exception $e) {
            // Log the error
            \Log::error($e->getMessage());
            return response()->json(['message' => 'Failed to create profile'], 500);
        }
    }
    
    
}
