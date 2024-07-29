<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Seguimiento</title>
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
                <h2 class="text-sm m-0 text-[#009e00]">Seguimiento</h2>
            </div>
        </div>
        <div class="text-[8px] flex flex-col items-center justify-center absolute left-1/2 transform -translate-x-1/2">
            <h1 class="text-lg m-0 text-[#009e00] font-bold">SUPER</h1>
            <h1 class="text-lg m-0 text-[#009e00] font-bold">ADMINISTRADOR</h1>
        </div>
        <img class="w-[45px] h-[45px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
    </header>
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
                        <a href="{{ route('superadmin.SuperAdmin-Notificaciones')}}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 1</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('superadmin.SuperAdmin-Notificaciones')}}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 2</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('superadmin.SuperAdmin-Notificaciones')}}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 3</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('superadmin.SuperAdmin-Notificaciones')}}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 4</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('superadmin.SuperAdmin-Notificaciones')}}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 5</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Perfil Aprendices</div>
        <div class="relative ml-auto flex items-center ">
            <div class="bg-white w-72 rounded-full px-8 py-1.5 text-sm text-black mr-2">{{ auth()->user()->name }}{{ auth()->user()->last_name }}</div>
            <img class="bg-white w-[45px] h-auto rounded-full -ml-8 border-[3px] border-[#00324d]" src="{{ asset('img/user-icon.png') }}" alt="User Icon">
            <button id="menuButton" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div id="userMenu" class=" hidden absolute right-4  mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">
                <div class="p-4">
                    <div class="flex items-center mb-4">
                        <div>

                            <p class="text-sm font-bold">{{ auth()->user()->name }}{{ auth()->user()->last_name }}</p>
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
                        <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Notificaciones')}}" class="block text-black hover:bg-white p-2 rounded-lg">Reportes</a></li>
                        <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Graficas') }}" class="block text-black hover:bg-white p-2 rounded-lg">Gráficas</a></li>
                    </ul>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-2 w-full">Cerrar sesión</button>
                    </form>
            </div>
        </div>
    </nav>
        <div class="w-full flex justify-between items-center mt-6">
            <a href="{{route('superadmin.SuperAdmin-Aprendiz') }}" class="ml-4">
                <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
            </a>
        </div>
        <div class="flex justify-center">
            <main class="m-4 p-6 rounded-lg shadow-[0_0_10px_rgba(0,0,0,0.8)] border-[#2F3E4C] w-full max-w-7xl">
                <div class="w-full space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <label class="font-semibold block">Nombre:</label>
                                <input type="text" class="w-full border rounded-lg px-3 py-2" placeholder="Nombre">
                            </div>
                            <div class="space-y-2">
                                <label class="font-semibold block">Apellido:</label>
                                <input type="text" class="w-full border rounded-lg px-3 py-2" placeholder="Apellido">
                            </div>
                            <div class="space-y-2">
                                <label class="font-semibold block">Tipo de contrato:</label>
                                <input type="text" class="w-full border rounded-lg px-3 py-2" placeholder="Tipo de contrato">
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <label class="font-semibold block">Celular:</label>
                                <input type="text" class="w-full border rounded-lg px-3 py-2" placeholder="Celular">
                            </div>
                            <div class="space-y-2">
                                <label class="font-semibold block">Cédula:</label>
                                <input type="text" class="w-full border rounded-lg px-3 py-2" placeholder="Cédula">
                            </div>
                            <div class="space-y-2">
                                <label class="font-semibold block">Correo:</label>
                                <input type="email" class="w-full border rounded-lg px-3 py-2" placeholder="Correo">
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <label class="font-semibold block">Fecha de inicio:</label>
                                <input type="date" class="w-full border rounded-lg px-3 py-2">
                            </div>
                            <div class="space-y-2">
                                <label class="font-semibold block">Fecha de fin:</label>
                                <input type="date" class="w-full border rounded-lg px-3 py-2">
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <label class="font-semibold block">Fecha de inicio:</label>
                                <input type="date" class="w-full border rounded-lg px-3 py-2">
                            </div>
                            <div class="space-y-2">
                                <label class="font-semibold block">Fecha de fin:</label>
                                <input type="date" class="w-full border rounded-lg px-3 py-2">
                            </div>
                        </div>
                    </div>
        
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-4">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold">3/3</div>
                            <div class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold">2/3</div>
                            <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center text-white font-bold">0/0</div>
                        </div>
                        <div class="space-x-2">
                            <a href="{{ route('superadmin.SuperAdmin-Redactar')}}" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Reporte</a>
                            <a href="{{ route('superadmin.SuperAdmin-InstructorPerfil')}}" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Instructor</a>
                        </div>
                    </div>
        
                    <div class="space-y-4">
                        <h3 class="font-semibold text-lg">Visitas:</h3>
                        <div class="border rounded-lg p-4 h-64">
                            <canvas id="visitasChart"></canvas>
                        </div>
                    </div>
        
                    <div class="space-y-4">
                        <h3 class="font-semibold text-lg">Bitácoras:</h3>
                        <div class="border rounded-lg p-4 h-64">
                            <canvas id="bitacorasChart"></canvas>
                        </div>
                    </div>
        
                    <div class="space-y-4">
                        <h3 class="font-semibold text-lg">Timeline:</h3>
                        <div class="border rounded-lg p-4 h-64">
                            <canvas id="timelineChart"></canvas>
                        </div>
                    </div>
        
                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('superadmin.SuperAdmin-AprendizPerfilActualizar')}}" class="bg-[#009e00] hover:bg-green-700 text-white py-2 px-6 rounded-lg">Actualizar</a>
                        <a href="{{ route('superadmin.SuperAdmin-AprendizPerfil') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-6 rounded-lg">Cancelar</a>
                    </div>
                </div>
            </main>
        </div>
    <script src="{{ asset('js/SuperAdmin.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctxVisitas = document.getElementById('visitasChart').getContext('2d');
        const visitasChart = new Chart(ctxVisitas, {
            type: 'bar',
            data: {
                labels: ['1 Bitácora', '2 Bitácoras', '3 Bitácoras', 'Total'],
                datasets: [{
                    label: 'Visitas',
                    data: [3, 2, 0, 5],
                    backgroundColor: ['#36a2eb', '#ff6384', '#ff9f40', '#4bc0c0'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctxBitacoras = document.getElementById('bitacorasChart').getContext('2d');
        const bitacorasChart = new Chart(ctxBitacoras, {
            type: 'bar',
            data: {
                labels: ['Aprendices en 1 visita', 'Aprendices en 2 visitas', 'Aprendices en 3 visitas'],
                datasets: [{
                    label: 'Bitácoras',
                    data: [2, 3, 5],
                    backgroundColor: ['#36a2eb', '#ff6384', '#ff9f40'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctxTimeline = document.getElementById('timelineChart').getContext('2d');
        const timelineChart = new Chart(ctxTimeline, {
            type: 'line',
            data: {
                labels: ['Mes 1', 'Mes 2', 'Mes 3', 'Mes 4', 'Mes 5', 'Mes 6'],
                datasets: [{
                    label: 'Eventos',
                    data: [0, 1, 2, 3, 4, 5],
                    borderColor: '#4bc0c0',
                    borderWidth: 1,
                    fill: false
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>