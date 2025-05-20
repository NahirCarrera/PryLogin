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
    <h2 class="section-title">Bienestar Integral para Jóvenes (18 - 25 años)</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Salud Física y Fitness</div>
                <div class="card-body text-center">
                    <p class="card-text">Rutinas de ejercicio, nutrición para energía y consejos para un estilo de vida activo.</p>
                    <a href="#" class="btn btn-aqua mt-2">Comenzar ahora</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Salud Mental y Manejo del Estrés</div>
                <div class="card-body text-center">
                    <p class="card-text">Técnicas para la gestión emocional, mindfulness y apoyo psicológico.</p>
                    <a href="#" class="btn btn-aqua mt-2">Aprender más</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Carrera y Desarrollo Profesional</div>
                <div class="card-body text-center">
                    <p class="card-text">Herramientas para planificar tu carrera, habilidades laborales y networking.</p>
                    <a href="#" class="btn btn-aqua mt-2">Explorar</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Relaciones Personales</div>
                <div class="card-body text-center">
                    <p class="card-text">Consejos para relaciones saludables, comunicación efectiva y resolución de conflictos.</p>
                    <a href="#" class="btn btn-aqua mt-2">Ver consejos</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Autonomía Financiera</div>
                <div class="card-body text-center">
                    <p class="card-text">Bases para administrar tus finanzas personales y planificar tu futuro económico.</p>
                    <a href="#" class="btn btn-aqua mt-2">Empezar</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Tecnología y Bienestar Digital</div>
                <div class="card-body text-center">
                    <p class="card-text">Equilibrar el uso de tecnología con hábitos saludables y desconexión digital.</p>
                    <a href="#" class="btn btn-aqua mt-2">Conocer más</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
