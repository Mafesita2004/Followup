<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Etapa Seguimiento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/login.css">
</head>
<body>
    <div id="contenedor">
        <header>
            <img src="/resources/img/logo.png" alt="Etapa Seguimiento" id="logo">
        </header>
        <main>
            <div id="bienvenida">
                <h1>¡Bienvenidos a<br>Etapa de<br>Seguimiento!</h1>
                <p>Se enfoca en aprendices e instructores en etapa productiva.</p>
                <img src="/resources/img/persona.png" alt="" id="persona-img">
            </div>
            <div id="login">
                <h2>USUARIO</h2>
                <form id="loginform" method="POST" action="{{ route('login.post') }}">  <!-- Aquí se asegura el uso del nombre correcto de la ruta -->
                    @csrf
                    <div class="input-container">
                        <img src="/resources/img/user-icon.png" alt="Usuario" class="icon">
                        <input type="text" name="username" placeholder="username" required>
                    </div>
                    <div class="input-container">
                        <img src="/resources/img/lock-icon.png" alt="Contraseña" class="icon">
                        <input type="password" name="password" placeholder="password" required>
                    </div>
                    <a href="#" id="forgot-password">¿Olvidaste tu contraseña?</a>
                    <button type="submit">LOGIN</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
