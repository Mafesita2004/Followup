<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>SuperAdmin Home</title>
    <style>
        /* BARRA AZUL */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Ubuntu, "Helvetica Neue", Helvetica, Arial, "PingFang SC",
                "Hiragino Sans GB", "Microsoft Yahei UI", "Microsoft Yahei",
                "Source Han Sans CN", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2px 20px;
            background-color: #04324d;
            color: #ffffff;
            z-index: 1;
            position: relative;
            margin-top: 74px; /* Ajusta la posición del encabezado hacia abajo */
        }

        header h1 {
            color: #009E00;
            margin-top: -110px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .text-1, .text-2 {
            color: #009E00;
            position: absolute;
            left: 5%; /* Posición horizontal en relación al contenedor padre */
            font-family: 'DM Sans', sans-serif; /* Establece el tipo de letra */
            font-size: 12px; /* Tamaño de la letra */
        }

        .text-1 {
            top: -55px; /* Ajustar la posición desde la parte superior */
        }

        .text-2 {
            top: -35px; /* Ajustar la posición desde la parte superior */
        }
        
        .logo {
            position: absolute;
            top: -65px; 
            left: 20px; 
            width: 50px; 
            height: auto;
        }

        .logo-sena {
            position: absolute;
            top: -55px; 
            right: 20px; 
            width: 50px; 
            height: auto;
        }
        #notifButton {
            position: absolute; /* Cambiado a absoluto para colocarlo en la barra azul */
            top: 10px; /* alto */
            right: 1450px; /* lado */
            background: none;
            border: none;
            cursor: pointer;
            z-index: 1000;
            
        }

        .notifications {
            display: block;
            width: 54px; /* tamaño de la imagen */
            height: auto; /* Mantiene la proporción de la imagen */
            filter: invert(1); /* Invierte los colores de la imagen */
        }
        .Flecha {
            display: block;
            position: absolute;
            width: 24px; /* tamaño de la imagen */
            height: auto; /* Mantiene la proporción de la imagen */
            margin-left: -1470px; /* lados */
            margin-top: 40px; /* altura */
        }
        .text-ventana {
            color: #ffffff; /* Color del texto para que contraste con el fondo */
            font-size: 20px; /* Tamaño del texto para que sea visible */
            position: absolute;
            font-family: 'DM Sans', sans-serif;
            left: 50%; /* Ajusta la posición horizontal según sea necesario */
            transform: translateX(-50%); /* Centra el texto horizontalmente */
            top: 10px; /* Ajusta la posición vertical según sea necesario */
        }
        
        /* FIN BARRA AZUL */


        /* MENU */
        #header {
            margin: auto;
            font-family: 'DM Sans', sans-serif;
            background-color: #D9D9D9;
            border-radius: 8px;
            width: 250px;
            position: absolute;
            margin-left: 1200px; /* lados */
            margin-top: 0px; /* altura */
        }
        .profile-info {
            margin-bottom: 20px;
            text-align: center;
        }
        .icon {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
            margin-left: 14px; /* lados */
            margin-top: 1px; /* altura */
        }
        .username {
            font-weight: bold;
            margin-left: -120px; /* lados */
        }
        .role {
            display: block;
            margin-bottom: 10px;
            margin-left: -80px; /* lados */
        }
        .profile-link {
            display: block;
            background-color: #ffffff;
            color: #38A900;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 20px;
            outline: 1px solid #000000; /* Borde de 1px de color negro */
        }
        .profile-link:hover {
            background-color: #b7d3b3;
        }
        #menu-toggle {
            background: none;
            border: none;
            cursor: pointer;
            position: absolute;
            top: -30px; /* Ajusta la distancia hacia arriba */
            right: -600px; /* Ajusta la distancia hacia los lados */
            width: 30px;
            height: 15px;
            z-index: 1000; /* Asegúrate de que esté por encima de otros elementos */
        }
        .icon-flecha {
            width: 100%;
            height: 100%;
            margin-left: -550px; /* lados */
            margin-top: 0px; /* altura */
        }
        .nav {
            list-style: none;
            padding: 20px;
            display: none; /* Ocultamos el menú inicialmente */
            
        }
        .nav > li {
            margin-bottom: 10px;
            position: relative;
        }
        .nav li a {
            color: #1E1E1E;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            border-radius: 5px;
        }
        .nav li a:hover {
            background-color: #868686;
            color: white;
        }
        .nav li ul {
            list-style: none;
            display: none;
            position: absolute;
            left: -130%;
            top: 0;
            min-width: 200px;
            background-color: #e0e0e0;
            border-radius: 8px;
            padding: 10px;
            margin-left: -10px;
            z-index: 100; /* Para que quede encima de otros objetos */
        }
        
        .nav li:hover > ul {
            display: block;
        }
        .nav li ul li {
            margin-bottom: 5px;
            position: relative;
        }
        .nav li ul li ul {
            right: -200px;
            top: 0;
            left: 100%;
        }
        .logout-link {
            display: block;
            background-color: #d9e9d6;
            color: green;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
        }
        .logout-link:hover {
            background-color: #b7d3b3;
        }

        /* FIN MENU */
        .settings-card {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            width: 500px;
            margin: 30px auto; /* Centrar horizontalmente y añadir margen superior */
        }

        .settings-card h2 {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 16px;
        }

        .settings-card form {
            display: flex;
            flex-direction: column;
        }

        .settings-card form > div {
            margin-bottom: 16px;
        }

        .settings-card label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: #4a5568;
            margin-bottom: 8px;
        }

        .settings-card input[type="text"],
        .settings-card select {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #cbd5e0;
            border-radius: 4px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
            outline: none;
        }

        .settings-card input[type="text"]:focus,
        .settings-card select:focus {
            border-color: #48bb78;
            box-shadow: 0 0 0 1px #48bb78;
        }

        .settings-card a[type="submit"] {
            display: inline-block;
            background-color: #48bb78;
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
        }

        .settings-card a[type="submit"]:hover {
            background-color: #38a169;
        }

        
        


    </style>
    <script>
        function navigateTo(page) {
            window.location.href = page;
        }
    </script>
