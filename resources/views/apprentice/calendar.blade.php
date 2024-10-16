<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet"> 
    <title>Etapa Productiva</title>
    <style>
        #userMenu {
            top: 100%;
            margin-top: 0.5rem;
        }
        .user-status {
            text-align: center; /* Centrar el texto */
            color: #009e00; /* Color verde */
            margin-top: 5px; /* Espacio superior para alineación */
            font-size: 12px; /* Ajustar el tamaño de fuente */
        }
        .vis-item.completed {
            background-color: green;
            color: white;
        }
        .vis-item {
            background-color: #3498db;
            color: white;
        }
        .vis-item.vis-selected {
            background-color: #2ecc71;
        }
        .card {
            width: 300px; /* Ajusta el ancho según tus necesidades */
            height: 300px; /* Ajusta la altura según tus necesidades */
            position: relative; /* Necesario para posicionar el texto en el centro */
        }
        #percentage {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2rem; /* Ajusta el tamaño de la fuente según tus necesidades */
            font-weight: bold;
            color: black; /* Color del porcentaje */
        }
    </style>
</head>
<body class="font-['Arial',sans-serif] bg-white m-0 flex flex-col min-h-screen">
  <header class="bg-white text-[#009e00] px-5 py-2.5 flex flex-col items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0]">

        <div class="flex justify-between w-full">
            <div class="flex items-center">
                <!-- Logo de SENA en el lado izquierdo -->
                <img class="w-[70px] h-[70px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo ">

                <!-- Espaciado entre los dos bloques -->
                <div class="flex-grow m-2"></div>

                <!-- Logo de Etapa Productiva y texto "Centro de Comercio y Servicios" en el lado derecho -->
                <div class="text-left">
                    <!-- Logo de Etapa Seguimiento -->
                    <a href="{{ route('apprentice') }}" class="flex items-center">
                        <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
                        <div class="flex flex-col text-left">
                            <h2 class="text-[12px] m-0 text-[#009e00]">Etapa</h2>
                            <h2 class="text-[12px] m-0 text-[#009e00]">Productiva</h2>
                        </div>
                    </a>

                    <!-- Texto "Centro de Comercio y Servicios" debajo del logo y el texto de Etapa Productiva -->
                    <h2 class="text-sm mt-2 text-[#009e00]">Centro de Comercio y Servicios</h2>
                </div>
            </div>
            <div class="relative ml-auto flex items-center">
                <!-- Contenedor para la imagen y el ícono de los tres puntos -->
                <div class="relative">
                    <!-- Imagen de usuario -->
                    <p class="text-sm font-bold mr-[16px] bg-[#f5f4f4] p-1 rounded-lg  z-20">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</p>

                    <!-- Botón de los tres puntos encima de la imagen -->
                    <button id="menuButton" class="absolute top-[-4px] right-0 bg-transparent p-1 mr-[-15%]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a1.5 1.5 0 110-3 1.5 1.5 0 010 3zm0 5.25a1.5 1.5 0 110-3 1.5 1.5 0 010 3zm0 5.25a1.5 1.5 0 110-3 1.5 1.5 0 010 3z" />
                        </svg>
                    </button>
                </div>
                 {{-- Menu --}}
                 <div id="userMenu" class=" hidden absolute right-4  mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">
                     <div class="p-4">
                         <div class="flex items-center mb-4">
                             <div>
                                 <p class="text-sm font-bold">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</p>
                                 <p class="text-sm mt-2">Aprendiz</p>
                             </div>


                         </div>
                         <ul>
                             <li class="mt-2"><a href="{{ route('apprentice.profile') }}" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">Ver perfil</a></li>

                             <li class="mt-2"><a href="{{ route('apprentice.settings') }}" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>
                         </ul>
                         <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                             @csrf
                             <button type="submit" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-2 w-full">Cerrar sesión</button>
                         </form>
                 </div>
             </div>
        </header>
    <nav class="bg-[#009e00] px-2.5 h-14 py-1.5 flex justify-start items-center relative z-10">
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
                        <a href="{{ route('apprentice.visit') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 1</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('administrator.notificaciones') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 2</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('administrator.notificaciones') }}"class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 3</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full flex justify-center">
            <ul class="horizontal-list flex space-x-4 justify-center" >
                <li>
                    <a href="{{ route('apprentice.home') }}" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="{{ route('apprentice.calendar') }}" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                        Calendario
                    </a>
                </li>
            </ul>
        </div>
        
    </nav>
        {{-- FIN Menu --}}
    {{-- <meta charset="UTF-8">
    <link rel="logo-icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Seguimiento</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet"> --}}

    <style>

         /* header{

            background: none;
            background-color: transparent;
        }
        .head-container{
            position: absolute;
width: 100%;
height: 74px;
left: 0%;
top: 98px;

           background: #04324D;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10px;
            box-sizing: border-box;
        }
 .logo-container h2 {
    position: absolute;
    width: 100%;
    max-width: 333px;
    height: 34px;
    left: 50%;
    top: 39px;
    transform: translateX(-50%);

    font-family: 'DM Sans', sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    line-height: 52px;
    display: flex;
    align-items: center;
    text-align: center;

    color: #009E00;

        }
        .logo-container h1 {
            margin-right: 100px;
            color: #009E00;
        }
        .head-container p{
            background: #FFFFFF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 20px;
    position: absolute;
    width: 307px;
    height: 36px;
    left: 76%;
    font-family: 'DM Sans', sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 36px;
    margin: 0 auto;
        }
        .user{
            position: absolute;
    width: 3rem;
    height: 3rem;
    right: 3%;
    top: 50%;
    transform: translateY(-50%);
    background: url(image.png) no-repeat center / contain;


        }
        .dropdown {
                position: relative;
            display: inline-block;
            left: 97%;
            margin-left: 10px;
            color: #FFFFFF;

        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            right: 0;
    left: auto;

        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a: {
            background-color: #f1f1f1;
        }
        .dropdown .dropbtn {
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;

        }

        .show {
            display: block;
        }
        .notification{
            color:#fff;
            position: absolute;
            width: 42px;
            height: 42px;
           left: 21px;
           margin: 0 10px;


background: url(image);
margin-right: 10px;

        } */
         .calendar-container {
    position: absolute;
    width: 100%;
    height: 38px;
    left: 0%;
    top: 24%;
    background: #D9D9D9;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    
}

