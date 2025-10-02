<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #ffffff;
            /* Blanco */
            color: #1E5A94;
            /* Azul fuerte para textos */
        }

        .navbar {
            background-color: #1E5A94;
            /* Azul fuerte */
        }

        .navbar-brand,
        .nav-link {
            color: #ffffff !important;
        }

        .btn-custom {
            background-color: #4CAF50;
            /* Verde medio */
            color: #fff;
            border: none;
        }

        .btn-custom:hover {
            background-color: #6FBF73;
            /* Verde claro */
        }

        .card {
            border: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #4A90E2;
            /* Azul pastel */
            color: white;
            font-weight: bold;
        }

        footer {
            background-color: #1E5A94;
            color: #fff;
            padding: 15px 0;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Segurity Academy</a>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="flex-fill">
        <div class="container my-5">
            <h1 class="text-center">@yield('titleContent')</h1>
            <div class="row mt-4">
                @yield('Content')
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center mt-auto">
        <p>Autoras:<br> Lynda Julyana Pinto <br> Marcela Martinez Duque</p>
        <small>© {{ date('Y') }} Segurity Academy. Todos los derechos reservados.</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>