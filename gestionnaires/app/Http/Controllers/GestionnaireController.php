<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

// use App\Http\Controllers\Hash;
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

    public function profile()
    {
        return view("profile-gestionnaire");
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
            $gestionnaire->type = $request->type;
            $gestionnaire->ville = $request->ville;
            $gestionnaire->telephone = $request->telephone;
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

    public function modiferInfoGestionnaire(Request $request, $gestId)
    {
        $validatedData = $request->validate([
            'service' => 'nullable|string|max:50',
            'proprietaire' => 'nullable|string|max:50',
            'nom' => 'nullable|string|max:50',
            'ville' => 'nullable|string|max:50',
            'adresse' => 'nullable|string|max:50',
            'telephone' => 'nullable|integer',
            'detail' => 'nullable|string|max:200',
        ]);
    
        // Find the gestionnaire by id
        $gestionnaire = Gestionnaire::find($gestId);
    
        if (!$gestionnaire) {
            return redirect()->back()->with("error", "Gestionnaire couldn't be updated");
        }
    
        // Update the gestionnaire fields using object-oriented approach
        $gestionnaire->fill($validatedData);
    
        // Save the updated gestionnaire
        $gestionnaire->save();
        Session::forget('gestionnaire');
        Session::put('gestionnaire', $gestionnaire);
        return redirect()->back()->with("success", 'Gestionnaire information updated successfully');
    }

    public function modifierImageGestionnaire(Request $request, $gestId)
    {
        $validatedData = $request->validate([
            'image1' => 'nullable|string',
            'image2' => 'nullable|string',
            'image3' => 'nullable|string',
            'image4' => 'nullable|string',
        ]);
        $gestionnaire = Gestionnaire::find($gestId);
         if (!$gestionnaire) {
            return redirect()->back()->with("error", "Gestionnaire couldn't be updated");
        }
    
        // Update the gestionnaire fields using object-oriented approach
        $gestionnaire->fill($validatedData);
    
        // Save the updated gestionnaire
        $gestionnaire->save();
        Session::forget('gestionnaire');
        Session::put('gestionnaire', $gestionnaire);
        return redirect()->back()->with("success", 'Gestionnaire information updated successfully');
    }

    public function modifiermotPasse(Request $request)
    {
        
            $request->validate([
                'oldMotPass' => 'required|string',
                'newMotPass' => 'required|string|min:8',
            ]);
    
            $gestionnaire = Auth::gestionnaire();
    
            // Check if the old password matches
            
            // if (!HashFacade::check($request->oldMotPass, $user->motDePasse)) {
            //     return redirect()->back()->with('error', "Old password doesn't match");
            // }
    
            // Update the password
            $user->motDePasse = HashFacade::make($request->newMotPass);
            $user->save();
    
            return redirect()->back()->with('success', 'Password updated successfully');
       
    }
    
    
}
