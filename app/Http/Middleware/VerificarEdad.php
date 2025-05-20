<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificarEdad
{
    /**
     * Maneja una solicitud entrante.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string  $tipo  // 'menor' o 'mayor'
     */
    public function handle(Request $request, Closure $next, $tipo)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('/login');
        }

        if ($tipo === 'bebe' && $user->edad >= 0 && $user->edad <= 5) {
            return $next($request);
        }

        if ($tipo === 'nino' && $user->edad >= 6 && $user->edad <= 12) {
            return $next($request);
        }

        if ($tipo === 'adolescente' && $user->edad >= 13 && $user->edad <= 17) {
            return $next($request);
        }
        if ($tipo === 'joven' && $user->edad >= 18 && $user->edad <= 25) {
            return $next($request);
        }
        if ($tipo === 'adulto' && $user->edad >= 26 && $user->edad <= 59) {
            return $next($request);
        }
        if ($tipo === 'mayor' && $user->edad >= 60 && $user->edad <= 74) {
            return $next($request);
        }
        if ($tipo === 'longevo' && $user->edad >= 75 && $user->edad <= 120) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'No tienes permiso para acceder a esta página.');
    }
}
