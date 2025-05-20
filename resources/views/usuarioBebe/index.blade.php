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
    <h2 class="section-title">Bienestar Integral para Bebés (0 - 5 años)</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Alimentación saludable</div>
                <div class="card-body text-center">
                    <p class="card-text">Guías de lactancia, alimentación complementaria y horarios seguros para el bebé.</p>
                    <a href="#" class="btn btn-aqua mt-2">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Rutinas de sueño</div>
                <div class="card-body text-center">
                    <p class="card-text">Consejos para establecer horarios de siesta y descanso nocturno reparador.</p>
                    <a href="#" class="btn btn-aqua mt-2">Descubrir</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Estimulación temprana</div>
                <div class="card-body text-center">
                    <p class="card-text">Actividades sensoriales, juegos de movimiento y canciones para el desarrollo cognitivo.</p>
                    <a href="#" class="btn btn-aqua mt-2">Explorar</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Chequeos y vacunas</div>
                <div class="card-body text-center">
                    <p class="card-text">Calendario de vacunación, alertas de crecimiento y control pediátrico.</p>
                    <a href="#" class="btn btn-aqua mt-2">Consultar</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Seguridad en casa</div>
                <div class="card-body text-center">
                    <p class="card-text">Prevención de accidentes, espacios seguros y primeros auxilios básicos para bebés.</p>
                    <a href="#" class="btn btn-aqua mt-2">Revisar</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Apoyo emocional</div>
                <div class="card-body text-center">
                    <p class="card-text">Cómo generar vínculos afectivos, reconocer emociones y acompañar el llanto.</p>
                    <a href="#" class="btn btn-aqua mt-2">Aprender</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
