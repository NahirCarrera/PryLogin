<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\AgeRouteService;

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

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            // Redirigir usando el servicio
            return AgeRouteService::redirectByAge($user->edad);
        }

        // Si falla la autenticación
        return back()->with('error', 'Correo o contraseña incorrectos');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidar la sesión para mayor seguridad
        $request->session()->invalidate();

        // Regenerar el token CSRF para evitar ataques
        $request->session()->regenerateToken();

        // Redirigir al login o a la página que prefieras
        return redirect()->route('login')->with('success', 'Has cerrado sesión correctamente.');
    }
}
