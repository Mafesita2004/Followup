<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <!-- Agrega tus estilos aquí -->
</head>
<body>
    <nav>
        <!-- Aquí iría tu barra de navegación -->
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <!-- Agregar scripts comunes -->
    @yield('scripts')
</body>
</html>
