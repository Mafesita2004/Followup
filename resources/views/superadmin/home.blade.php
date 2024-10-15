<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Productiva</title>
    <style>
        #userMenu {
            top: 100%;
            margin-top: 0.5rem;
        }
        .user-status {
            text-align: center; /* Centrar el texto */
            color: #009e00; /* Color verde */
            margin-top: 5px; /* Espacio superior para alineación */
            font-size: 12px; /* Ajustar el tamaño de fuente */
        }
    </style>
</head>
<body class="font-['Arial',sans-serif] bg-white m-0 flex flex-col min-h-screen">
    <header class="bg-white text-[#009e00] px-5 py-2.5 flex flex-col items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0']">
        <div class="flex justify-between w-full">
            <div class="flex items-center">
                <!-- Logo de SENA en el lado izquierdo -->
                <img class="w-[70px] h-[70px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo ">

                <!-- Espaciado entre los dos bloques -->
                <div class="flex-grow m-2"></div>

                <!-- Logo de Etapa Productiva y texto "Centro de Comercio y Servicios" en el lado derecho -->
                <div class="text-left">
                    <!-- Logo de Etapa Seguimiento -->
                    <div class="flex items-center">
                        <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
                        <div class="flex flex-col text-left">
                            <h2 class="text-[12px] m-0 text-[#009e00]">Etapa</h2>
                            <h2 class="text-[12px] m-0 text-[#009e00]">Productiva</h2>
                        </div>
                    </div>

                    <!-- Texto "Centro de Comercio y Servicios" debajo del logo y el texto de Etapa Productiva -->
                    <h2 class="text-sm mt-2 text-[#009e00]">Centro de Comercio y Servicios</h2>
                </div>
            </div>
            <div class="relative ml-auto flex items-center pt-5">

                <img class="bg-white w-[45px] h-auto rounded-full -ml-8 border-2 border-black" src="{{ asset('img/administrador/mujer.png') }}" alt="User Icon">
                <button id="menuButton" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-5 h-5 ml-2 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>

                <div id="userMenu" class="hidden absolute right-4 mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">
                    <div class="p-4">
                        <div class="flex items-center mb-4">
                            <div>
                                <p class="text-sm text-black font-bold">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</p>
                           <p class="text-sm mt-2 text-black">Super administrador</p>
                            </div>

                            <img src="{{ asset('img/user-icon.png') }}" alt="User Icon" class="w-10 h-10 rounded-full mr-3 mx-10 bg-white border-black border-2">
                        </div>
                        <ul>
                            <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Perfil') }}" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">Ver perfil</a></li>
                            <li class="mt-2"><a href="{{ route('superadmin.home') }}" class="block text-black hover:bg-white p-2 rounded-lg">Inicio</a></li>
                            <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Configuracion') }}" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>
                            <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Permisos') }}" class="block text-black hover:bg-white p-2 rounded-lg">Permisos</a></li>
                            <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Administrator') }}" class="block text-black hover:bg-white p-2 rounded-lg">Administradores</a></li>
                            <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Instructor') }}" class="block text-black hover:bg-white p-2 rounded-lg">Instructores</a></li>
                            <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Aprendiz') }}" class="block text-black hover:bg-white p-2 rounded-lg">Aprendices</a></li>
                            <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Notificaciones')}}" class="block text-black hover:bg-white p-2 rounded-lg">Reportes</a></li>
                            <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Graficas') }}" class="block text-black hover:bg-white p-2 rounded-lg">Gráficas</a></li>
                        </ul>
                        <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                            @csrf
                            <button type="submit" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-2 w-full">Cerrar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Texto "Super administrador" centrado, justo debajo de la barra de usuario -->

    </header>

    <nav class="bg-[#009e00] px-2.5 py-1.5 flex justify-start items-center h-[40px] relative z-10">
        <button id="notifButton" class="relative">
            <img class="w-[35px] h-auto mr-2.5 filter invert" src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones">
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">5</span> <!-- Ejemplo de contador de notificaciones -->
        </button>
        <div id="notifMenu" class="hidden absolute top-full mt-2 left-0 w-64 bg-white border border-gray-300 rounded-lg shadow-lg z-20">
            <div class="p-4">
                <h2 class="text-sm font-bold">Notificaciones</h2>
                <ul>
                    <li class="mt-2">
                        <a href="#" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 1</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 2</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 3</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Inicio</div>

    </nav>
    <main class=" flex-nowrap p-10 flex justify-center items-center bg-white ">
        <div class="grid grid-cols-3 gap-20 bg-[#f0f0f0] border-2 border-[#2F3E4C] p-[72px] rounded-[20px] max-w-[100%] mx-auto shadow-[0_0_10px_rgba(0,0,0,0.8)]">

            <a href="{{ route('superadmin.SuperAdmin-Administrator') }}" class=" m-2.5 py-4 rounded-[15%] flex flex-col items-center text-center bg-white border-[3px] border-black w-56 h-56 hover:border-green-600">
                <img src="{{ asset('SuperAdmin/administrador.png') }}" alt="Administradores" class="w-[200px] h-[165px]  ">
                <span class="text-sm ">Administradores</span>
            </a>
            <a href="{{ route('superadmin.SuperAdmin-Instructor') }}" class="m-2.5 py-2 rounded-[15%] flex flex-col items-center p-4 text-center bg-white border-[3px] border-black  w-56 h-56 hover:border-green-600">
                <img src="{{ asset('SuperAdmin/instructor.jpg') }}" alt="Instructores" class="w-[300px] h-[350px] ">
                <span class="text-sm p-2">Instructores</span>
            </a>
            <a href="{{ route('superadmin.SuperAdmin-Aprendiz') }}" class="m-2.5 py-2 rounded-[15%] flex flex-col items-center text-center bg-white border-[3px] border-black  w-56 h-56 hover:border-green-600">
                <img src="{{ asset('SuperAdmin/aprendices.png') }}" alt="Aprendices" class="w-[200px] h-[175px] ">
                <span class="text-sm ">Aprendices</span>
            </a>
            <a href="{{ route('superadmin.SuperAdmin-Permisos') }}" class="m-2.5 rounded-[15%] flex flex-col items-center text-center py-2 bg-white border-[3px] border-black  w-56 h-56 hover:border-green-600">
                <img src="{{ asset('SuperAdmin/permisos.jpg') }}" alt="Permisos" class="w-[200px] h-[150px] mb-2.5">
                <span class="text-sm p-2">Permisos</span>
            </a>
            <a href="{{ route('superadmin.SuperAdmin-Notificaciones') }}" class="m-2.5 rounded-[15%] flex flex-col items-center text-center py-2 bg-white border-[3px] border-black  w-56 h-56 hover:border-green-600">
                <img src="{{ asset('SuperAdmin/reportes.png') }}" alt="Reportes" class="w-[180px] h-[160px] mb-2.5">
                <span class="text-sm ">Reportes</span>
            </a>
            <a href="{{ route('superadmin.SuperAdmin-Graficas') }}" class="m-2.5 rounded-[15%] flex flex-col items-center text-center py-3 bg-white border-[3px] border-black  w-56 h-56 hover:border-green-600">
                <img src="{{ asset('SuperAdmin/graficas.png') }}" alt="Gráfica" class="w-[200px] h-[280px] mb-2.5">
                <span class="text-sm p-2">Gráfica</span>
            </a>
        </div>
    </main>
    <script src="{{ asset('js/SuperAdmin.js') }}"></script>
</body>
</html>
