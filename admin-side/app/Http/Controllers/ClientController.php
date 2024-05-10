<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function allClients()
    {
        $allClients = Client::all();
        return view("clients", compact('allClients'));
    }
}
