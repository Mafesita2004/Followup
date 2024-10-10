<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>Etapa Productiva</title>
    <style>
        /* Aquí se pueden agregar estilos personalizados si es necesario */
        #userMenu, #notifMenu {
            display: none;
            position: absolute;
            z-index: 20;
        }

        #userMenu.show, #notifMenu.show {
            display: block;
        }

        #userMenu {
            right: 0;
            top: 100%;
        }

        #notifMenu {
            left: 0;
            top: 100%;
        }
    </style>
</head>
<body class="font-sans bg-white m-0 flex flex-col min-h-screen">
    <!-- Header -->
    <header class="bg-white text-[#009e00] px-5 py-2.5 flex justify-between items-center border-t-[5px] border-white border-b border-b-[#e0e0e0]">
        <div class="flex items-center">
            <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
            <div class="flex flex-col">
                <h2 class="text-sm m-0 text-[#009e00]">Etapa</h2>
                <h2 class="text-sm m-0 text-[#009e00]">Productivo</h2>
            </div>
        </div>
        <div class="text-center absolute left-1/2 transform -translate-x-1/2">
            <h1 class="text-lg m-0 text-[#009e00] font-bold">APRENDIZ</h1>
        </div>
        <div class="flex items-center">
            <h2 class="text-sm m-0 text-[#009e00] mr-5">Centro de Comercio y Servicios</h2>
            <img class="w-[45px] h-[45px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
        </div>
    </header>

    <!-- Navbar -->
    <nav class="bg-[#00324d] px-2.5 py-1.5 flex justify-start items-center relative z-10">
        <!-- Notification Button -->
        <button id="notifButton" class="relative">
            <img class="w-[35px] h-auto mr-2.5 filter invert" src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones">
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">5</span>
        </button>

        <!-- Notification Dropdown -->
        <div id="notifMenu" class="absolute bg-white border border-gray-300 rounded-lg shadow-lg w-64 hidden z-20">
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

        <!-- Central Button -->
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Inicio</div>

        <!-- User Menu -->
        <div class="relative ml-auto flex items-center">
            <div class="bg-white w-72 rounded-full px-8 py-1.5 text-sm text-black mr-2">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</div>
            <button id="menuButton" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>

            <!-- User Dropdown -->
            <div id="userMenu" class="bg-gray-200 border border-gray-300 rounded-lg shadow-lg w-64 hidden">
                <div class="p-4">
                            <p class="text-sm mb-2 font-bold">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</p>
                            <p class="text-sm">Aprendiz</p>
                            <p class="text-sm">Programa: ADSO</p>
                            <p class="text-sm">Ficha: 2711891</p>
                    </div>
                    <ul>
                        <li><a href="{{ route('apprentice.profile') }}" class="block text-center m-4 text-green-600 font-bold bg-white border hover:bg-green-600 hover:text-white border-green-600 rounded-lg py-1">Ver perfil</a></li>
                        <li><a href="{{ route('apprentice.index') }}" class="block text-black hover:bg-white p-4 rounded-lg">Inicio</a></li>
                        <li><a href="{{ route('apprentice.calendar') }}" class="block text-black hover:bg-white p-4 rounded-lg">Calendario</a></li>
                    </ul>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="block text-center m-4 text-green-600 font-bold bg-white border hover:bg-green-600 hover:text-white border-green-600 rounded-lg py-2 w-56">Cerrar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="flex justify-center mt-6">
        <main class="bg-white m-2 p-2 rounded-lg shadow-[0_0_10px_rgba(0,0,0,0.8)] border-[#2F3E4C] w-2/3">
            <div class="bg-gray-100 p-6 rounded-lg">
                <div class="text-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-40 h-40 mx-auto text-gray-500 m-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <h1 class="text-lg m-0 text-black font-bold">APRENDIZ</h1>
                </div>

                <h3 class="font-bold mb-4 mt-6">Datos básicos</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Identificacion:</label>
                        <p class="text-sm text-black bg-white mt-1 w-full h-7 p-1 rounded-md">{{ auth()->user()->Identificacion }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nombres:</label>
                        <p class="text-sm text-black bg-white mt-1 w-full h-7 p-1 rounded-md">{{ auth()->user()->name }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Apellidos:</label>
                        <p class="text-sm text-black bg-white mt-1 w-full h-7 p-1 rounded-md">{{ auth()->user()->last_name }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Programa:</label>
                        <p class="text-sm text-black bg-white mt-1 w-full h-7 p-1 rounded-md">{{ auth()->user()->last_name }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Ficha:</label>
                        <p class="text-sm text-black bg-white mt-1 w-full h-7 p-1 rounded-md">{{ auth()->user()->Ficha }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Telefono:</label>
                        <p class="text-sm text-black bg-white mt-1 w-full h-7 p-1 rounded-md">{{ auth()->user()->Telefono }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Correo:</label>
                        <p class="text-sm text-black bg-white mt-1 w-full h-7 p-1 rounded-md">{{ auth()->user()->Correo }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Inicio de Contrato:</label>
                        <p class="text-sm text-black bg-white mt-1 w-full h-7 p-1 rounded-md">{{ auth()->user()->InicioContrato }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Fin de Contrato:</label>
                        <p class="text-sm text-black bg-white mt-1 w-full h-7 p-1 rounded-md">{{ auth()->user()->FinContrato }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nit. Empresa:</label>
                        <p class="text-sm text-black bg-white mt-1 w-full h-7 p-1 rounded-md">{{ auth()->user()->Nit_Empresa }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Razon social:</label>
                        <p class="text-sm text-black bg-white mt-1 w-full h-7 p-1 rounded-md">{{ auth()->user()->Razon_Social }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Direccion:</label>
                        <p class="text-sm text-black bg-white mt-1 w-full h-7 p-1 rounded-md">{{ auth()->user()->Direccion }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Telefono de Empresa:</label>
                        <p class="text-sm text-black bg-white mt-1 w-full h-7 p-1 rounded-md">{{ auth()->user()->Telefono_Empresa }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nombre de Instructor:</label>
                        <p class="text-sm text-black bg-white mt-1 w-full h-7 p-1 rounded-md">{{ auth()->user()->Nombre_Instructor }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Correo Instructor:</label>
                        <p class="text-sm text-black bg-white mt-1 w-full h-7 p-1 rounded-md">{{ auth()->user()->Correo_Instructor }}</p>
                    </div>

            </div>
        </main>
    </div>
    <script>
        document.getElementById('menuButton').addEventListener('click', function() {
            document.getElementById('userMenu').classList.toggle('show');
        });

        document.getElementById('notifButton').addEventListener('click', function() {
            document.getElementById('notifMenu').classList.toggle('show');
        });

        // Close dropdowns when clicking outside
        window.onclick = function(event) {
            if (!event.target.closest('#menuButton') && !event.target.closest('#notifButton')) {
                document.getElementById('userMenu').classList.remove('show');
                document.getElementById('notifMenu').classList.remove('show');
            }
        };
    </script>
</body>
</html>
