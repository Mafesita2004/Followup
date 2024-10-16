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

    <nav class="bg-[#009e00] px-2.5 py-1.5 flex justify-start items-center h-14 relative z-10">
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

    <div class="w-full flex justify-between items-center mt-6">
        <a href="{{route('superadmin.SuperAdmin-InstructorPerfil') }}" class="ml-4">
            <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
        </a>
    </div>
    <div class="flex justify-center">
        <main class=" bg-white m-4 p-2 rounded-lg  shadow-[0_0_10px_rgba(0,0,0,0.8)]  border-[#2F3E4C] w-2/3 items-center ">
            <div class=" bg-gray-100 p-6 rounded-lg">
                <div class="text-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-40 h-40 mx-auto text-gray-500 m-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <h1 class="text-lg m-0 text-black font-bold">INSTRUCTOR</h1>
                    </div>
            <div class="max-w-screen-lg mx-auto p-4 rounded-lg ">
                <div class="flex items-center mb-6">
                    <a href="{{ route('superadmin.SuperAdmin-ListaAprendiz')}}" class="bg-[#009e00] hover:bg-green-700 text-white px-4 py-2 rounded-lg mr-4">Aprendices</a>
                    <a class="bg-white text-black  border-gray-300 px-4 py-2 rounded-lg mr-4">24/100</a>
                    <a href="{{ route('superadmin.SuperAdmin-Redactar')}}" class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded-lg">Reporte</a>
                </div>

                <div class="grid grid-cols-3 gap-4 mb-6">
                    <div>
                        <label class="block text-gray-700">Nombre</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Nombre">
                    </div>
                    <div>
                        <label class="block text-gray-700">Apellido</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Apellido">
                    </div>
                    <div>
                        <label class="block text-gray-700">Cedula</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Cedula">
                    </div>
                    <div>
                        <label class="block text-gray-700">Correo</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Correo">
                    </div>
                    <div>
                        <label class="block text-gray-700">Celular</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Celular">
                    </div>
                    <div>
                        <label class="block text-gray-700">Programa</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Programa">
                    </div>
                    <div>
                        <label class="block text-gray-700">Total de horas</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Total de horas">
                    </div>
                    <div>
                        <label class="block text-gray-700">Horas realizadas</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Horas realizadas">
                    </div>
                    <div>
                        <label class="block text-gray-700">Fecha de inicio</label>
                        <input type="date" class="w-full border border-gray-300 rounded-lg p-2.5">
                    </div>
                    <div>
                        <label class="block text-gray-700">Fecha de fin</label>
                        <input type="date" class="w-full border border-gray-300 rounded-lg p-2.5">
                    </div>
                </div>
            </div>
            <div class="flex mb-6">
                <div class="w-1/2 p-4 bg-white rounded-lg shadow">
                    <h3 class="text-lg font-bold mb-4">Aprendices asignados</h3>
                    <div class="flex justify-between mb-4">
                        <span>Aprendices en 1 visita</span>
                        <span class="text-right">[23]</span>
                    </div>
                    <div class="flex justify-between mb-4">
                        <span>Aprendices en 2 visita</span>
                        <span class="text-right">[43]</span>
                    </div>
                    <div class="flex justify-between mb-4">
                        <span>Aprendices en 3 visita</span>
                        <span class="text-right">[52]</span>
                    </div>
                    <div class="flex justify-between mb-4">
                        <span>Aprendices aprobados</span>
                        <span class="text-right">[12]</span>
                    </div>
                    <div class="flex justify-between mb-4">
                        <span>Aprendices en mora</span>
                        <span class="text-right">[33]</span>
                    </div>
                    <canvas id="doughnutChart" class="w-full"></canvas>
                </div>
                <a href='{{ route('superadmin.SuperAdmin-Cronograma')}}' class="w-1/2 p-4 bg-white rounded-lg shadow ml-4">
                    <h3 class="text-lg font-bold mb-4">Cronograma</h3>

                    <img src="{{ asset('img/calendario.png') }}" alt="Cronograma" class="w-full">
                </a>
            </div>

            <div class="p-4 bg-white rounded-lg shadow mb-6">
                <canvas id="barChart" class="w-full"></canvas>
            </div>

            <div class="flex justify-end mt-6 space-x-4">
                <a type="submit" href="{{ route('superadmin.SuperAdmin-InstructorPerfil')}}" class="bg-[#009e00] hover:bg-green-700 text-white py-2 px-4 rounded">Confirmar</a>
                <a href="{{ route('superadmin.SuperAdmin-InstructorPerfil') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded">Cancelar</a>
            </div>
        </div>
        </main>
    </div>
    <script src="{{ asset('js/SuperAdmin.js') }}"></script>

</body>

</html>
