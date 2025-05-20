<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');;
    }

     public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'edad' => 'required|integer|min:0|max:120',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Crear usuario
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'edad' => $request->edad,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.create')->with('success', 'Usuario registrado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