.calendar-container h3 {
    position: relative;
    width: 476px;
    height: 26px;
    left: 84px;
    font-family: 'DM Sans', sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 36px;
    display: flex;
    align-items: center;
    color: #000000;
    margin: 0 10px;
}

.back-button {
    background-color: transparent;
    color: #000000;
    font-style: normal;
    position: absolute;
    width: 27px;
    height: 27px;
    left: 40px;
    top: -16px;
    padding: 15px;
    text-align: center;
    font-size: 32px;
    cursor: pointer;
    text-decoration: none;
}

#calendar {
    position: absolute;
    width: 1054px;
    height: 600px;
    left: 10%;
    top: 28%;
    background: #D9D9D9;
    margin: 0 auto;
}

.fc .fc-daygrid-day {
    height: 150px;
    padding: 60px;
}

.fc .fc-col-header-cell {
    font-size: 15px;
}

.fc .fc-daygrid-day-number {
    font-size: 16px;
}

.fc .fc-daygrid-event {
    font-size: 14px;
}

.fc-day-other {
    visibility: hidden;
}


@media (max-width: 1024px) {
    #calendar {
        width: 90%;
        height: auto;
        left: 5%;
    }

    .calendar-container h3 {
        width: 70%;
        font-size: 18px;
    }

    .fc .fc-daygrid-day {
        height: auto;
        padding: 40px;
    }

    .fc .fc-col-header-cell {
        font-size: 14px;
    }

    .fc .fc-daygrid-day-number {
        font-size: 14px;
    }

    .fc .fc-daygrid-event {
        font-size: 12px;
    }
}

@media (max-width: 768px) {
    #calendar {
        width: 95%;
        left: 2.5%;
    }

    .calendar-container h3 {
        width: 80%;
        font-size: 16px;
        left: 10px;
    }

    .back-button {
        left: 10px;
        top: -10px;
        font-size: 28px;
    }

    .fc .fc-daygrid-day {
        padding: 30px;
    }

    .fc .fc-col-header-cell {
        font-size: 13px;
    }

    .fc .fc-daygrid-day-number {
        font-size: 12px;
    }

    .fc .fc-daygrid-event {
        font-size: 11px;
    }
}

@media (max-width: 480px) {
    .calendar-container {
        top: 20%;
        height: auto;
    }

    .calendar-container h3 {
        width: 90%;
        font-size: 14px;
        left: 5px;
    }

    .back-button {
        left: 5px;
        top: -8px;
        font-size: 26px;
    }

    #calendar {
        width: 100%;
        left: 0;
        top: 25%;
        padding: 0 10px;
    }

    .fc .fc-daygrid-day {
        padding: 20px;
    }

    .fc .fc-col-header-cell {
        font-size: 12px;
    }

    .fc .fc-daygrid-day-number {
        font-size: 10px;
    }

    .fc .fc-daygrid-event {
        font-size: 10px;
    }
}
@media (max-width: 1024px) {
    #calendar {
        width: 90%;
        height: auto;
        left: 5%;
    }

    .calendar-container h3 {
        width: 70%;
        font-size: 18px;
    }

    .fc .fc-daygrid-day {
        height: auto;
        padding: 40px;
    }

    .fc .fc-col-header-cell {
        font-size: 14px;
    }

    .fc .fc-daygrid-day-number {
        font-size: 14px;
    }

    .fc .fc-daygrid-event {
        font-size: 12px;
    }
}

