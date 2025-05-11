<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Mostrar el formulario de login
     public function showLoginForm()
    {
        return view('login'); // o 'auth.login' si está en resources/views/auth/login.blade.php
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($credentials['email'] === 'test@test.com' && $credentials['password'] === 'test') {
            session(['logged_in' => true]);
            return redirect('vacantes');
        }

        return back()->with('error', 'Credenciales incorrectas.');
    }

}
