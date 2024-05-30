<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Hash as HashFacade;
use Illuminate\Support\Facades\Session;
use App\Models\Client;

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

    public function logout()
    {
        session()->forget('client');
        return redirect()->route('index');
    }

}

