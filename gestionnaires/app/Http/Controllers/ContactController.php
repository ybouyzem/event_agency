<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'nomComplet' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'object' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Save the form data to the database
        Contact::create([
            'nomComplet' => $request->nomComplet,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'object' => $request->object,
            'message' => $request->message,
        ]);

        // Redirect or respond as needed
        return redirect()->back()->with('contact_success', 'Votre message a été envoyé avec succès!');
    }
}
