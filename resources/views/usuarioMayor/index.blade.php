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
    <h2 class="section-title">Bienestar Integral para Mayores (60 - 74 años)</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Cuidado de la Salud</div>
                <div class="card-body text-center">
                    <p class="card-text">Control de enfermedades crónicas, chequeos regulares y medicación adecuada.</p>
                    <a href="#" class="btn btn-aqua mt-2">Aprender más</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Actividad Física Adaptada</div>
                <div class="card-body text-center">
                    <p class="card-text">Ejercicios suaves para mantener movilidad, equilibrio y fuerza.</p>
                    <a href="#" class="btn btn-aqua mt-2">Ver ejercicios</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Alimentación y Nutrición</div>
                <div class="card-body text-center">
                    <p class="card-text">Consejos para una dieta equilibrada y adaptada a necesidades específicas.</p>
                    <a href="#" class="btn btn-aqua mt-2">Ver guía</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Salud Mental y Socialización</div>
                <div class="card-body text-center">
                    <p class="card-text">Actividades para mantener mente activa y fomentar la interacción social.</p>
                    <a href="#" class="btn btn-aqua mt-2">Explorar actividades</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Seguridad y Prevención de Accidentes</div>
                <div class="card-body text-center">
                    <p class="card-text">Tips para adaptar el hogar y prevenir caídas u otros accidentes.</p>
                    <a href="#" class="btn btn-aqua mt-2">Conocer más</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
