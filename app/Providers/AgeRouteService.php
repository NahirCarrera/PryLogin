<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;

class AgeRouteService
{
    public static function redirectByAge(int $edad)
    {
        $rutas = [
            'bebes' => [0, 5],
            'ninos' => [6, 12],
            'adolescentes' => [13, 17],
            'jovenes' => [18, 25],
            'adultos' => [26, 59],
            'mayores' => [60, 74],
            'longevos' => [75, 120],
        ];

        foreach ($rutas as $nombreRuta => [$min, $max]) {
            if ($edad >= $min && $edad <= $max) {
                return redirect()->route($nombreRuta);
            }
        }

        abort(403, 'Edad no válida para redirección.');
    }
}
