@extends('app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Bienvenido a la aplicación</h1>

    <div class="card mb-3">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/005/720/479/small_2x/banner-abstract-background-board-for-text-and-message-design-modern-free-vector.jpg" class="card-img-top" alt="Imagen de portada">
        <div class="card-body">
            <h4 class="card-title">Título </h4>
            <p class="card-text">Texto de ejemplo.</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Encabezado</div>
        <div class="card-body">
            <h4 class="card-title">Título </h4>
            <p class="card-text">Texto</p>
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            <a href="{{ route('admin') }}" class="btn btn-secondary">Admin</a>
            <a href="{{ route('cliente') }}" class="btn btn-secondary">Cliente</a>
        </div>
        <div class="card-footer text-muted">Pie de tarjeta</div>
    </div>
</div>
@endsection
