<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordResetCode;

class PasswordResetController extends Controller
{
    // Show the form to request a password reset link
    // Show the form to request a password reset code
    public function showResetForm()
    {
        return view('forget-pwd');
    }

    // Handle the password reset request
    public function sendResetCode(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email|exists:client,email',
        // ]);

        $client = Client::where('email', $request->email)->first();
        $code = Str::random(6); // Generate a random 6-character code

        // Store the code and expiration time in the database
        $client->password_reset_code = $code;
        $client->password_reset_code_expires_at = now()->addMinutes(10);
        $client->save();

        // Send the reset code via email
        Mail::to("bouyzemyounes1@gmail.com")->send(new PasswordResetCode($code));

        return back()->with('status', 'Code de réinitialisation envoyé à votre e-mail.');
    }
    
}

