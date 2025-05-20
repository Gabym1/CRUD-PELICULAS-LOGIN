<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #fcefee, #e9d8fd);
            font-family: 'Segoe UI', sans-serif;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(90deg, #b388eb, #f7c1d9);
            border-bottom: 3px solid #e0aaff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar .navbar-brand,
        .navbar .nav-link {
            color: white !important;
            font-weight: bold;
        }

        .navbar .nav-link:hover {
            color: #ffe0f0 !important;
        }

        /* Mensajes */
        .alert-success {
            background-color: #f3e8ff;
            border-color: #d8b4fe;
            color: #6b21a8;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(216, 180, 254, 0.4);
        }

        /* Botones */
        .btn-outline-info {
            border: 2px solid #c084fc;
            color: #7e22ce;
            background-color: #f5e1ff;
            transition: all 0.3s ease-in-out;
            border-radius: 20px;
        }

        .btn-outline-info:hover {
            background-color: #d8b4fe;
            color: white;
        }

        h1, h2, h3 {
            font-weight: bold;
            color: #7e22ce;
            text-align: center;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            border: 2px solid #e9d5ff;
            border-radius: 15px;
            padding: 0.5rem 1rem;
            width: 100%;
            background-color: #fff0f6;
            color: #5b21b6;
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #c084fc;
            box-shadow: 0 0 8px rgba(192, 132, 252, 0.6);
        }

        label {
            font-weight: 500;
            color: #7e22ce;
        }
    </style>

    @yield('styles')
</head>
<body>

    <!-- barra -->
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">🎀 Películas App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item">
                            <span class="nav-link">Hola, {{ Auth::user()->name }} ✨</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido pagina -->
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>