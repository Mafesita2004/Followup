<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Etapa Productiva</title>
    <style>
        #userMenu {
            top: 100%;
            margin-top: 0.5rem;
        }
        .section-header {
            font-size: 1.5rem;
            font-weight: bold;
            border-bottom: 2px solid #009e00;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
        }
        .settings-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            margin-bottom: 1rem;
        }

    </style>

</head>
{{-- Barra Azul --}}
<body class="font-['Arial',sans-serif] bg-white m-0 flex flex-col min-h-screen">
    <header class="bg-white text-[#009e00] px-5 py-2.5 flex justify-between items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0]">
        <div class="flex items-center">
            <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
            <div class="flex flex-col">
                <h2 class="text-sm m-0 text-[#009e00]">Etapa</h2>
                <h2 class="text-sm m-0 text-[#009e00]">Productiva</h2>
            </div>
        </div>
        <div class="text-[8px] flex flex-col items-center justify-center absolute left-1/2 transform -translate-x-1/2">
            <h1 class="text-lg m-0 text-[#009e00] font-bold">ADMINISTRADOR</h1>
        </div>
        <div class="flex items-center">
            <h2 class="text-sm m-0 text-[#009e00] mr-5">Centro de Comercio y Servicios</h2>
            <img class="w-[45px] h-[45px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
        </div>
        </header>
    <nav class="bg-[#00324d] px-2.5 py-1.5 flex justify-start items-center relative z-10">
        <button id="notifButton" class="relative">
            <img class="w-[35px] h-auto mr-2.5 filter invert" src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones">
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">5</span> <!-- Ejemplo de contador de notificaciones -->
        </button>
    {{-- FIN Barra Azul --}}
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
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Configuración</div>
        <div class="relative ml-auto flex items-center ">
            <div class="bg-white w-72 rounded-full px-8 py-1.5 text-sm text-black mr-2">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</div>
            <img class="bg-white w-[45px] h-auto rounded-full -ml-8 border-2 border-black" src="{{ asset('img/user-icon.png') }}" alt="User Icon">
            <button id="menuButton" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            {{-- Menu --}}
            <div id="userMenu" class=" hidden absolute right-4  mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">
                <div class="p-4">
                    <div class="flex items-center mb-4">
                        <div>
                            <p class="text-sm font-bold">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</p>
                            <p class="text-sm mt-2">Administrador</p>
                        </div>

                        <img src="{{ asset('img/user-icon.png') }}" alt="User Icon" class="w-10 h-10 rounded-full mr-3 mx-10 bg-white border-black border-2">
                    </div>
                    <ul>
                        <li class="mt-2"><a href="{{ route('administrator.Administrator-perfil') }}" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">Ver perfil</a></li>
                        <li class="mt-2"><a href="{{ route('administrator.home') }}" class="block text-black hover:bg-white p-2 rounded-lg">Inicio</a></li>
                        <li class="mt-2"><a href="{{ route('administrator.settings') }}" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>
                        <li class="mt-2"><a href="{{ route('administrator.apprentice') }}" class="block text-black hover:bg-white p-2 rounded-lg" onclick="toggleSublist(event)">Aprendices</a>
                            <ul class="hidden ml-4 mt-2 bg-[#EEEEEE] p-2 rounded-lg">
                                <li class="mt-2 font-bold text-black border-b border-gray-300 pb-2">APRENDICES</li>
                                <li class="mt-2"><a href="{{ route('administrator.apprentice')}}" class="block text-black hover:bg-white p-2 rounded-lg ">Lista de Aprendices que inician etapa productiva</a></li>
                                <li class="mt-2"><a href="{{ route('administrator.Agregar-aprendiz')}}" class="block text-black hover:bg-white p-2 rounded-lg ">Agregar Aprendices</a></li>
                            </ul></li>
                        <li class="mt-2"><a href="{{ route('administrator.instructor') }}" class="block text-black hover:bg-white p-2 rounded-lg">Instructores</a></li>
                        <li class="mt-2"><a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg" onclick="toggleSublist(event)">Plantillas</a>
                            <ul class="hidden ml-4 mt-2 bg-[#EEEEEE] p-2 rounded-lg">
                                <li class="mt-2 font-bold text-black border-b border-gray-300 pb-2">MODALIDAD</li>
                                <li class="mt-2"><a href="{{ route('administrator.template')}}"class="block text-black hover:bg-white p-2 rounded-lg">Pasantía</a></li>
                                <li class="mt-2"><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Vinculo Laboral</a></li>
                                <li><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg" onclick="toggleSublist(event)">Contrato de Aprendizaje</a>
                                    <ul class="hidden ml-4 mt-2 bg-[#D9D9D9] p-2 rounded-lg">
                                        <li class="mt-2"><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Ver Plantilla</a></li>
                                        <li class="mt-2"><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">+ Añadir Plantilla</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Unidad Productiva Familiar</a></li>
                                <li><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Proyecto Productivo Empresarial</a></li>
                            </ul></li>
                        <li class="mt-2"><a href="{{ route('administrator.graphic')}}" class="block text-black hover:bg-white p-2 rounded-lg">Graficas</a></li>
                    </ul>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-2 w-full">Cerrar sesión</button>
                    </form>
            </div>
        </div>
    </nav>
    <script>
        function toggleSublist(event) {
            event.preventDefault();
            const sublist = event.target.nextElementSibling;
            if (sublist.classList.contains('hidden')) {
                sublist.classList.remove('hidden');
            } else {
                sublist.classList.add('hidden');
            }
        }
    </script>
        {{-- FIN Menu --}}

        <div class="w-full flex justify-between items-center mt-6">
            <a href="{{ route('administrator.home') }}" class="ml-4">
                <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
            </a>
        </div>

        <div class="flex justify-center">
            <main class="bg-white m-4 p-6 rounded-lg shadow-lg border border-[#e0e0e0] w-2/3">
                <h1 class="section-header">Configuración</h1>

                <!-- Sección de Cambio de Contraseña -->
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
                    <h2 class="text-lg font-bold mb-4">Configuración General</h2>
                    <form action="#" method="#">
                        @csrf
                        <div class="mb-4">
                            <label for="siteName" class="block text-sm font-medium text-gray-700">Nombre del Sitio</label>
                            <input type="text" id="siteName" name="siteName" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-green-500 sm:text-sm" value="" required>
                        </div>
                        <div class="mb-4">
                            <label for="timezone" class="block text-sm font-medium text-gray-700">Zona Horaria</label>
                            <select id="timezone" name="timezone" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-green-500 sm:text-sm" required>
                                <!-- Opciones de zona horaria -->
                                <option value="America/Bogota">Bogotá</option>
                                <!-- Añadir más opciones según sea necesario -->
                            </select>
                        </div>
                        <a href="{{ route('administrator.home') }}" type="submit" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Guardar Cambios</a>
                    </form>
                </div>
            </main>
        </div>

    <script src="{{ asset('js/Administrator.js') }}"></script>


</body>
</html>
