<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Hash as HashFacade;
use Illuminate\Support\Facades\Session;
use App\Models\Client;
use App\Models\Favoris;
use App\Models\Gestionnaire;

class ClientController extends Controller
{
    public function index()
    {
        return view("se-connecter-client");
    }

    public function profileClient()
    {
        return view("profile-client");
    }
    public function allClients()
    {
        $allClients = Client::all();
        return view("clients", compact('allClients'));
    }

    public function signupClient(Request $request)
    {
        try {
            $client = new Client();

            $client->nomComplet = $request->nomComplet;
            $client->ville = $request->ville;
            $client->telephone = $request->telephone;
            $client->email = $request->email;
            $client->motPasse = HashFacade::make($request->motPasse); // Hash the password

            $client->save();

            return redirect()->back()->with("success", "Client added successfully");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "An error occurred while adding the client: " . $e->getMessage());
        }
    }

    public function signinClient(Request $request)
    {
        $email = $request->email;
        $password = $request->motPasse;
    
        $client = Client::where('email', $email)->first();
    
        if ($client) {
            if (HashFacade::check($password, $client->motPasse)) {
                // Password matches
                session(['client' => $client]);
                return redirect()->route("index")->with("success", "Signin successful");
            } else {
                // Password does not match
                return redirect()->back()->with("error", "Invalid email or password");
            }
        } else {
            // Gestionnaire not found with the provided email
            return redirect()->back()->with("error", "Invalid email or password");
        }
    }

    //add to favoris


    public function favoris($clientId, $idService, $idGest)
    {
   

        // Create a new Favoris instance
        $favoris = new Favoris();
    
        // Assign values to the Favoris instance
        $favoris->id_client = $clientId;
        $favoris->id_service = null;
        $favoris->id_gest = $idGest;
    
        // Save the Favoris instance
        if ($favoris->save()) {
            return redirect()->back()->with('success', 'Item added to your favorites.');
        } else {
            return redirect()->back()->with('error', 'Failed to add item to your favorites.');
        }
    }
    
    //delete from favoris
    public function deleteFavoris($clientId, $idService, $gestionnaireId)
    {
        // Find the favoris entry to delete
        $favoris = Favoris::where('id_client', $clientId)
            ->where('id_gest', $gestionnaireId)
            ->first();

        if ($favoris) {
        // Delete the favoris entry
            $favoris->delete();
            return redirect()->back()->with('success', 'Favoris deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Favoris not found.');
        }
    }

    public function favorisClient()
    {
        $favoriteGests = Favoris::all();
        $gestionnaires = Gestionnaire::all();

        return view('favoris-client', ['gestionnaires' => $gestionnaires, 'favoriteGests' => $favoriteGests]); 

    }


    public function logout()
    {
        session()->forget('client');
        return redirect()->route('index');
    }

}