@media (max-width: 768px) {
    #calendar {
        width: 95%;
        left: 2.5%;
    }

    .calendar-container h3 {
        width: 80%;
        font-size: 16px;
        left: 10px;
    }

    .back-button {
        left: 10px;
        top: -10px;
        font-size: 28px;
    }

    .fc .fc-daygrid-day {
        padding: 30px;
    }

    .fc .fc-col-header-cell {
        font-size: 13px;
    }

    .fc .fc-daygrid-day-number {
        font-size: 12px;
    }

    .fc .fc-daygrid-event {
        font-size: 11px;
    }
}

@media (max-width: 480px) {
    .calendar-container {
        top: 15%;
        height: auto;
    }

    .calendar-container h3 {
        width: 90%;
        font-size: 14px;
        left: 5px;
    }

    .back-button {
        left: 5px;
        top: -8px;
        font-size: 26px;
    }

    #calendar {
        width: 100%;
        left: 0;
        padding: 0 10px;
    }

    .fc .fc-daygrid-day {
        padding: 20px;
    }

    .fc .fc-col-header-cell {
        font-size: 12px;
    }

    .fc .fc-daygrid-day-number {
        font-size: 10px;
    }

    .fc .fc-daygrid-event {
        font-size: 10px;
    }
}

    </style>
</head>
<body>
    {{-- <header>
        <div class="logo-container">
            <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="logo">
            <h1>Etapa Seguimiento</h1>
            <h2>APRENDIZ</h2>
        </div>
        <div class="flex items-center">
            <h2 class="text-sm m-0 text-[#009e00] mr-5">Centro de Comercio y Servicios</h2>
            <img class="w-[45px] h-[45px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
        </div>
        </header>

    <div class="head-container">
        <img src="{{asset('img/notificaciones.png')}}" alt="notification" class='notification'>
        <p>Nombre de Usuario</p>
        <img src="{{asset('img/user-icon.png')}}" alt="user" class='user'>

        <div class="dropdown">
        <button class="dropbtn"><</button>
        <div class="dropdown-content">
            <a href="name">Astrid Dayana Cantero</a>
            <a href="rol">Aprendiz</a>
            <a href="programa">Programa: Adso</a>
            <a href="ficha">Numero Ficha:2711891</a>
            <br>
            <a href="#option1">Inicio</a>
            <a href="#option2">Calendario</a>
            <br>
            <a href="#option3">Cerrar Sesión</a>
             </div>
        </div>
    </div> --}}
    

    <div class="w-full flex justify-between items-center mt-6">
        <a href="{{ route('apprentice.home') }}" class="ml-4">
            <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
        </a>
    </div>

    
    <div id="calendar"></div>


<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek',
            headerToolbar: {
                left: 'prev',
                center: 'title',
                right: 'dayGridMonth'
            },
            locale: 'es',
            events: [
            ],
            editable: true,
                selectable: true,
                dayMaxEvents: true,
                fixedWeekCount: false
        });
        calendar.render();
    });
</script>


    <script>
        document.querySelector('.dropbtn').addEventListener('click', function() {
          document.querySelector('.dropdown-content').classList.toggle('show');
       });

       // Close the dropdown if the user clicks outside of it
       window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
             for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                   openDropdown.classList.remove('show');
                }
                }
           }
        }
      </script>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          // Evento para el toggle del menú 2
          document.getElementById('toggleMenu2').addEventListener('click', function() {
              console.log('toggleMenu2 clicked'); // Verificar si se activa el evento
              var menu = document.getElementById('menu2');
              menu.classList.toggle('hidden'); // Alternar la clase 'hidden'
          });
    
          // Función para alternar sublistas
          function toggleSublist(event) {
              event.preventDefault(); // Evitar el comportamiento por defecto
              var sublist = event.target.nextElementSibling; // Obtener el siguiente elemento
              if (sublist) {
                  sublist.classList.toggle('hidden'); // Alternar la clase 'hidden' de la sublista
              }
          }
    
          // Registro del evento para todos los enlaces que necesitan alternar un submenu
          document.querySelectorAll('a[onclick="toggleSublist(event)"]').forEach(function(link) {
              link.addEventListener('click', toggleSublist);
          });
      });
      </script>
    
    
    <script src="{{ asset('js/SuperAdmin.js') }}"></script>


</body>
</html>
