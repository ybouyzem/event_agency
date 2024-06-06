<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Google_Client;
use Google_Service_Oauth2;
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

    public function modifierClientInfo(Request $request, $clientId)
    {
        $validatedData = $request->validate([
            'nomComplet' => 'nullable|string|max:50',
            'ville' => 'nullable|string|max:50',
            'telephone' => 'nullable|numeric',
        ]);
    
        // Find the client by id
        $client = Client::find($clientId);
    
        if (!$client) {
            return redirect()->back()->with('error', "Client couldn't be updated");
        }
    
        // Update the client fields using object-oriented approach
        $client->fill($validatedData);
    
        // Save the updated client
        $client->save();
        Session::forget('client');
        Session::put('client', $client);
        return redirect()->back()->with('success', 'Client information updated successfully');
    }
    
    public function changePassword(Request $request, $clientId)
    {
        // Find the client by ID
        $client = Client::find($clientId);
    
        if (!$client) {
            return redirect()->back()->with('error', 'Client not found');
        }
    
        // Validate the request data
        $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|confirmed',
        ]);
    
        // Check if the old password matches the current password
        if (!Hash::check($request->old_password, $client->motPasse)) {
            return redirect()->back()->with('errorpwd', 'Ancien mot de passe incorrect');
        }
    
        // Update the password
        $client->motPasse = Hash::make($request->new_password);
        $client->save();
    
        return redirect()->back()->with('successpwd', 'Mot de passe changé avec succès');
    }


    public function redirectToGoogle()
{
    $client = new Google_Client();
    $client->setClientId(env('GOOGLE_CLIENT_ID'));
    $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
    $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));
    $client->setScopes(['email', 'profile']);

    return Redirect::to($client->createAuthUrl());
}
public function handleGoogleCallback(Request $request)
{
    $client = new Google_Client();
    $client->setClientId(env('GOOGLE_CLIENT_ID'));
    $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
    $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));

    $token = $client->fetchAccessTokenWithAuthCode($request->code);
    $client->setAccessToken($token);

    $oauth2 = new Google_Service_Oauth2($client);
    $userInfo = $oauth2->userinfo->get();

    // Check if the user with this email already exists in the database
    $existingClient = Client::where('email', $userInfo->email)->first();

    if (!$existingClient) {
        // Create a new client account if it doesn't exist
        $newClient = new Client();
        $newClient->nomComplet = $userInfo->name;
        $newClient->email = $userInfo->email;
        // Set other necessary fields
        $newClient->save();
    } else {
        // Update the existing client account with Google account information
        $existingClient->nomComplet = $userInfo->name;
        // Update other necessary fields
        $existingClient->save();
    }

    // Redirect or do something else
}

    public function logout()
    {
        session()->forget('client');
        return redirect()->route('index');
    }

}

