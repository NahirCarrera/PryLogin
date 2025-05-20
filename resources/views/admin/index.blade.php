@extends('app')

@section('content')
<style>
    .admin-panel {
        max-width: 700px;
        margin: 50px auto;
        background: linear-gradient(145deg, #e0f7fa, #e8f5e9);
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 150, 136, 0.2);
        padding: 40px;
        text-align: center;
    }

    .admin-panel h1 {
        color: #00796b;
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .admin-panel p {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 30px;
    }

    .admin-icon {
        width: 90px;
        margin-bottom: 20px;
    }

    .admin-panel h3 {
        color: #2e7d32;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .admin-panel .btn-register {
        background-color: #4dd0e1;
        color: white;
        border: none;
        border-radius: 30px;
        padding: 12px 30px;
        font-size: 1.1rem;
        font-weight: bold;
        transition: background-color 0.3s;
        text-decoration: none;
        display: inline-block;
    }

    .admin-panel .btn-register:hover {
        background-color: #26c6da;
    }
</style>

<div class="admin-panel">
    <h1>Panel de Administración</h1>
    <p>Gestiona fácilmente los usuarios de la plataforma.</p>

    <img src="https://cdn-icons-png.flaticon.com/512/1250/1250615.png" alt="Admin Icon" class="admin-icon">

    <h3>Registro de nuevos usuarios</h3>
    <p>
        Crea cuentas para nuevos usuarios y clasifícalos por edad para brindarles contenido personalizado.
    </p>

    <a href="{{ route('admin.create') }}" class="btn-register">
        <i class="bi bi-person-plus-fill"></i> Registrar Usuario
    </a>
</div>
@endsection
