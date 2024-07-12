<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/superadmin/SuperAdmin-Administrator.css')}}">
    <title>Etapa Seguimiento</title>
</head>
<body>
    <header>
        <div class="EtapaSeguimiento">
            <img src="{{ asset('img/logo.png')}}" alt="Etapa Seguimiento Logo" class="logo">
            <div class="etapa-text">
                <h2>Etapa</h2>
                <h2>Seguimiento</h2>
            </div>
        </div>
        <div class="SUPER-ADMINISTRADOR">
            <h1>SUPER</h1>
            <h1>ADMINISTRADOR</h1>
        </div>
        <img class="logosena" src="{{asset('img/logo-sena.png')}}" alt="Sena logo">
    </header>
    <nav class="user-nav">
        <img class="notificacion" src="{{asset('img/notificaciones.png')}}" alt="">
        <div class="Administrador">Administrador</div>
        <div class="user">Nombre de usuario</div>
        <img class="user-icon" src="{{ asset('img/user-icon.png') }}" alt="User Icon">
    </nav>
    <main>
        <div class="nav-inferior">
            <a href="{{ route('superadmin.home') }}" class="flecha">
                <img src="{{ asset('img/flecha.png') }}" alt="Flecha">
            </a>

            <form action="#" method="GET" class="barra-busqueda">
                <input type="text" name="q" placeholder="Buscar...">
                <button type="submit" aria-label="Buscar">
                    <img src="{{ asset('img/lupa.png') }}" alt="Buscar">
                </button>
            </form>

            <form action="#" method="GET" class="icono-agregar">
                <button type="button">
                    <img src="{{ asset('img/mas.png') }}" alt="Agregar">
                </button>
            </form>

        </div>

    </main>

    <footer>

    </footer>

</body>
</html>
