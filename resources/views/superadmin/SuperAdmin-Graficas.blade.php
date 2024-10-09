<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Etapa Productiva</title>
    <style>
        #userMenu {
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
                <h2 class="text-sm m-0 text-[#009e00]">Productiva</h2>
            </div>
        </div>
        <div class="text-[8px] flex flex-col items-center justify-center absolute left-1/2 transform -translate-x-1/2">
            <h1 class="text-lg m-0 text-[#009e00] font-bold">SUPER</h1>
            <h1 class="text-lg m-0 text-[#009e00] font-bold">ADMINISTRADOR</h1>
        </div>
        <div class="flex items-center">
            <h2 class="text-sm m-0 text-[#009e00] mr-5">Centro de Comercio y Servicios</h2>
            <img class="w-[45px] h-[45px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
        </div>    </header>

    <nav class="bg-[#00324d] px-2.5 py-1.5 flex justify-start items-center relative z-10">
        <button id="notifButton" class="relative">
            <img class="w-[35px] h-auto mr-2.5 filter invert" src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones">
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">5</span>
        </button>
        <div id="notifMenu" class="hidden absolute top-full mt-2 left-0 w-64 bg-white border border-gray-300 rounded-lg shadow-lg z-20">
            <div class="p-4">
                <h2 class="text-sm font-bold">Notificaciones</h2>
                <ul>
                    <li class="mt-2">
                        <a href="{{ route('superadmin.SuperAdmin-Notificaciones') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 1</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('superadmin.SuperAdmin-Notificaciones') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 2</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('superadmin.SuperAdmin-Notificaciones') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 3</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('superadmin.SuperAdmin-Notificaciones') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 4</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('superadmin.SuperAdmin-Notificaciones') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 5</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Graficas</div>
        <div class="relative ml-auto flex items-center">
            <div class="bg-white w-72 rounded-full px-8 py-1.5 text-sm text-black mr-2">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</div>
            <img class="bg-white w-[45px] h-auto rounded-full -ml-8 border-[3px] border-[#00324d]" src="{{ asset('img/user-icon.png') }}" alt="User Icon">
            <button id="menuButton" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div id="userMenu" class="hidden absolute right-4 mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">
                <div class="p-4">
                    <div class="flex items-center mb-4">
                        <div>
                            <p class="text-sm font-bold">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</p>
                            <p class="text-sm mt-2">Super administrador</p>
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
                        <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Notificaciones') }}" class="block text-black hover:bg-white p-2 rounded-lg">Reportes</a></li>
                        <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Graficas') }}" class="block text-black hover:bg-white p-2 rounded-lg">Gráficas</a></li>
                    </ul>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-2 w-full">Cerrar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="w-full flex justify-between items-center mt-6">
        <a href="{{ route('superadmin.home') }}" class="ml-4">
            <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
        </a>
    </div>

    <div class="flex justify-center">
        <main class="container mx-auto p-4">

            <div class="bg-white rounded-lg p-6 mb-6 shadow">
                <h2 class="text-xl text-center p-8 m-4 font-bold mb-4">Año Actual</h2>
                <div class="grid grid-cols-5 gap-4 mb-4">
                    <div>
                        <p class="font-semibold">Pasantía</p>
                        <p id="pasantia">150</p>
                    </div>
                    <div>
                        <p class="font-semibold">Vínculo Laboral</p>
                        <p id="vinculoLaboral">250</p>
                    </div>
                    <div>
                        <p class="font-semibold">Contrato de Aprendizaje</p>
                        <p id="contratoAprendizaje">110</p>
                    </div>
                    <div>
                        <p class="font-semibold">Unidad Productiva Familiar</p>
                        <p id="unidadProductiva">190</p>
                    </div>
                    <div>
                        <p class="font-semibold">Proyecto Productivo Empresarial</p>
                        <p id="proyectoProductivo">100</p>
                    </div>
                    <div class="col-span-5">
                        <p class="font-semibold">Total</p>
                        <p id="total">800</p>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <canvas id="pieChart"></canvas>
                    </div>
                    <div>
                        <canvas id="barChart"></canvas>
                    </div>
                    <div>
                        <canvas id="doughnutChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg p-6 shadow mb-6">
                <h3 class="text-lg font-semibold mb-4">Tipo de Contrato</h3>
                <form id="contractForm" class="space-y-4">
                    <div>
                        <label class="block mb-1">Tipo de Contrato:</label>
                        <input type="text" id="tipoContrato" class="border rounded px-2 py-1 w-full">
                    </div>
                    <div>
                        <label class="block mb-1">Fecha:</label>
                        <div class="grid grid-cols-2 gap-4">
                            <input type="date" id="fechaInicio" class="border rounded px-2 py-1">
                            <input type="date" id="fechaFin" class="border rounded px-2 py-1">
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <button type="button" id="pendienteBtn" class="bg-red-500 text-white px-4 py-2 rounded">Pendiente</button>
                        <button type="button" id="activoBtn" class="bg-green-500 text-white px-4 py-2 rounded">Activo</button>
                        <button type="button" id="finalizadosBtn" class="bg-gray-300 text-black px-4 py-2 rounded">Finalizados</button>
                    </div>
                    <div class="flex justify-end space-x-4 mt-4">
                        <button type="button" id="cancelarBtn" class="bg-gray-300 text-black px-4 py-2 rounded">CANCELAR</button>
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">CONFIRMAR</button>
                    </div>
                </form>
            </div>

            <div class="bg-white rounded-lg p-6 shadow">
                <h2 class="text-xl font-bold mb-4">Información Adicional</h2>
                <div class="grid grid-cols-5 gap-4 mb-4">
                    <div>
                        <p class="font-semibold">Pasantía</p>
                        <p id="pasantiaAdicional">1150</p>
                    </div>
                    <div>
                        <p class="font-semibold">Vínculo Laboral</p>
                        <p id="vinculoLaboralAdicional">1250</p>
                    </div>
                    <div>
                        <p class="font-semibold">Contrato de Aprendizaje</p>
                        <p id="contratoAprendizajeAdicional">1110</p>
                    </div>
                    <div>
                        <p class="font-semibold">Unidad Productiva Familiar</p>
                        <p id="unidadProductivaAdicional">1190</p>
                    </div>
                    <div>
                        <p class="font-semibold">Proyecto Productivo Empresarial</p>
                        <p id="proyectoProductivoAdicional">1100</p>
                    </div>
                    <div class="col-span-5">
                        <p class="font-semibold">Total</p>
                        <p id="totalAdicional">5800</p>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <canvas id="pieChartAdicional"></canvas>
                    </div>
                    <div>
                        <canvas id="barChartAdicional"></canvas>
                    </div>
                    <div>
                        <canvas id="doughnutChartAdicional"></canvas>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('js/SuperAdmin.js') }}"></script>

</body>

</html>
