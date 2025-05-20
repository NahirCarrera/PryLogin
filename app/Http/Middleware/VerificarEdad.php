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

        if ($tipo === 'mayor' && $user->edad >= 18) {
            return $next($request);
        }

        if ($tipo === 'menor' && $user->edad < 18) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'No tienes permiso para acceder a esta página.');
    }
}
