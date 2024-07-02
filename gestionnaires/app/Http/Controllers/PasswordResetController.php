<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Client;
use App\Models\Gestionnaire;
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
    public function showResetFormGest()
    {
        return view('forget-pwd-gestionnaire');
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

    public function sendResetCodeGest(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:client,email',
        ]);

        $gest = Gestionnaire::where('email', $request->email)->first();
        $code = Str::random(6);

        $gest->password_reset_code = $code;
        $gest->password_reset_code_expires_at = now()->addMinutes(10);
        $gest->save();

        Mail::to($gest->email)->send(new PasswordResetCode($code));

        Session::put('reset_email', $gest->email);

        return redirect()->route('enter.reset.code.gest')->with('status', 'Code de réinitialisation envoyé à votre e-mail.');
    }
    
    public function showEnterResetCodeForm()
    {
        return view('password.check-reset-code-client');
    }

    public function showEnterResetCodeFormGest()
    {
        return view('password.check-reset-code-gest');
    }

    public function showPasswordResetForm()
    {
        return view('password.reset-pwd-client');
    }
    public function showPasswordResetFormGest()
    {
        return view('password.reset-pwd-gest');
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

    public function verifyCodeGest(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
        ]);
        $email = Session::get('reset_email');
        if (!$email) {
            return back()->withErrors(['error' => 'Session expired. Please request a new reset code.']);
        }
        
        $gest = Gestionnaire::where('email', $email)->first();
        if ($gest && $gest->password_reset_code === $request->code && $gest->password_reset_code_expires_at > now()) {
            // Code is valid
            return redirect()->route('reset.pwd.gest')->with('status', 'Code verified. You can now reset your password.');
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


    public function resetPasswordGest(Request $request)
    {
        $request->validate([
            'password' => 'required|string|confirmed',
        ]);
    
        $email = Session::get('reset_email');
        if (!$email) {
            return redirect()->view('forget-pwd-gestionnaire')->withErrors(['error' => 'Session expirée. Veuillez demander un nouveau code de réinitialisation.']);
        }
    
        $gest = Gestionnaire::where('email', $email)->first();
        if ($gest && $gest->password_reset_code_expires_at > now()) {
            $gest->motDePasse = Hash::make($request->password);
            $gest->password_reset_code = null;
            $gest->password_reset_code_expires_at = null;
            $gest->save();
            return redirect()->route('authentification')->with('status', 'Mot de passe réinitialisé avec succès. Vous pouvez maintenant vous connecter.');
        } else {
            return redirect()->route('enter.reset.code.gest')->withErrors(['error' => 'Le code de réinitialisation a expiré.']);
        }
    }
    
}

