<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="logo-icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>Etapa Productiva</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #009e00;
            color: white;
            padding: 8px 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            width: 40px;
            height: auto;
            margin-right: 10px;
        }

        .logo-sena {
            width: 80px;
            height: auto;
        }

        h1 {
            font: 'DM Sans';
            font-size: 1.2em;
            margin: 0;
        }

        main {
            margin-top: 10px;
            position: relative;
            width: 100%;
            height: 100vh;
            background-image: url('{{ asset('img/login/image.png') }}');
            background-size: 40%;
            background-position: left top;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content {
            position: absolute;
            z-index: 2;
            text-align: center;
            color: white;
            max-width: 600px;
            width: 100%;
        }

        .welcome-text {
            position: absolute;
            top: -300px;
            left: 80%;
            text-align: center;
            z-index: 12;
            font-size: 2.5rem;
            white-space: nowrap;
            margin: 0;
            padding: 0;
        }

        .etapa-productiva {
            font-size: 4rem;
            font-weight: bold;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            text-align: left;
        }

        .etapa-productiva .etapa {
            color: #009e00;
            padding-left: 210px;
        }

        .etapa-productiva .productiva {
            color: #003366;
        }
            .registro-container {
            position: absolute;
            top: 50%;
            left: 70%;
            transform: translate(-50%, -50%);
            z-index: 2;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(240, 240, 240, 0.9));
            padding: 30px 25px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 350px;
            width: 100%;
        }

        h3 {
            font-family: 'DM Sans', sans-serif;
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8em;
            color: #003366;
        }

        .input-group {
            display: flex;
            align-items: center;
            background-color: white;
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 8px 10px;
            border: 1px solid #ddd;
        }

        .input-icon {
            width: 22px;
            height: 22px;
            margin-right: 10px;
            opacity: 0.6;
        }

        input {
            border: none;
            padding: 10px;
            width: 100%;
            font-size: 1em;
            color: #333;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #009e00;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #007a00;
        }
    </style>
</head>
<body class="font-['Arial',sans-serif] bg-white m-0 flex flex-col min-h-screen">
    <header class="bg-white text-[#009e00] px-5 py-3 flex flex-col items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0]">
        <div class="flex flex-wrap justify-between w-full items-center">
            <div class="flex items-center">
                <img class="w-[70px] h-[70px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
                <div class="flex-grow m-2"></div>
                <div class="text-left">
                    <a href="{{ route('administrator.web') }}" class="flex items-center">
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
    <div class="h-14 bg-[#009e00]">
    </div>
    <main>


        </div>

        <div class="registro-container">
            <h3>REGISTRO</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="input-group">
                    <img src="{{ asset('img/user-icon.png') }}" alt="Usuario" class="input-icon">
                    <input id="name" type="text" name="name" placeholder="Nombre" value="{{ old('name') }}" required autofocus autocomplete="name">
                </div>
                <div class="input-group">
                    <img src="{{ asset('img/user-icon.png') }}" alt="Usuario" class="input-icon">
                    <input id="last_name" type="text" name="last_name" placeholder="Apellido" value="{{ old('last_name') }}" required autofocus autocomplete="last_name">
                </div>

                <div class="input-group">
                    <img src="{{ asset('img/mail.png') }}" alt="Correo electrónico" class="input-icon">
                    <input id="email" type="email" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" required autocomplete="email">
                </div>

                <div class="input-group">
                    <img src="{{ asset('img/mail.png') }}" alt="departamento" class="input-icon">
                    <select id="department" name="department" required>
                        <option value="" disabled selected>Seleccione un departamento</option>
                        <option value="1">Amazonas</option>
                        <option value="2">Antioquia</option>
                        <option value="3">Arauca</option>
                        <option value="4">Atlántico</option>
                        <option value="5">Bolívar</option>
                        <!-- Resto de departamentos -->
                    </select>
                </div>
                <div class="input-group">
                    <select id="municipality" name="municipality" required>
                        <option value="" disabled selected>Seleccione un municipio</option>
                    </select>
                </div>

                <div class="input-group">
                    <img src="{{ asset('img/lock-icon.png') }}" alt="Contraseña" class="input-icon">
                    <input id="password" type="password" name="password" placeholder="Contraseña" required autocomplete="new-password">
                </div>

                <div class="input-group">
                    <img src="{{ asset('img/lock-icon.png') }}" alt="Confirmar contraseña" class="input-icon">
                    <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirmar contraseña" required autocomplete="new-password">
                </div>

                <div class="input-group">
                    <img src="{{ asset('img/roles.png') }}" alt="Rol" class="input-icon">
                    <select id="role" name="role" required>
                        <option value="superadmin">Superadmin</option>
                        <option value="administrator">Administrator</option>
                        <option value="trainer">Trainer</option>
                        <option value="apprentice">Apprentice</option>
                    </select>
                </div>

                <button type="submit">Registrar</button>
            </form>
        </div>
    </main>
   
</body>
</html>
