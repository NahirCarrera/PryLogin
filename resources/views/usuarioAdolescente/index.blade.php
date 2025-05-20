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
    <h2 class="section-title">Bienestar Integral para Adolescentes (13 - 17 años)</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Salud Mental y Autocuidado</div>
                <div class="card-body text-center">
                    <p class="card-text">Estrategias para manejar el estrés, ansiedad y mejorar la autoestima.</p>
                    <a href="#" class="btn btn-aqua mt-2">Explorar guía</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Alimentación Consciente</div>
                <div class="card-body text-center">
                    <p class="card-text">Consejos para una dieta saludable, respetando cambios físicos y necesidades energéticas.</p>
                    <a href="#" class="btn btn-aqua mt-2">Ver consejos</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Actividad Física Juvenil</div>
                <div class="card-body text-center">
                    <p class="card-text">Ejercicios y deportes para liberar energía, mantenerse activos y divertirse en grupo.</p>
                    <a href="#" class="btn btn-aqua mt-2">Comenzar</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Relaciones Saludables</div>
                <div class="card-body text-center">
                    <p class="card-text">Tips sobre comunicación asertiva, respeto y manejo de conflictos entre pares.</p>
                    <a href="#" class="btn btn-aqua mt-2">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Identidad y Propósito</div>
                <div class="card-body text-center">
                    <p class="card-text">Reflexiones y herramientas para el autoconocimiento, toma de decisiones y metas personales.</p>
                    <a href="#" class="btn btn-aqua mt-2">Inspirarse</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Tecnología y Redes Sociales</div>
                <div class="card-body text-center">
                    <p class="card-text">Uso responsable de redes, privacidad digital y prevención de riesgos online.</p>
                    <a href="#" class="btn btn-aqua mt-2">Aprender</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
