<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Hash;
use App\Http\Requests\GestionnaireRequest;

use Illuminate\Http\Request;
use App\Models\Gestionnaire;
use Illuminate\Support\Facades\Hash as HashFacade;
use App\Http\Middleware\CheckGestionnaire;



class GestionnaireController extends Controller
{
    public function index()
    {
        return view("index-gestionnaire");
    }
    public function authentification()
    {
        return view("se-connecter-gestionnaire");
    }
    public function signin(Request $request)
    {
        $email = $request->email;
        $password = $request->motPasse;
    
        $gestionnaire = Gestionnaire::where('email', $email)->first();
    
        if ($gestionnaire) {
            if (HashFacade::check($password, $gestionnaire->motDePasse)) {
                // Password matches
                // Store the authenticated gestionnaire's ID and object in the session
                session(['gestionnaire_id' => $gestionnaire->id]);
                session(['gestionnaire' => $gestionnaire]);
                return redirect()->route("index-gestionnaire")->with("success", "Signin successful");
            } else {
                // Password does not match
                return redirect()->back()->with("error", "Invalid email or password");
            }
        } else {
            // Gestionnaire not found with the provided email
            return redirect()->back()->with("error", "Invalid email or password");
        }
    }
    

    public function signup(Request $request)
    {
        try {
            $gestionnaire = new Gestionnaire();
    
            $gestionnaire->nom = $request->nomAgence;
            $gestionnaire->proprietaire = $request->nomAgence;
            $gestionnaire->type = $request->type;
            $gestionnaire->ville = $request->ville;
            $gestionnaire->adresse = $request->ville;
            $gestionnaire->telephone = $request->telephone;
            $gestionnaire->detail = $request->type;
            $gestionnaire->email = $request->email; 
            $gestionnaire->motDePasse = HashFacade::make($request->motPasse); // Hash the password
    
            $gestionnaire->save();
    
            return redirect()->back()->with("success", "Gestionnaire added successfully");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "An error occurred while adding the gestionnaire: " . $e->getMessage());
        }
    }

    public function logout()
    {
        // Clear the session
        session()->forget('gestionnaire');

    // Redirect to the login page
        return redirect()->route('authentification');
    }

    
}
