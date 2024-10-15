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
<body class="font-['Arial',sans-serif] bg-white m-0 flex flex-col min-h-screen">
    <header class="bg-white text-[#009e00] px-5 py-2.5 flex justify-between items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0]">
        <div class="flex items-center justify-start">
            <img class="w-[45px] h-[45px] m-0" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
            <h2 class="text-sm m-0 text-[#009e00] m-2">Centro de Comercio y Servicios</h2>

        </div>
        <div class="flex items-center ml-[10%]">
            <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
                <h2 class="text-[12px] m-0 text-[#009e00]" >Etapa <br>Productiva</h2>

        </div>
    </header>

    <!-- Navbar -->
<<<<<<< HEAD
    <nav class="bg-[#5eb319] h-16 px-2.5 py-1.5 flex justify-start items-center relative z-10">
=======
    <nav class="bg-[#00324d]  px-2.5 py-1.5 flex justify-start items-center relative z-10">
>>>>>>> 8b342e0fa0dadd0d8240b1d2590730a953657e37
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
            <div class="bg-white w-72 rounded-full px-8 py-1.5 text-sm text-black mr-2"></div>
            <button id="menuButton" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>

            <!-- User Dropdown -->
            <div id="userMenu" class="bg-gray-200 border border-gray-300 rounded-lg shadow-lg w-64 hidden">
                <div class="p-4">

                            <p class="text-sm mb-2 font-bold"></p>
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
                        <button type="submit" class="block text-center m-4 text-green-600 font-bold bg-white border hover:bg-green-600 hover:text-white border-green-600 rounded-lg py-1 w-56">Cerrar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Trainer Container -->
    <div class="w-full bg-gray-300 px-4 py-6 md:px-10 md:py-4">
        <h2 class="text-xl font-bold md:text-2xl">Instructor Asignado</h2>
        <ul class="list-none mt-4 space-y-2 md:space-y-4">
            <li><span class="font-semibold">Nombre:</span> Mariany Dorado</li>
            <hr class="my-1 border-white">
            <li><span class="font-semibold">Correo:</span> edusena10@gmail.com</li>
            <hr class="my-1 border-white">
            <li><span class="font-semibold">Teléfono:</span> 322 546 78 67</li>
            <hr class="my-1 border-white">

        </ul>
    </div>

    <!-- Timeline and Blog Section -->
    <div class="flex flex-col md:flex-row w-full px-2 p-[2%] py-4 md:px-10 md:py-0 space-y-4 md:space-y-0 md:space-x-4">
        <!-- Timeline Section -->
        <div class="w-full md:flex-1 mt-[0.5%]">
            <h3 class="text-xl font-bold  bg-gray-300 mb-2 md:text-2xl">Línea Temporal (Etapa de seguimiento)</h3>
            <img src="{{ asset('img/lineatiempo.png') }}" alt="timeline" class="w-full h-60 md:h-80 object-cover">
        </div>

        <!-- Blog Section -->
        <div class="w-full md:w-[25%] p-4 md:p-6 mt-[3%] ">
            <h4 class="text-center text-lg font-bold  bg-gray-300 md:text-xl">Bitácoras</h4>
            <div class="w-60 h-60 mx-auto bg-center bg-cover" style="background-image: url('{{ asset('img/bitacora.png') }}')"></div>
        </div>
    </div>

    <!-- Scripts for Dropdowns -->
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
