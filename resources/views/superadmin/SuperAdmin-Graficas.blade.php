<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Página de gestión para la Etapa Productiva del Centro de Comercio y Servicios.">

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

<body class="font-['Arial',sans-serif] bg-gray-100 m-0 flex flex-col min-h-screen">
    <header class="bg-white text-[#009e00] px-5 py-2.5 flex flex-col items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0]">
        <div class="flex justify-between w-full">
            <div class="flex items-center">
                <img class="w-[70px] h-[70px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
                <div class="flex-grow m-2"></div>
                <div class="text-left">
                    <div class="flex items-center">
                        <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
                        <div class="flex flex-col text-left">
                            <h2 class="text-[12px] m-0 text-[#009e00]">Etapa</h2>
                            <h2 class="text-[12px] m-0 text-[#009e00]">Productiva</h2>
                        </div>
                    </div>
                    <h2 class="text-sm mt-2 text-[#009e00]">Centro de Comercio y Servicios</h2>
                </div>
            </div>
            <div class="relative ml-auto flex items-center pt-5">
                <img class="bg-white w-[45px] h-auto rounded-full -ml-8 border-2 border-black" src="{{ asset('img/administrador/mujer.png') }}" alt="User Icon">
                <button id="menuButton" class="flex items-center" aria-label="Menú de usuario">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-5 h-5 ml-2">
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
    </header>

    <nav class="bg-[#009e00] px-2.5 py-1.5 flex justify-start items-center h-14 relative z-10">
        <button id="notifButton" class="relative" aria-label="Notificaciones">
            <img class="w-[35px] h-auto mr-2.5 filter invert" src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones">
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">5</span>
        </button>
        <div id="notifMenu" class="hidden absolute top-full mt-2 left-0 w-64 bg-white border border-gray-300 rounded-lg shadow-lg z-20">
            <div class="p-4">
                <h2 class="text-sm font-bold">Notificaciones</h2>
                <ul>
                    <li class="mt-2"><a href="#" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 1</a></li>
                    <li class="mt-2"><a href="#" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 2</a></li>
                    <li class="mt-2"><a href="#" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 3</a></li>
                </ul>
            </div>
        </div>
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Inicio</div>
    </nav>

    <div class="w-full flex justify-between items-center mt-6">
        <a href="{{ route('superadmin.home') }}" class="ml-4" aria-label="Volver a inicio">
            <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
        </a>
    </div>

    <div class="flex justify-center">
        <main class="container mx-auto p-4">

            <!-- Gráfica de Año Actual -->
            <div class="bg-white rounded-lg p-6 mb-6 shadow-lg transition transform hover:shadow-xl hover:scale-105">
                <h2 class="text-xl text-center p-4 font-bold text-[#009e00]">Año Actual</h2>
                <div class="grid grid-cols-5 gap-4 mb-4">
                    <div class="text-center">
                        <p class="font-bold">Producción:</p>
                        <p class="text-2xl text-[#009e00]">100</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold">Ventas:</p>
                        <p class="text-2xl text-[#009e00]">80</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold">Proyectos:</p>
                        <p class="text-2xl text-[#009e00]">5</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold">Aprendices:</p>
                        <p class="text-2xl text-[#009e00]">50</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold">Evaluaciones:</p>
                        <p class="text-2xl text-[#009e00]">30</p>
                    </div>
                </div>
                <canvas id="myChart" class="w-full h-60"></canvas>
            </div>

            <!-- Gráfica de Año Anterior -->
            <div class="bg-white rounded-lg p-6 mb-6 shadow-lg transition transform hover:shadow-xl hover:scale-105">
                <h2 class="text-xl text-center p-4 font-bold text-[#009e00]">Año Anterior</h2>
                <div class="grid grid-cols-5 gap-4 mb-4">
                    <div class="text-center">
                        <p class="font-bold">Producción:</p>
                        <p class="text-2xl text-[#009e00]">80</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold">Ventas:</p>
                        <p class="text-2xl text-[#009e00]">60</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold">Proyectos:</p>
                        <p class="text-2xl text-[#009e00]">3</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold">Aprendices:</p>
                        <p class="text-2xl text-[#009e00]">40</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold">Evaluaciones:</p>
                        <p class="text-2xl text-[#009e00]">25</p>
                    </div>
                </div>
                <canvas id="myChart2" class="w-full h-60"></canvas>
            </div>

            <!-- Gráfica 3 (Ejemplo de Línea) -->
            <div class="bg-white rounded-lg p-6 mb-6 shadow-lg transition transform hover:shadow-xl hover:scale-105">
                <h2 class="text-xl text-center p-4 font-bold text-[#009e00]">Progreso Mensual</h2>
                <canvas id="myChart3" class="w-full h-60"></canvas>
            </div>

            <!-- Gráfica 4 (Ejemplo de Pastel) -->
            <div class="bg-white rounded-lg p-6 mb-6 shadow-lg transition transform hover:shadow-xl hover:scale-105">
                <h2 class="text-xl text-center p-4 font-bold text-[#009e00]">Distribución de Evaluaciones</h2>
                <canvas id="myChart4" class="w-full h-60"></canvas>
            </div>

        </main>
    </div>

    <footer class="bg-white text-[#009e00] text-center py-4 border-t border-t-[#e0e0e0]">
        <p class="m-0">© 2024 Centro de Comercio y Servicios. Todos los derechos reservados.</p>
    </footer>

    <script>
        // Gráfica de Año Actual
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Producción', 'Ventas', 'Proyectos', 'Aprendices', 'Evaluaciones'],
                datasets: [{
                    label: 'Año Actual',
                    data: [100, 80, 5, 50, 30],
                    backgroundColor: 'rgba(75, 192, 192, 0.7)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    borderRadius: 10,
                    hoverBackgroundColor: 'rgba(75, 192, 192, 0.9)',
                    hoverBorderColor: 'rgba(75, 192, 192, 1)',
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Cantidad',
                        },
                        grid: {
                            color: 'rgba(200, 200, 200, 0.5)',
                        },
                    },
                    x: {
                        grid: {
                            color: 'rgba(200, 200, 200, 0.5)',
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            color: 'black',
                        },
                    },
                },
            }
        });

        // Gráfica de Año Anterior
        const ctx2 = document.getElementById('myChart2').getContext('2d');
        const myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Producción', 'Ventas', 'Proyectos', 'Aprendices', 'Evaluaciones'],
                datasets: [{
                    label: 'Año Anterior',
                    data: [80, 60, 3, 40, 25],
                    backgroundColor: 'rgba(255, 99, 132, 0.7)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1,
                    borderRadius: 10,
                    hoverBackgroundColor: 'rgba(255, 99, 132, 0.9)',
                    hoverBorderColor: 'rgba(255, 99, 132, 1)',
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Cantidad',
                        },
                        grid: {
                            color: 'rgba(200, 200, 200, 0.5)',
                        },
                    },
                    x: {
                        grid: {
                            color: 'rgba(200, 200, 200, 0.5)',
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            color: 'black',
                        },
                    },
                },
            }
        });

        // Gráfica 3 (Progreso Mensual)
        const ctx3 = document.getElementById('myChart3').getContext('2d');
        const myChart3 = new Chart(ctx3, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
                datasets: [{
                    label: 'Progreso Mensual',
                    data: [30, 50, 40, 60, 70, 80],
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 5,
                    pointHoverRadius: 7,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Cantidad',
                        },
                        grid: {
                            color: 'rgba(200, 200, 200, 0.5)',
                        },
                    },
                    x: {
                        grid: {
                            color: 'rgba(200, 200, 200, 0.5)',
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            color: 'black',
                        },
                    },
                },
            }
        });

        // Gráfica 4 (Distribución de Evaluaciones)
        const ctx4 = document.getElementById('myChart4').getContext('2d');
        const myChart4 = new Chart(ctx4, {
            type: 'pie',
            data: {
                labels: ['Aprobadas', 'Reprobadas', 'En Proceso'],
                datasets: [{
                    label: 'Distribución de Evaluaciones',
                    data: [50, 30, 20],
                    backgroundColor: [
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 99, 132, 0.7)',
                    ],
                    borderColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                    ],
                    borderWidth: 1,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Distribución de Evaluaciones',
                    },
                },
            }
        });

        // Lógica para mostrar y ocultar menús
        document.getElementById('menuButton').addEventListener('click', function() {
            const menu = document.getElementById('userMenu');
            menu.classList.toggle('hidden');
        });

        document.getElementById('notifButton').addEventListener('click', function() {
            const menu = document.getElementById('notifMenu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