</head>
<body>
    {{-- Inicio barra azul --}}
    <header>
        
        <h1>ADMINISTRADOR</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf           

            <img class="logo" src="{{ asset('img/logo.png') }}" alt="Logo">
            <img class="logo-sena" src="{{ asset('administrator/logo-sena.png') }}" alt="Logo-sena">
            
            <h2 class="text-1">Etapa</h2>
            <h2 class="text-2">Seguimiento</h2>
            <h2 class="text-ventana">Configuracion</h2> 
        </form>
         <button id="notifButton">
            <img class="notifications" src="{{ asset('administrator/notificaciones.png') }}" alt="notificaciones">
        </button> 
        <a href="{{ route('administrator.home') }}" alt="flecha">
            <img class="Flecha" src="{{ asset('img/flecha.png') }}" alt="Flecha">
        </a>
        <div class=" relative flex ml-8 items-center">
            <div class="bg-white h-8 w-64 rounded-xl" >{{ auth()->user()->name }}{{ auth()->user()->last_name }}
            </div>
            <img class="bg-white w-[45px] h-auto rounded-full -ml-8 border-[3px] border-[#00324d]" src="{{ asset('img/user-icon.png') }}" alt="User Icon">
            <button id="togg" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
       </div>
        
        </div>
        
    </header>
        {{-- Termina barra azul --}}


        {{-- MENU --}}
    <div id="header">
       
        
        <ul class="nav" id="nav-menu">
            <div class="profile-info">
                <img class="icon" src="{{ asset('administrator/user-icon.png') }}" alt="Icono">
                <span class="username">Nombre usuario</span><br>
                <span class="role">Administrador</span><br>
                <a href="{{ route('administrator.reports')}}" class="profile-link">Ver Perfil</a>
            </div>
            <li><a href="{{ route('administrator.home')}}">Inicio</a></li>
            <li><a href="{{ route('administrator.settings')}}">Configuración</a></li>
            <li><a href="{{ route('administrator.apprentice')}}">Configuración</a>
                <ul>
                    <li>APRENDICES<a href="{{ route('administrator.apprentice')}}">Lista de Aprendices que inician etapa productiva</a></li>
                    <li><a href="{{ route('administrator.apprentice')}}">Agregar Aprendices</a></li>
                </ul>
            </li>
            <li><a href="{{ route('administrator.instructor')}}">Instructores</a></li>
            <li><a href="{{ route('administrator.template')}}">Plantillas</a>
                <ul>
                    <li>MODALIDAD<a href="{{ route('administrator.template')}}">Pasantía</a></li>
                    <li><a href="{{ route('administrator.template')}}">Vinculo Laboral</a></li>
                    <li><a href="{{ route('administrator.template')}}">Contrato de Aprendizaje</a>
                        <ul>
                            <li><a href="{{ route('administrator.template')}}">Ver Plantilla</a></li>
                            <li><a href="{{ route('administrator.template')}}">+ Añadir Plantilla</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('administrator.template')}}">Unidad Productiva Familiar</a></li>
                    <li><a href="{{ route('administrator.template')}}">Proyecto Productivo Empresarial</a></li>
                </ul>
            </li>
            <li><a href="{{ route('administrator.graphic')}}">Gráficos</a></li>
            <a href="{{ route('administrator.home')}}" class="logout-link">Cerrar Sesión</a>
        </ul>
        
    </div>

    <script>
        document.getElementById('togg').addEventListener('click', function() {
            var menu = document.getElementById('nav-menu');
            if (menu.style.display === 'none' || menu.style.display === '') {
                menu.style.display = 'block';
            } else {
                menu.style.display = 'none';
            }
        });
    </script>
    
    {{-- FIN MENU --}}
    <div class="settings-card">
        <h2 class="text-lg font-bold mb-4">Cambio de Contraseña</h2>
        <form action="#" method="#">
            @csrf
            <div class="mb-4">
                <label for="currentPassword" class="block text-sm font-medium text-gray-700">Contraseña Actual</label>
                <input type="password" id="currentPassword" name="currentPassword" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-green-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="newPassword" class="block text-sm font-medium text-gray-700">Nueva Contraseña</label>
                <input type="password" id="newPassword" name="newPassword" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-green-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="confirmPassword" class="block text-sm font-medium text-gray-700">Confirmar Nueva Contraseña</label>
                <input type="password" id="confirmPassword" name="confirmPassword" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-green-500 sm:text-sm" required>
            </div>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Actualizar Contraseña</button>
        </form>
    </div>

    <!-- Sección de Configuración General -->
    <div class="settings-card">
        <h2>Configuración General</h2>
        <form action="#" method="#">
            @csrf
            <div>
                <label for="siteName">Nombre del Sitio</label>
                <input type="text" id="siteName" name="siteName" value="" required>
            </div>
            <div>
                <label for="timezone">Zona Horaria</label>
                <select id="timezone" name="timezone" required>
                    <!-- Opciones de zona horaria -->
                    <option value="America/Bogota">Bogotá</option>
                    <!-- Añadir más opciones según sea necesario -->
                </select>
            </div>
            <a href="{{ route('administrator.home') }}" type="submit">Guardar Cambios</a>
        </form>
    </div>
    </main>
    </div>
    
    <script src="{{ asset('js/Administrator.js') }}"></script>
    

</body>
</html>