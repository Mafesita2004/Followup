<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
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
            <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
            <div class="flex flex-col">
                <h2 class="text-sm m-0 text-[#009e00]">Etapa</h2>
                <h2 class="text-sm m-0 text-[#009e00]">Seguimiento</h2>
            </div>
        </div>
        <div class="text-[8px] flex flex-col items-center justify-center absolute left-1/2 transform -translate-x-1/2">
            <h1 class="text-lg m-0 text-[#009e00] font-bold">INSTRUCTOR</h1>
        </div>
        <img class="w-[45px] h-[45px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
    </header>
    <nav class="bg-[#00324d] px-2.5 py-1.5 flex justify-start items-center relative z-10">
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
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Perfil Aprendiz</div>
        <div class="relative ml-auto flex items-center ">
            <div class="bg-white w-72 rounded-full px-8 py-1.5 text-sm text-black mr-2">Nombre Usuario</div>
            <img class="bg-white w-[45px] h-auto rounded-full -ml-8 border-2 border-black" src="{{ asset('img/user-icon.png') }}" alt="User Icon">
            <button id="menuButtonTri" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div id="userMenuTri" class=" hidden absolute right-4  mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">
                <div class="p-4">
                    <div class="flex items-center mb-4">
                        <div>
                            <p class="text-sm font-bold">Nombre Usuario</p>
                            <p class="text-sm mt-2">Instructor</p>
                        </div>

                        <img src="{{ asset('img/user-icon.png') }}" alt="User Icon" class="w-10 h-10 rounded-full mr-3 mx-10 bg-white border-black border-2">
                    </div>
                    <ul>
                        <a href="{{ route('username')}}" class="block text-center text-green-600 font-bold mt-4 bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">ver perfil</a>
                        <li class="mt-2"><a href="{{ route('icon')}}" class="block text-black hover:bg-white p-2 rounded-lg">Inicio</a></li>
                        <li class="mt-2"><a href="#" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>
                        <li class="mt-2"><a href="#" class="block text-black hover:bg-white p-2 rounded-lg">Permisos</a></li>
                        <li class="mt-2"><a href="{{ route('apprentice') }}" class="block text-black hover:bg-white p-2 rounded-lg">lista Aprendices</a></li>
                        <li class="mt-2"><a href="{{ route('report') }}" class="block text-black hover:bg-white p-2 rounded-lg">Reportes</a></li>
                    </ul>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-2 w-full">Cerrar sesión</button>
                    </form>
            </div>
        </div>
    </nav>
    <div class="w-full flex justify-between items-center mt-6">
        <a href="{{ route('apprentice') }}" class="ml-4">
            <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
        </a>
    </div>
        <div class="flex justify-center">
    <main class=" bg-gray-100 m-2 px-2 rounded-lg max-height-100% w-5/7 border-2 border-black">


        <div class="container  mx-auto mt-6 p-6 bg-white rounded-lg shadow-lg">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-1 flex flex-col items-center space-y-4">
                    <div class="bg-gray-200 rounded-full p-6  border-4 border-black">
                        <img src="{{ asset('img/user-icon.png') }}" alt="Avatar" class="h-16">
                    </div>
                    <div class="w-full">
                        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombres</label>
                        <input type="text" id="nombre" value="MARIAN" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="apellido" class="block text-sm font-medium text-gray-700">Apellidos</label>
                        <input type="text" id="apellido" value="DIAZ" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="identificacion" class="block text-sm font-medium text-gray-700">N° identificación</label>
                        <input type="text" id="identificacion" value="1060435627" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="ficha" class="block text-sm font-medium text-gray-700">N° ficha</label>
                        <input type="text" id="ficha" value="2654013" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                        <input type="email" id="email" value="mariandiaz@gmail.com" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="departamento" class="block text-sm font-medium text-gray-700">Departamento</label>
                        <input type="text" id="departamento" value="CAUCA" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="municipio" class="block text-sm font-medium text-gray-700">Municipio</label>
                        <input type="text" id="municipio" value="POPAYAN" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="genero" class="block text-sm font-medium text-gray-700">Género</label>
                        <input type="text" id="genero" value="FEMENINO" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="nivel_formacion" class="block text-sm font-medium text-gray-700">Nivel de Formación</label>
                        <input type="text" id="nivel_formacion" value="TECNOLOGO" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="programa" class="block text-sm font-medium text-gray-700">Nombre del Programa</label>
                        <input type="text" id="programa" value="ADSO" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                </div>
                <div class="md:col-span-2 flex flex-col items-center space-y-4">
                    <div class="flex justify-between items-center w-full">
                        <div>
                            <a href="{{ route('bitacora') }}" class="m-2.5 py-10 rounded-[10%] flex flex-col items-center text-center p-5 w-56 h-56 hover:border-green-600">
                                <img src="{{ asset('img/aprendiz.png') }}" alt="Bitacora" class="m-2.5 py-8 rounded-[10%] flex flex-col items-center text-center p-2 bg-white border-[3px] border-black w-56 h-56 hover:border-green-600 object-cover">
                            </a>
                            <h2 class="text-center font-weight:200">Bitacora</h2>
                        </div>
                        <div>
                        <a href="{{ route('visita') }}" class="m-2.5 py-10 rounded-[10%] flex flex-col items-center text-center p-5 w-56 h-56 hover:border-green-600">
                            <img src="{{ asset('img/informe.png') }}" alt="Visita" class="m-2.5 py-8 rounded-[10%] flex flex-col items-center text-center p-2.5 bg-white border-[3px] border-black w-56 h-56 hover:border-green-600 object-cover">
                        </a>
                        <h2 class="text-center font-weight:200">Visita</h2>
                    </div>
                        <div>
                    <select id="statusSelect" class="border border-gray-400 p-4 rounded-md w-48 bg-white">
                        <option selected="" disabled>Selecciona Opción</option>
                        <option value="ACTIVO" data-color="green">ACTIVO</option>
                        <option value="NOVEDAD" data-color="orange">NOVEDAD</option>
                        <option value="FINALIZADA" data-color="red">FINALIZADA</option>
                    </select>
                        </div>
                    </div>
                    <div></div>
                    <div class="bg-gray-100 p-4 rounded-md w-full">
                        <h3>LINEA TEMPORAL (Etapa de seguimiento)</h3>
                        <img src="{{asset('img/lineatiempo.png')}}" alt="timeline" class='timeline'>
                    </div>
                </div>
            </div>
        </div>
    </div>

 </main>
</div>
<script src="{{ asset('js/Trainer.js') }}"></script>
<script>
    const notifButton = document.getElementById('notifButton');
    const notifMenu = document.getElementById('notifMenu');
    notifButton.addEventListener('click', () => {
        notifMenu.classList.toggle('hidden');
    });

    const menuButton = document.getElementById('menuButton');
    const userMenu = document.getElementById('userMenu');
    menuButton.addEventListener('click', () => {
        userMenu.classList.toggle('hidden');

    });


    const selectElement = document.getElementById('statusSelect');
    selectElement.addEventListener('change', function() {
    const selectedOption = selectElement.options[selectElement.selectedIndex];
    const selectedColor = selectedOption.getAttribute('data-color');
    selectElement.style.backgroundColor = selectedColor;
});
</script>
</body>
</html>
