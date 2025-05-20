<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        // Validar los datos
        $credentials = $request->only('email', 'password');

        // Intentar autenticación
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirigir según edad
            $user = Auth::user();
            return $user->edad >= 18
                ? redirect()->route('mayores')
                : redirect()->route('menores');
        }

        // Si falla la autenticación
        return back()->with('error', 'Correo o contraseña incorrectos');
    }
}
