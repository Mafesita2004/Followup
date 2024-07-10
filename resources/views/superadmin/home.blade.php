<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="logo-icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/superadmin/superadmin-home.css')}}">
    <title>Etapa Seguimiento</title>
</head>
<body>
    <header>
        <div class="EtapaSeguimiento">
            <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="logo">
            <div class="etapa-text">
                <h2>Etapa</h2>
                <h2>Seguimiento</h2>
            </div>
        </div>
        <div class="SUPER-ADMINISTRADOR">
            <h1>SUPER</h1>
            <h1>ADMINISTRADOR</h1>
        </div>
        <img class="logoSena" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
    </header>
    <nav class="user-nav">
        <img class="notificacion" src="{{asset('img/notificaciones.png')}}" alt="">
        <div class="user">Nombre de usuario</div>
        <img class="user-icon" src="{{ asset('img/user-icon.png') }}" alt="User Icon">
    </nav>
    <main>
        <div class="menu-grid">
            <div class="menu-item">
                <img src="{{ asset('img/administrador.png') }}" alt="Administradores">
                <span>Administradores</span>
            </div>
            <div class="menu-item">
                <img src="{{ asset('img/instructor.png') }}" alt="Instructores">
                <span>Instructores</span>
            </div>
            <div class="menu-item">
                <img src="{{ asset('img/aprendices.png') }}" alt="Aprendices">
                <span>Aprendices</span>
            </div>
            <div class="menu-item">
                <img src="{{ asset('img/permisos.png') }}" alt="Permisos">
                <span>Permisos</span>
            </div>
            <div class="menu-item">
                <img src="{{ asset('img/reportes.png') }}" alt="Reportes">
                <span>Reportes</span>
            </div>
            <div class="menu-item">
                <img src="{{ asset('img/grafica.png') }}" alt="Gráfica">
                <span>Gráfica</span>
            </div>
        </div>
    </main>
</body>
</html>
