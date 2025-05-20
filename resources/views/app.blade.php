<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Aplicación</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    {{-- Estilos opcionales --}}
    <style>
        body {
            background-color: #f8f9fa;
        }
        footer {
            margin-top: 40px;
            padding: 20px 0;
            background-color: #343a40;
            color: white;
            text-align: center;
        }
        /* Ajuste para el botón logout en navbar */
        form.logout-form {
            display: inline;
        }
        form.logout-form button {
            border: none;
            background: transparent;
            color: #fff;
            cursor: pointer;
            padding: 0;
            font-size: 1rem;
        }
        form.logout-form button:hover {
            color: #adb5bd;
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Aplicación</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                    </li>

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin') }}">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cliente') }}">Cliente</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="logout-form">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link p-0 m-0 align-baseline">
                                    Cerrar sesión
                                </button>
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    {{-- Contenido principal --}}
    <main class="container py-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer>
        <p>&copy; 2025 Mi Aplicación. Todos los derechos reservados.</p>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
