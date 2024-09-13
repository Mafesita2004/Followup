<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <script src="{{ asset('js/Trainer.js') }}"></script>
    <title>Etapa Seguimiento</title>
    <style>
        #userMenuTri {
            top: 100%;
            margin-top: 0.5rem;
        }
    </style>
</head>
<body class="font-['Arial',sans-serif] bg-white m-0 flex flex-col min-h-screen">
    <header class="bg-white text-[#009e00] px-5 py-2.5 flex justify-between items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0]">
        <div class="flex items-center">
            <img src="http://127.0.0.1:8000/img/logo.png" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
            <div class="flex flex-col">
                <h2 class="text-sm m-0 text-[#009e00]">Etapa</h2>
                <h2 class="text-sm m-0 text-[#009e00]">Seguimiento</h2>
            </div>
        </div>
        <div class="text-[8px] flex flex-col items-center justify-center absolute left-1/2 transform -translate-x-1/2">
            <h1 class="text-lg m-0 text-[#009e00] font-bold">INSTRUCTOR</h1>
        </div>
        <img class="w-[45px] h-[45px]" src="http://127.0.0.1:8000/img/logo-sena.png" alt="Sena Logo">
    </header>
    <nav class="bg-[#00324d] px-2.5 py-1.5 flex justify-start items-center relative z-10">
        <button id="notifButton" class="relative">
            <img class="w-[35px] h-auto mr-2.5 filter invert" src="http://127.0.0.1:8000/img/notificaciones.png" alt="Notificaciones">
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">5</span> <!-- Ejemplo de contador de notificaciones -->
        </button>
        <div id="notifMenu" class="hidden absolute top-full mt-2 left-0 w-64 bg-white border border-gray-300 rounded-lg shadow-lg z-20">
            <div class="p-4">
                <h2 class="text-sm font-bold">Notificaciones</h2>
                <ul>
                    <li class="mt-2">
                        <a href="http://127.0.0.1:8000/trainer/notification" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 1</a>
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
        <div class="relative ml-auto flex items-center ">
            <div class="bg-white w-72 rounded-full px-8 py-1.5 text-sm text-black mr-2">Nombre Usuario</div>
            <img class="bg-white w-[45px] h-auto rounded-full -ml-8 border-2 border-black" src="http://127.0.0.1:8000/img/user-icon.png" alt="User Icon">
            <button id="menuButtonTri" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                </svg>
            </button>

            <div id="userMenuTri" class="hidden absolute right-4 mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">
                <div class="p-4">
                    <div class="flex items-center mb-4">
                        <div>
                            <p class="text-sm font-bold">Nombre Usuario</p>
                            <p class="text-sm mt-2">Instructor</p>
                        </div>

                        <img src="http://127.0.0.1:8000/img/user-icon.png" alt="User Icon" class="w-10 h-10 rounded-full mr-3 mx-10 bg-white border-black border-2">
                    </div>
                    <ul>
                        <a href="http://127.0.0.1:8000/trainer/username" class="block text-center text-green-600 font-bold mt-4 bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">ver perfil</a>
                        <li class="mt-2"><a href="http://127.0.0.1:8000/trainer/iconTrainer" class="block text-black hover:bg-white p-2 rounded-lg">Inicio</a></li>
                        <li class="mt-2"><a href="#" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>
                        <li class="mt-2"><a href="http://127.0.0.1:8000/trainer/apprentice" class="block text-black hover:bg-white p-2 rounded-lg">lista Aprendices</a></li>
                        <li class="mt-2"><a href="http://127.0.0.1:8000/trainer/report" class="block text-black hover:bg-white p-2 rounded-lg">Reportes</a></li>
                    </ul>
                    <form id="logoutForm" action="http://127.0.0.1:8000/logout" method="POST" class="mt-4">
                        <input type="hidden" name="_token" value="RAzJ9SXlUqD5RAsIJ6pjZFVFGizRGqYNsXVEygN8" autocomplete="off">                        <button type="submit" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-2 w-full">Cerrar sesión</button>
                    </form>
            </div>
        </div>
    </div></nav>
    <div class="w-full flex justify-between items-center mt-4">
        <a href="http://127.0.0.1:8000/trainer/perfilapre" class="ml-4">
            <img src="http://127.0.0.1:8000/img/flecha.png" alt="Flecha" class="w-5 h-auto">
        </a>
    </div>

    <main class=" bg-gray-100 m-2 px-2 rounded-lg max-height-100% w-5/7 border-2 border-black">

        <div class="flex flex-cols-4 gap-12 pb-4  items-between text-center mt-2">
                <div class="flex flex-col w-1/4 ">
                    <label class="font-bold">Nombre Del Aprendiz</label>
                    <p type="text" class="bg-[#04324D] bg-opacity-60 p-2 rounded-full text-white font-semibold">Marian Diaz</p>
                </div>
                <div class="flex flex-col  w-1/4">
                    <label class="font-bold">N° Ficha</label>
                    <p type="text" class=" bg-[#04324D] bg-opacity-60 p-2 rounded-full text-white font-semibold">2654013</p>
                </div>
                <div class="flex flex-col  w-1/4">
                    <label class="font-bold">N° Identificación</label>
                    <p type="text" class=" bg-[#04324D] bg-opacity-60 p-2 rounded-full text-white font-semibold">1060435627</p>
                </div>
                <div class="flex flex-col  w-1/4">
                    <label class="font-bold">Correo Electrónico</label>
                    <p type="email" class=" bg-[#04324D] bg-opacity-60 p-2 rounded-full text-white font-semibold">mariandiaz@gmail.com</p>
                </div>
        </div>
    <div class="flex flex-cols-3">
        <div class="flex-cols-2 gap-2 p-4 w-2/5 text-center h-vg[80] border-2 border-black rounded-2xl">
            <div class="flex flex-col">
                <label class="font-semibold ">Bitacoras</label>
                <label class="w-96 items-center cursor-pointer space-x-2">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="1">
                    <span class="block px-4 py-2 border border-gray-300 rounded-md text-gray-700">1</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="2">
                    <span class="block px-4 py-2 border border-gray-300 rounded-md text-gray-700">2</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="3">
                    <span class="block px-4 py-2 border border-gray-300 rounded-md text-gray-700">3</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="4">
                    <span class="block px-4 py-2 border border-gray-300 rounded-md text-gray-700">4</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="5">
                    <span class="block px-4 py-2 border border-gray-300 rounded-md text-gray-700">5</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="6">
                    <span class="block px-4 py-2 border border-gray-300 rounded-md text-gray-700">6</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="7">
                    <span class="block px-4 py-2 border border-gray-300 rounded-md text-gray-700">7</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="8">
                    <span class="block px-4 py-2 border border-gray-300 rounded-md text-gray-700">8</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="9">
                    <span class="block px-4 py-2 border border-gray-300 rounded-md text-gray-700">9</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="10">
                    <span class="block px-4 py-2 border border-gray-300 rounded-md text-gray-700">10</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="11">
                    <span class="block px-4 py-2 border border-gray-300 rounded-md text-gray-700">11</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="12">
                    <span class="block px-4 py-2 border border-gray-300 rounded-md text-gray-700">12</span>
                </label>
            </div>
            
        </div>
        {{-- Contenedor Fantasma --}}
        <div class=" w-1/5  ">
        </div>
        <div class=" w-2/5 border-2 rounded-2xl border-black h-80 mt-8">
            <div class="flex flex-col p-6 text-center">
                <label class="font-semibold ">Tipo de Modalidad de Etapa Productiva</label>
                <p type="text" class="border border-black  p-2 rounded-md bg-white">Pasantia</p>
            </div>
            <div class="flex flex-col p-6 text-center">
                <label class="font-semibold ">Descripcion De La Actividad</label>
                <p type="text" class="border border-black  p-2 rounded-md h-28 bg-white"></p>
            </div>
            <div class="flex flex-col p-6 text-center">
                <label class="font-bold">Fecha</label>
                <input type="date" class="border border-gray-400 p-2 rounded-md w-48 bg-white">
            </div>
            <div class="flex flex-col p-6 text-center">
                <label class="font-semibold ">Observación/Inasistencia y/o Dificultades</label>
                <p type="text" class="border border-black  p-2 rounded-md h-28 bg-white"></p>
            </div>
        </div>
    </div>
    <div class=" pt-2 px-[44%]">
        <button class="bg-[#009E00] h-8 w-44 rounded-2xl text-white mb-6">REGISTRAR</button>
      </div>
    </main>
    <script>
         document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.bitacora-checkbox');

            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    if (checkbox.checked) {
                        checkbox.nextElementSibling.classList.add('bg-green-500', 'text-white');
                        checkbox.nextElementSibling.classList.remove('border-gray-300', 'text-gray-700');
                    } else {
                        checkbox.nextElementSibling.classList.remove('bg-green-500', 'text-white');
                        checkbox.nextElementSibling.classList.add('border-gray-300', 'text-gray-700');
                    }
                });
            });
        });
    </script>

</body>
</html>