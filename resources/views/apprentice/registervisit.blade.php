<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="logo-icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Seguimiento</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet">
    <style>
      header{
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

        }
        .calendar-container {
    position: absolute;
    width: 100%;
    height: 38px;
    left: 0%;
    top: 24.5%;
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
    font-size: 20px;
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
    left: 15%;
    top: 30.5%;
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

/* Responsive Design */
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

.background {
    position: absolute;
            background: #FFFEFE;
            border: 1px solid rgba(0, 0, 0, 0.53);
            border-radius: 3px;
            margin: 20px auto;
            max-width: 792px;
            text-align: left;
            width: 100%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-sizing:border-box;
    display: flex;
    flex-direction: column; 
    align-items: flex-start; 
    justify-content: flex-start;
    

        }
        .background p {
            
            position: relative;
            top: 5%;
            left: 24.5%;
            font-size: 20px;
        }

        .register-container {
            background: #04324D;
            color: white;
            border-radius: 3px;
            text-align: center;
            margin-bottom: 20px;
            height: 59px;
            width: 100%;
            display: flex;
    align-items: center; 
    justify-content:center;
        }
        .register-container h2 {
            margin: 0; 
    font-family: 'DM Sans', sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    color: #FFFFFF;
        }
        .checkbox-option {
            display: flex;
    align-items: center;
    justify-content: flex-start;
    margin-bottom: 2%;
    margin-left: 20px; 
}

.checkbox-option input[type="checkbox"] {
    margin-right: 10px;
}

.checkbox-option label {
    font-size: 20px;
}
        
        .line {
  width: 72%;
  height: 1px; 
  background-color: #000; 
  position: absolute;
  top: 60%; 
        }
        @media screen and (max-width: 768px) {
    .background {
        width: 95%;
    }

    .background p {
        margin-left: 5%;
        font-size: 1rem;
    }

    .register-container h2 {
        font-size: 1rem;
    }

    .checkbox-option label {
        font-size: 1rem;
    }

    .line {
        width: 90%;
    }
}

@media screen and (max-width: 480px) {
    .background p {
        margin-left: 0;
    }

    .checkbox-option {
        margin-left: 10px;
    }
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

    <div class="background">
        <div class="register-container">
            <h2>Visita N1</h2>
        </div>
            <form>
                <p>Fecha: 01/04/2024 </p>
                <p>Hora: 08:30am.</p>
                <div class="line"></div>
                <div class="checkbox-option">
                    <input type="checkbox" id="realizado" name="realizado">
                    <label for="realizado">Realizado</label>
                </div>
                <div class="checkbox-option">
                    <input type="checkbox" id="no-realizado" name="no-realizado">
                    <label for="no-realizado">No Realizado</label>
                </div>
            </form>
       
    </div>
   
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
</body>
</html>