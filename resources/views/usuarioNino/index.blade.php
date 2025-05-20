@extends('app')

@section('content')
<style>
    body {
        background: linear-gradient(to bottom, #e0f7fa, #f1f8e9);
    }

    .bebes-container {
        max-width: 1200px;
        margin: 30px auto;
    }

    .section-title {
        color: #00796b;
        text-align: center;
        margin-bottom: 40px;
    }

    .card-custom {
        background-color: #ffffff;
        border: none;
        border-radius: 16px;
        box-shadow: 0 4px 15px rgba(0, 128, 128, 0.2);
        transition: transform 0.3s ease-in-out;
        height: 100%;
    }

    .card-custom:hover {
        transform: translateY(-5px);
    }

    .card-header-custom {
        background-color: #b2ebf2;
        color: #004d40;
        font-weight: bold;
        text-align: center;
        border-radius: 16px 16px 0 0;
    }

    .btn-aqua {
        background-color: #4dd0e1;
        color: white;
        font-weight: bold;
        border: none;
    }

    .btn-aqua:hover {
        background-color: #26c6da;
    }
</style>

<div class="bebes-container">
    <h2 class="section-title">Bienestar Integral para Niños (6 - 12 años)</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Nutrición Inteligente</div>
                <div class="card-body text-center">
                    <p class="card-text">Guías para una alimentación variada, recetas divertidas y tips para involucrarlos en la cocina.</p>
                    <a href="#" class="btn btn-aqua mt-2">Ver recetas</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Movimiento y Diversión</div>
                <div class="card-body text-center">
                    <p class="card-text">Juegos físicos, deportes grupales y rutinas que combinan diversión y salud.</p>
                    <a href="#" class="btn btn-aqua mt-2">Activarse</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Gestión de Emociones</div>
                <div class="card-body text-center">
                    <p class="card-text">Recursos para que los niños aprendan a reconocer, expresar y regular sus emociones.</p>
                    <a href="#" class="btn btn-aqua mt-2">Ver recursos</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Amistades y Valores</div>
                <div class="card-body text-center">
                    <p class="card-text">Historias y dinámicas para fortalecer la empatía, el respeto y la cooperación.</p>
                    <a href="#" class="btn btn-aqua mt-2">Explorar</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Aprender Jugando</div>
                <div class="card-body text-center">
                    <p class="card-text">Herramientas interactivas para reforzar lo aprendido en la escuela de forma entretenida.</p>
                    <a href="#" class="btn btn-aqua mt-2">Jugar</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Tecnología Responsable</div>
                <div class="card-body text-center">
                    <p class="card-text">Consejos para un uso equilibrado de dispositivos y navegación segura en internet.</p>
                    <a href="#" class="btn btn-aqua mt-2">Aprender más</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
