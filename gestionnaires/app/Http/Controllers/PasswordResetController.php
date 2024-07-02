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
use Illuminate\Support\Facades\Session;
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
        $request->validate([
            'email' => 'required|email|exists:client,email',
        ]);

        $client = Client::where('email', $request->email)->first();
        $code = Str::random(6);

        $client->password_reset_code = $code;
        $client->password_reset_code_expires_at = now()->addMinutes(10);
        $client->save();

        Mail::to($client->email)->send(new PasswordResetCode($code));

        Session::put('reset_email', $client->email);

        return redirect()->route('enter.reset.code')->with('status', 'Code de réinitialisation envoyé à votre e-mail.');
    }
    
    public function showEnterResetCodeForm()
    {
        return view('password.check-reset-code-client');
    }

    public function showPasswordResetForm()
    {
        return view('password.reset-pwd-client');
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
        ]);
        $email = Session::get('reset_email');
        if (!$email) {
            return back()->withErrors(['error' => 'Session expired. Please request a new reset code.']);
        }
        
        $client = Client::where('email', $email)->first();
        if ($client && $client->password_reset_code === $request->code && $client->password_reset_code_expires_at > now()) {
            // Code is valid
            return redirect()->route('reset.pwd.client')->with('status', 'Code verified. You can now reset your password.');
        } 
        else {
            // Code is invalid or expired
            return back()->withErrors(['code' => 'Code incorrect.']);
        }
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|confirmed',
        ]);
    
        $email = Session::get('reset_email');
        if (!$email) {
            return redirect()->view('forget-pwd')->withErrors(['error' => 'Session expirée. Veuillez demander un nouveau code de réinitialisation.']);
        }
    
        $client = Client::where('email', $email)->first();
        if ($client && $client->password_reset_code_expires_at > now()) {
            $client->motPasse = Hash::make($request->password);
            $client->password_reset_code = null;
            $client->password_reset_code_expires_at = null;
            $client->save();
            return redirect()->route('signinClient')->with('status', 'Mot de passe réinitialisé avec succès. Vous pouvez maintenant vous connecter.');
        } else {
            return redirect()->route('enter.reset.code')->withErrors(['error' => 'Le code de réinitialisation a expiré.']);
        }
    }
    
}

