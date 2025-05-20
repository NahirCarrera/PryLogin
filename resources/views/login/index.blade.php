@extends('app')

@section('content')
    <h1>Página de login</h1>

    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('login.process') }}">
        @csrf

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>

        <button type="submit">Iniciar sesión</button>
    </form>
@endsection
