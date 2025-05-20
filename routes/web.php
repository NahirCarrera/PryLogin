<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [LoginController::class, "index"])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');


// Rutas para mayores de edad
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});

// Rutas para menores de edad
Route::middleware(['auth'])->group(function () {
    Route::get('/cliente', [UsuarioController::class, 'index'])->name('cliente');
});

// Rutas para mayores de edad
Route::middleware(['auth', 'verificar.edad:mayor'])->group(function () {
    Route::get('/mayores', [UsuarioController::class, 'mostrarPaginaMayores'])->name('mayores');
});

// Rutas para menores de edad
Route::middleware(['auth', 'verificar.edad:menor'])->group(function () {
    Route::get('/menores', [UsuarioController::class, 'mostrarPaginaMenores'])->name('menores');
});