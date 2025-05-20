<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\UsuarioBebeController;
use App\Http\Controllers\UsuarioNinoController;
use App\Http\Controllers\UsuarioAdolescenteController;
use App\Http\Controllers\UsuarioJovenController;
use App\Http\Controllers\UsuarioAdultoController;
use App\Http\Controllers\UsuarioMayorController; 
use App\Http\Controllers\UsuarioLongevoController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [LoginController::class, "index"])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Rutas para administradores
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});

// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin/registrar', [AdminController::class, 'create'])->name('admin.create');
// });

// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin/registrar', [AdminController::class, 'store'])->name('admin.sotre');
// });


// Mostrar formulario
Route::get('/admin/registrar', [AdminController::class, 'create'])->name('admin.create');

// Guardar usuario
Route::post('/admin/registrar', [AdminController::class, 'store'])->name('admin.store');


// Rutas para clientes
Route::middleware(['auth'])->group(function () {
    Route::get('/cliente', [UsuarioController::class, 'index'])->name('cliente');
});

// Rutas para bebés
Route::middleware(['auth', 'verificar.edad:bebe'])->group(function () {
    Route::get('/bebes', [UsuarioBebeController::class, 'index'])->name('bebes');
});

// Rutas para ninos
Route::middleware(['auth', 'verificar.edad:nino'])->group(function () {
    Route::get('/ninos', [UsuarioNinoController::class, 'index'])->name('ninos');
});

// Rutas para adolescentes
Route::middleware(['auth', 'verificar.edad:adolescente'])->group(function () {
    Route::get('/adolescentes', [UsuarioAdolescenteController::class, 'index'])->name('adolescentes');
});
// Rutas para jovenes
Route::middleware(['auth', 'verificar.edad:joven'])->group(function () {
    Route::get('/jovenes', [UsuarioJovenController::class, 'index'])->name('jovenes');
});
// Rutas para adultos
Route::middleware(['auth', 'verificar.edad:adulto'])->group(function () {
    Route::get('/adultos', [UsuarioAdultoController::class, 'index'])->name('adultos');
});
// Rutas para adultos mayores
Route::middleware(['auth', 'verificar.edad:mayor'])->group(function () {
    Route::get('/mayores', [UsuarioMayorController::class, 'index'])->name('mayores');
});
//Rutas para longevos
Route::middleware(['auth', 'verificar.edad:longevo'])->group(function () {
    Route::get('/longevos', [UsuarioLongevoController::class, 'index'])->name('longevos');
});
