@extends('app')

@section('content')
<style>
    body {
        background: linear-gradient(to bottom, #e0f7fa, #f1f8e9);
    }

    .main-banner {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 128, 128, 0.2);
        height: 250px;
    }

    .card-custom {
        background-color: #ffffff;
        border: none;
        border-radius: 16px;
        box-shadow: 0 4px 10px rgba(0, 128, 128, 0.15);
        transition: transform 0.2s ease-in-out;
    }

    .card-custom:hover {
        transform: translateY(-5px);
    }

    .card-header-custom {
        background-color: #b2ebf2;
        color: #00695c;
        font-weight: bold;
        border-radius: 16px 16px 0 0;
    }

    .btn-aqua {
        background-color: #4dd0e1;
        color: white;
        border: none;
    }

    .btn-aqua:hover {
        background-color: #26c6da;
    }
</style>

<div class="container mt-5">

    <div class="main-banner mb-4">
        <img src="https://st5.depositphotos.com/10614052/64973/i/450/depositphotos_649731664-stock-photo-banner-happy-african-american-family.jpg"
             class="w-100" alt="Imagen de bienvenida">
    </div>

    <h2 class="text-center mb-5" style="color:#00796b;">Bienvenido a Guardián Familiar</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="card card-custom">
                <div class="card-header card-header-custom text-center">Cuidado diario</div>
                <div class="card-body text-center">
                    <p class="card-text">Monitorea la salud y rutinas de cada miembro de la familia, desde bebés hasta longevos.</p>
                    <a href="#" class="btn btn-aqua mt-2">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom">
                <div class="card-header card-header-custom text-center">Actividades</div>
                <div class="card-body text-center">
                    <p class="card-text">Ejercicios, juegos y retos diseñados según la edad para estimular cuerpo y mente.</p>
                    <a href="#" class="btn btn-aqua mt-2">Explorar</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom">
                <div class="card-header card-header-custom text-center">Conexión familiar</div>
                <div class="card-body text-center">
                    <p class="card-text">Envía mensajes, retos y recuerdos entre generaciones de forma segura y amigable.</p>
                    <a href="#" class="btn btn-aqua mt-2">Conectar</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
