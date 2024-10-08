<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Seguimiento</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        #userMenu, #notifMenu {
            display: none;
        }

        @media (max-width: 768px) {
            header, nav {
                flex-direction: column;
            }
            .text-lg {
                font-size: 1rem;
            }
        }

        /* Estilos para el calendario */
        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 1rem;
            margin-top: 1rem;
        }

        .calendar div {
            border: 1px solid #ccc;
            padding: 10px;
            min-height: 80px;
            position: relative;
        }

        .calendar div .event {
            background-color: #009e00;
            color: white;
            padding: 2px 5px;
            border-radius: 4px;
            font-size: 0.8rem;
            margin-top: 5px;
        }
    </style>
</head>
<body class="font-['Arial',sans-serif] bg-white m-0 flex flex-col min-h-screen">    <header class="bg-white text-[#009e00] px-5 py-2.5 flex justify-between items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0]">
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
        <div class="flex items-center">
            <h2 class="text-sm m-0 text-[#009e00] mr-5">Centro de Comercio y Servicios</h2>
            <img class="w-[45px] h-[45px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
        </div>    </header>
    <nav class="bg-[#00324d] px-2.5 py-1.5 flex justify-start items-center relative z-10">
        <button id="notifButton" class="relative">
            <img class="w-[35px] h-auto mr-2.5 filter invert" src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones">
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">5</span>
        </button>
        <div id="notifMenu" class="absolute top-full mt-2 left-0 w-64 bg-white border border-gray-300 rounded-lg shadow-lg z-20">            <div class="p-4">
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
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Cronograma</div>
        <div class="relative ml-auto flex items-center ">
            <div class="bg-white w-72 rounded-full px-8 py-1.5 text-sm text-black mr-2">{{ auth()->user()->name }}{{ auth()->user()->last_name }}</div>
            <img class="bg-white w-[45px] h-auto rounded-full -ml-8 border-[3px] border-[#00324d]" src="{{ asset('img/user-icon.png') }}" alt="User Icon">
            <button id="menuButton" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div id="userMenu" class="absolute right-4 mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">                <div class="p-4">
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
        <a href="{{route('superadmin.SuperAdmin-InstructorPerfil') }}" class="ml-4">
            <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
        </a>
    </div>
    <div class="flex justify-center">
        <main class="bg-white m-4 p-4 rounded-lg shadow-[0_0_10px_rgba(0,0,0,0.8)] border-[#2F3E4C] w-2/3">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold">Cronograma</h2>
                <div class="flex items-center">
                    <button id="prevMonth" class="bg-[#009e00] text-white px-3 py-1 rounded-l">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                    <span id="currentMonth" class="bg-[#00324d] text-white px-4 py-1">Julio 2024</span>
                    <button id="nextMonth" class="bg-[#009e00] text-white px-3 py-1 rounded-r">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Sección del cronograma -->
    <section class="p-4">
        <h2 class="text-2xl mb-4">Cronograma</h2>
        <div class="flex justify-between items-center mb-4">
            <button id="prevMonth" class="px-4 py-2 bg-gray-300 rounded">Anterior</button>
            <span id="currentMonth" class="text-xl font-bold"></span>
            <button id="nextMonth" class="px-4 py-2 bg-gray-300 rounded">Siguiente</button>
        </div>
        <!-- Días de la semana -->
        <div class="grid grid-cols-7 gap-2 text-center font-bold">
            <div>Dom</div>
            <div>Lun</div>
            <div>Mar</div>
            <div>Mié</div>
            <div>Jue</div>
            <div>Vie</div>
            <div>Sáb</div>
        </div>
        <!-- Contenedor para los días del mes -->
        <div id="calendarDays" class="calendar"></div>
    </section>

            <div class="mt-4">
                <button id="addEvent" class="bg-[#009e00] text-white px-4 py-2 rounded">Agregar Evento</button>
            </div>

            <!-- Modal for adding events -->
            <div id="notifMenu" class="absolute top-full mt-2 left-0 w-64 bg-white border border-gray-300 rounded-lg shadow-lg z-20">
                <!-- Contenido del menú de notificaciones -->
            </div>

            <!-- Modal para agregar eventos -->
            <div id="eventModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
                <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
                    <h3 class="text-lg font-bold mb-4">Agregar Evento</h3>
                    <form id="eventForm">
                        <div class="mb-4">
                            <label for="eventDate" class="block text-sm font-medium text-gray-700">Fecha</label>
                            <input type="date" id="eventDate" name="eventDate" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div class="mb-4">
                            <label for="eventTitle" class="block text-sm font-medium text-gray-700">Título</label>
                            <input type="text" id="eventTitle" name="eventTitle" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div class="mb-4">
                            <label for="eventDescription" class="block text-sm font-medium text-gray-700">Descripción</label>
                            <textarea id="eventDescription" name="eventDescription" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="button" id="cancelEvent" class="mr-2 bg-gray-300 text-black px-4 py-2 rounded">Cancelar</button>
                            <button type="submit" class="bg-[#009e00] text-white px-4 py-2 rounded">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex justify-end mt-6 space-x-4">
                <a type="submit" href="{{ route('superadmin.SuperAdmin-InstructorPerfil')}}" class="bg-[#009e00] hover:bg-green-700 text-white py-2 px-4 rounded">Confirmar</a>
                <a href="{{ route('superadmin.SuperAdmin-InstructorPerfil') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded">Cancelar</a>
            </div>
        </main>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const currentMonthSpan = document.getElementById('currentMonth');
            const prevMonthButton = document.getElementById('prevMonth');
            const nextMonthButton = document.getElementById('nextMonth');
            const calendarDays = document.getElementById('calendarDays');
            const eventModal = document.getElementById("eventModal");
            const addEventButton = document.getElementById("addEvent");
            const cancelEventButton = document.getElementById("cancelEvent");
            const eventForm = document.getElementById("eventForm");

            let currentMonth = new Date().getMonth();
            let currentYear = new Date().getFullYear();
            let events = [];

            const months = [
                'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
            ];

            // Función para obtener el número de días en un mes
            function daysInMonth(month, year) {
                return new Date(year, month + 1, 0).getDate();
            }

            // Función para obtener el día de la semana del primer día del mes
            function firstDayOfMonth(month, year) {
                return new Date(year, month, 1).getDay();
            }

            // Función para renderizar el calendario
            function renderCalendar() {
                calendarDays.innerHTML = ''; // Limpiar calendario
                currentMonthSpan.textContent = `${months[currentMonth]} ${currentYear}`;

                const totalDays = daysInMonth(currentMonth, currentYear);
                const startDay = firstDayOfMonth(currentMonth, currentYear);

                // Rellenar los días del calendario
                for (let i = 0; i < startDay; i++) {
                    const emptyCell = document.createElement('div');
                    calendarDays.appendChild(emptyCell);
                }

                for (let day = 1; day <= totalDays; day++) {
                    const dayCell = document.createElement('div');
                    dayCell.textContent = day;

                    // Mostrar eventos en el día correspondiente
                    const dayEvents = events.filter(event => {
                        const eventDate = new Date(event.date);
                        return eventDate.getDate() === day && eventDate.getMonth() === currentMonth && eventDate.getFullYear() === currentYear;
                    });

                    dayEvents.forEach(event => {
                        const eventDiv = document.createElement('div');
                        eventDiv.classList.add('event');
                        eventDiv.textContent = event.title;
                        dayCell.appendChild(eventDiv);
                    });

                    calendarDays.appendChild(dayCell);
                }
            }

            // Funciones de cambio de mes
            prevMonthButton.addEventListener('click', function() {
                currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
                if (currentMonth === 11) currentYear--;
                renderCalendar();
            });

            nextMonthButton.addEventListener('click', function() {
                currentMonth = (currentMonth === 11) ? 0 : currentMonth + 1;
                if (currentMonth === 0) currentYear++;
                renderCalendar();
            });

            // Mostrar el modal para agregar eventos
            addEventButton.addEventListener("click", function() {
                eventModal.classList.remove("hidden");
            });

            // Ocultar el modal de agregar eventos
            cancelEventButton.addEventListener("click", function() {
                eventModal.classList.add("hidden");
            });

            // Agregar evento al calendario
            eventForm.addEventListener("submit", function(e) {
                e.preventDefault();
                const eventDate = document.getElementById("eventDate").value;
                const eventTitle = document.getElementById("eventTitle").value;
                const eventDescription = document.getElementById("eventDescription").value;

                if (eventDate && eventTitle) {
                    events.push({ date: eventDate, title: eventTitle, description: eventDescription });
                    eventModal.classList.add("hidden");
                    renderCalendar();
                } else {
                    alert("Por favor, complete todos los campos.");
                }
            });

            // Inicializar calendario
            renderCalendar();
        });
    </script>
</body>
</html>
