<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Etapa Seguimiento - Inicio de Sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('resources/css/login.css') }}">
</head>
<body>
    <div id="contenedor">
        <header>
            <img src="{{ asset('resources/img/logo.png') }}" alt="Etapa Seguimiento" id="logo">
        </header>
        <main>
            <div id="bienvenida">
                <h1>¡Bienvenidos a<br>Etapa de<br>Seguimiento!</h1>
                <p>Se enfoca en aprendices e instructores en etapa productiva.</p>
                <img src="{{ asset('resources/img/persona.png') }}" alt="" id="persona-img">
            </div>
            <div id="login">
                <h2>USUARIO</h2>
                <form id="loginform" method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <div class="input-container">
                        <img src="{{ asset('resources/img/user-icon.png') }}" alt="Usuario" class="icon">
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    </div>
                    <div class="input-container">
                        <img src="{{ asset('resources/img/lock-icon.png') }}" alt="Contraseña" class="icon">
                        <input type="password" name="password" placeholder="Contraseña" required>
                    </div>
                    <a href="#" id="forgot-password">¿Olvidaste tu contraseña?</a>
                    <button type="submit">LOGIN</button>
                </form>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </main>
    </div>
</body>
</html>
