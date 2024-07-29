<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="logo-icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Seguimiento</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
        }
        .logo-container h2 {
            position: absolute;
            width: 34%;
            height: 34px;
            left: 40%;
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
            margin-right: 100px; 
            color: #009E00;
        }
        .head-container p{
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
            position: absolute;
            position: absolute;
            width: 367px;
            height: 45px;
            left: 80%;
            
            
          width: 307px;
         height: 36px;
         left: 80%;

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
left: 94%;

background: url(image.png);

         
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
        .notification-container{
            position: absolute;
            width: 100%;
            height: 38px;
            left: 0%;
            top: 19%;

background: #D9D9D9;
display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        .notification-container {
            flex: 1; 
        }
        .notification-container h3{
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
        .trainer-container{
            
position: absolute;
width: 1286px;
height: 38px;
left: 5.8%;
top: 23.5%;
display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 2px;

background: #D9D9D9;
        }
        .trainer-container h4{
            text-align: left;

font-family:'DM Sans', sans-serif;
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 31px;
display: flex;
align-items: center;


color: #000000;
        }
        .trainer-container p{
            text-align: right;

font-family: 'DM Sans', sans-serif;
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 31px;
display: inline-flex;
align-items: center;
justify-content: right;
margin: 0 10px;

color: #000000;
        }
        .visit-container{
            box-sizing: border-box;
            display: flex;
    flex-direction: column;
    justify-content: space-between;
position: absolute;
width: 792px;
height: 334px;
left: 110px;
top: 29%;
background: #FFFEFE;
border: 1px solid rgba(0, 0, 0, 0.53);
border-radius: 3px;
        }

       .name {
    box-sizing: border-box;
    text-align: center;
    margin-bottom: 10px;
    width: 792px;
    height: 59px;
    background: #04324D;
    display: flex;
    align-items: center; 
    justify-content:center;
    padding-right: 7px; 
}

.name h5 {
    margin: 0; 
    font-family: 'DM Sans', sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    color: #FFFFFF;
}
        .visit-container p{
            position: relative;
    width: 373px;
    height: auto; 
    left: 12px;
    top: -5%;
    font-family: 'DM Sans';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    color: #000000;
}
        .line {
  width: 666px;
  height: 1px; 
  background-color: #000; 
  position: absolute;
  top: 60%; 
}
.buttons {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    padding: 40px;
    
}
a {
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    color: black;
    text-align: center;
}

a.reject {
    background-color:#D9D9D9;
    font-family: 'DM Sans', sans-serif;
font-style: normal;
font-size: 20px;
display: flex;
align-items: center;
text-align: center;
border-radius: 20px;
color: #000000;

border: 1px solid #000000;
}

a.accept {
    background-color: #009E00; 
    font-family: 'DM Sans', sans-serif;
font-style: normal;
font-size: 20px;
display: flex;
align-items: center;
text-align: center;
border-radius: 20px;

color: #000000;

border: 1px solid #000000;
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
            <a href="{{ route('apprentice.calendar') }}">Calendario</a>
            <br>
            <a href="option">Cerrar Sesión</a>
             </div>
        </div>
    </div>
    <div class="notification-container">
        <h3>Notificaciones</h3>
        <a href="{{ route('apprentice.index') }}" class="back-button">&#60; </a>

    </div>
    <div class="trainer-container">
        <h4>Instructor</h4>
        <p>08:39am. 30 mar</p>
    </div>
    <div class="visit-container">
        <div class="name">
            <h5>¡Mariani Dorado ha solicitado programar una visita!</h5>
        </div>
        <p>Fecha: 01/04/2024 </p>
        <p>Hora: 08:30am.</p>

        <div class="line"></div>

        <div class="buttons">
            <a href="{{ route('apprentice.index') }}" class="reject">Rechazar</a>
            <a href="{{ route('apprentice.calendar') }}" class="accept">Aceptar</a>
        </div>
    </div>

    <script> 
        document.querySelector('.dropbtn').addEventListener('click', function() {
          document.querySelector('.dropdown-content').classList.toggle('show');
       });
               
       
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