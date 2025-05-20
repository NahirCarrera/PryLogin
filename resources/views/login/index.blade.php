@extends('app')

@section('content')
<style>
    body {
        background: linear-gradient(to bottom, #e0f7fa, #f1f8e9);
    }

    .login-container {
        max-width: 400px;
        margin: 50px auto;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 128, 128, 0.2);
    }

    .login-container h2 {
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

    .btn-login {
        width: 100%;
        background-color: #4dd0e1;
        color: white;
        font-weight: bold;
        padding: 10px;
        border: none;
        border-radius: 10px;
        transition: background-color 0.3s;
    }

    .btn-login:hover {
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
</style>

<div class="login-container">
    <h2>Iniciar sesión</h2>

    @if(session('error'))
        <div class="error-message">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.process') }}">
        @csrf

        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" class="form-control" required placeholder="ejemplo@correo.com">
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" class="form-control" required placeholder="••••••••">
        </div>

        <button type="submit" class="btn-login">Ingresar</button>
    </form>
</div>
@endsection
