<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="logo-icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Seguimiento</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet">
    <style>
         header{
            background: none; /* Quita cualquier fondo */
            background-color: transparent;
        }
        .head-container{
            position: absolute;
width: 1511px;
height: 74px;
left: -1px;
top: 98px;

background: #04324D;
display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo-container h2 {
            position: absolute;
            width: 333px;
            height: 34px;
            left: 589px;
            top: 39px;

            font-family: 'DM Sans';
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
            margin-right: 100px; /* Ajusta el espacio entre "Etapa Seguimiento" y el h1 */
            color: #009E00;
        }
        .head-container p{
            /* Nombre de usuario */
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
            position: absolute;
            position: absolute;
            width: 367px;
            height: 45px;
            left: 1082px;
            
            
          width: 307px;
         height: 36px;
         left: 1126px;

font-family: 'DM Sans';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 36px;
margin: 0 10px;


        }
        .user{
            position: absolute;
width: 49px;
height: 49px;
left: 1391px;

background: url(image.png);

         
        }
        .dropdown {
                position: relative;
            display: inline-block;
            left: 1440px;
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
            left: -163px;
            
            
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

        }
        .calendar-container{
            position: absolute;
            width: 1470px;
            height: 38px;
left: calc(50% - 1470px/2 + 0.5px);
top: calc(58% - 58px/2 - 201px);

background: #D9D9D9;
display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        .calendar-container {
            flex: 1; /* Take the remaining space */
        }
        .calendar-container h3{
            position: relative;
width: 476px;
height: 26px;
left: 84px;

font-family: 'DM Sans', sans-serif;
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 36px;
display: flex;
align-items: center;

color: #000000;
margin: 0 10px;
        }
        .back-button{
            background-color: transparent;
            color: #000000;
            font-style:normal;
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
width: 1470px;
height: 649px;
left: calc(50% - 1470px/2 + 0.5px);
top: calc(52% - 649px/2 + 175.5px);

background: #D9D9D9;

position: absolute;
width: 1054px;
height: 600px;
left: 193px;/* Make the calendar take the full width of the container */
            margin: 0 auto; /* Center the calendar */
        }

        .fc .fc-daygrid-day {
            height: 150px;
            padding: 60px; /* Adjust the height of each day cell */
        }

        .fc .fc-col-header-cell {
            font-size: 15px; /* Adjust the font size of the day names */
        }

        .fc .fc-daygrid-day-number {
            font-size: 16px; /* Adjust the font size of the day numbers */
        }

        .fc .fc-daygrid-event {
            font-size: 14px; /* Adjust the font size of the events */
        
        }
        .fc-day-other {
            visibility: hidden;
        }
        
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="logo">
            <h1>Etapa Seguimiento</h1>
            <h2>APRENDIZ</h2>
        </div>
        <img src="{{ asset('img/logo-sena.png') }}" alt="SENA Logo" class="logo-sena">
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
    </div>
    <div class="calendar-container">
        <h3>Calendario (Agenda)</h3>
        <a href="{{ route('apprentice.index') }}" class="back-button">&#60; </a>

    </div>
    <div id="calendar"></div>

   
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek', // Similar to Google Calendar's week view
            headerToolbar: {
                left: 'prev',
                center: 'title',
                right: 'dayGridMonth'
            },
            locale: 'es', // Spanish language
            events: [
            ],
            editable: true, // Allow events to be draggable and resizable
                selectable: true, // Allow date selection
                dayMaxEvents: true, // Allow "more" link when too many events
                fixedWeekCount: false 
        });
        calendar.render();
    });
</script>


    <script>  // Optional JavaScript for additional functionality
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
       
    
</body>
</html>