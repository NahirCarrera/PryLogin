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
    <h2 class="section-title">Bienestar Integral para Longevos (75+ años)</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Cuidado Personal y Asistencia</div>
                <div class="card-body text-center">
                    <p class="card-text">Apoyo en actividades diarias y cuidados especializados para mayor comodidad.</p>
                    <a href="#" class="btn btn-aqua mt-2">Más información</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Ejercicios Suaves y Terapias</div>
                <div class="card-body text-center">
                    <p class="card-text">Movilidad asistida, estiramientos y terapias para mantener bienestar físico.</p>
                    <a href="#" class="btn btn-aqua mt-2">Ver ejercicios</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Nutrición Especializada</div>
                <div class="card-body text-center">
                    <p class="card-text">Dieta adaptada a condiciones de salud y necesidades específicas.</p>
                    <a href="#" class="btn btn-aqua mt-2">Consultar guía</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100">
                <div class="card-header card-header-custom">Compañía y Apoyo Emocional</div>
                <div class="card-body text-center">
                    <p class="card-text">Programas y recursos para combatir la soledad y fomentar la felicidad.</p>
                    <a href="#" class="btn btn-aqua mt-2">Explorar</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
