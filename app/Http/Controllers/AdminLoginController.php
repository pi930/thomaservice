<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

   public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required',
        'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {

        if (auth()->user()->is_admin) {
            return redirect('/admin/dashboard');
        }

        Auth::logout();
        return back()->withErrors(['email' => 'Accès réservé à l’administrateur.']);
    }

    return back()->withErrors(['email' => 'Identifiants incorrects.']);
}

}

