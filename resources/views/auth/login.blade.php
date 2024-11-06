<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="logo-icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>Etapa Productiva</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body class="font-['Arial',sans-serif] bg-white m-0 flex flex-col min-h-screen">
    <header class="bg-white text-[#009e00] px-5 py-3 flex flex-col items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0]">
          <div class="flex flex-wrap justify-between w-full items-center">
              <div class="flex items-center">
                  <!-- Logo de SENA en el lado izquierdo -->
                  <img class="w-[70px] h-[70px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">

                  <div class="flex-grow m-2"></div>

                  <!-- Logo de Etapa Productiva y texto "Centro de Comercio y Servicios" en el lado derecho -->
                  <div class="text-left">
                      <a href="{{ route('superadmin.home') }}" class="flex items-center">
                          <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
                          <div class="flex flex-col text-left">
                              <h2 class="text-[12px] m-0 text-[#009e00]">Etapa</h2>
                              <h2 class="text-[12px] m-0 text-[#009e00]">Productiva</h2>
                          </div>
                      </a>
                      <h2 class="text-sm mt-2 text-[#009e00]">Centro de Comercio y Servicios</h2>
                  </div>
              </div>
          </div>
      </header>
      <div class="h-10 bg-[#00324d]">
      </div>
    <main>
        <div class="content">
            <div class="welcome-text">
                <h2>¡Bienvenidos a<br>Etapa de<br>Productiva!</h2>
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
            <a href="{{ route('register') }}" class="register-link">¿Olvidaste tu contraseña?</a>
        </div>
    </main>
</body>
</html>

