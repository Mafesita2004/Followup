<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Redactar Correo</title>
    <style>
        #userMenu {
            top: 100%;
            margin-top: 0.5rem;
        }
    </style>
</head>

<body class="font-['Arial', sans-serif] bg-white m-0 flex flex-col min-h-screen">

    <!-- Barra superior -->
    <header class="bg-white text-[#009e00] px-5 py-2.5 flex flex-col items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0]">
        <div class="flex justify-between w-full">
            <div class="flex items-center">
                <img class="w-[70px] h-[70px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
                <div class="flex-grow m-2"></div>
                <div class="text-left">
                    <a href="{{ route('administrator.home') }}" class="flex items-center">
                        <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
                        <div class="flex flex-col text-left">
                            <h2 class="text-[12px] m-0 text-[#009e00]">Etapa</h2>
                            <h2 class="text-[12px] m-0 text-[#009e00]">Productiva</h2>
                        </div>
                    </a>
                    <h2 class="text-sm mt-2 text-[#009e00]">Centro de Comercio y Servicios</h2>
                </div>
            </div>
            <div class="relative ml-auto flex items-center">
                <div class="relative">
                    <img class="bg-white w-[45px] h-auto rounded-full border-2" src="{{ asset('img/administrador/mujer.png') }}" alt="User Icon">
                    <button id="menuButton" class="absolute top-1 right-0 bg-transparent p-1 mr-[-46%]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a1.5 1.5 0 110-3 1.5 1.5 0 010 3zm0 5.25a1.5 1.5 0 110-3 1.5 1.5 0 010 3zm0 5.25a1.5 1.5 0 110-3 1.5 1.5 0 010 3z" />
                        </svg>
                    </button>
                </div>
                <div id="userMenu" class="hidden absolute right-4 mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">
                    <div class="p-4">
                        <div class="flex items-center mb-4">
                            <div>
                                <p class="text-sm font-bold">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</p>
                                <p class="text-sm mt-2">Administrador</p>
                            </div>
                        </div>
                        <ul>
                            <li class="mt-2"><a href="{{ route('administrator.Administrator-perfil') }}" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">Ver perfil</a></li>
                            <li class="mt-2"><a href="{{ route('administrator.settings') }}" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>
                            <li class="mt-2"><a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">Plantillas</a></li>
                            <li class="mt-2"><a href="{{ route('administrator.graphic') }}" class="block text-black hover:bg-white p-2 rounded-lg">Gráficas</a></li>
                        </ul>
                        <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                            @csrf
                            <button type="submit" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-2 w-full">Cerrar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Barra de navegación -->
    <nav class="bg-[#009e00] px-2.5 h-14 py-1.5 flex items-center relative z-10">
        <div class="w-full flex justify-center">
            <ul class="horizontal-list flex space-x-4 justify-center">
                <li>
                    <a href="{{ route('administrator.home') }}" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="{{ route('administrator.apprentice') }}" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                        Aprendices
                    </a>
                </li>
                <li>
                    <a href="{{ route('administrator.instructor') }}" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                        Instructores
                    </a>
                </li>
                <li>
                    <a href="{{ route('administrator.graphic') }}" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                        Gráficas
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Mostrar mensajes de flash -->
<div class="w-full flex justify-center mt-6">
    @if(session('success'))
        <div class="bg-green-600 text-white p-4 rounded-lg">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="bg-red-600 text-white p-4 rounded-lg">
            {{ session('error') }}
        </div>
    @endif
</div>

    <!-- Formulario de Redacción de Correo -->
    <div class="flex justify-center items-start min-h-screen">
        <main class="bg-white m-4 p-6 rounded-lg shadow-[0_0_10px_rgba(0,0,0,0.8)] border-[#2F3E4C] w-2/3 items-center mt-20">
            <h1 class="text-2xl font-bold mb-4">Redactar Correo</h1>
            <form method="POST" action="{{ route('emails.send') }}" class="space-y-4">
                @csrf
                <input type="email" name="to" placeholder="Para" class="border p-2 rounded w-full mb-2" required>
                <input type="text" name="subject" placeholder="Asunto" class="border p-2 rounded w-full mb-2" required>
                <textarea name="message" placeholder="Mensaje" class="border p-2 rounded w-full mb-2" required></textarea>
                <div class="flex justify-end space-x-4">
                    <button type="submit" class="bg-[#009e00] text-white p-2 rounded">Enviar Correo</button>
                    <a href="{{ route('administrator.notificaciones') }}" class="bg-gray-300 text-black p-2 rounded">Cancelar</a>
                </div>
            </form>
        </main>
    </div>

    <script src="{{ asset('js/SuperAdmin.js') }}"></script>
</body>

</html>
