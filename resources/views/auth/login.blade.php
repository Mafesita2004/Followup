<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="logo-icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Seguimiento</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="logo">
            <h1>Etapa Seguimiento</h1>
        </div>
        <img src="{{ asset('img/logo-sena.png') }}" alt="SENA Logo" class="logo-sena">
    </header>

    <main>
        <div class="content">
            <div class="welcome-text">
                <h2>¡Bienvenidos a<br>Etapa de<br>Seguimiento!</h2>
                <p>Se enfoca en aprendices e instructores en etapa productiva.</p>
            </div>
            <img src="{{ asset('img/persona.png') }}" alt="Persona" class="persona-img">
        </div>

        <div class="login-container">
            <h3>USUARIO</h3>
            <form id="loginform" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group">
                    <img src="{{ asset('img/user-icon.png') }}" alt="Usuario" class="input-icon">
                    <input type="email" name="email" placeholder="Correo electrónico" required>
                </div>
                <div class="input-group">
                    <img src="{{ asset('img/lock-icon.png') }}" alt="Contraseña" class="input-icon">
                    <input type="password" name="password" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
            <a href="{{ route('register') }}" class="register-link">¿No tienes cuenta? Regístrate aquí.</a>
        </div>
    </main>
</body>
</html>
