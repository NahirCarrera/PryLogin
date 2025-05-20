@extends('app')

@section('content')
<style>
    .register-container {
        max-width: 500px;
        margin: 50px auto;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 128, 128, 0.2);
    }

    .register-container h2 {
        text-align: center;
        color: #00796b;
        margin-bottom: 30px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        color: #00695c;
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 2px solid #b2dfdb;
        border-radius: 10px;
        background-color: #f0fdfc;
    }

    .form-control:focus {
        outline: none;
        border-color: #4dd0e1;
    }

    .btn-register {
        width: 100%;
        background-color: #4dd0e1;
        color: white;
        font-weight: bold;
        padding: 10px;
        border: none;
        border-radius: 10px;
        transition: background-color 0.3s;
    }

    .btn-register:hover {
        background-color: #26c6da;
    }

    .error-message {
        background-color: #ffebee;
        color: #c62828;
        border-left: 5px solid #e57373;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .success-message {
        background-color: #e8f5e9;
        color: #2e7d32;
        border-left: 5px solid #66bb6a;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 15px;
    }
</style>

<div class="register-container">
    <h2>Registrar nuevo usuario</h2>

    @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="error-message">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required placeholder="Nombre completo">
        </div>

        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required placeholder="ejemplo@correo.com">
        </div>

        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" class="form-control" value="{{ old('edad') }}" required min="0" max="120" placeholder="Edad">
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" class="form-control" required placeholder="••••••••">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar contraseña:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required placeholder="••••••••">
        </div>

        <button type="submit" class="btn-register">Registrar</button>
    </form>
</div>
@endsection
