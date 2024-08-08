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
    left: 80%;
    font-family: 'DM Sans', sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 36px;
    margin: 0 auto;
        }
        .user{
            position: absolute;
width: 49;
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
        .trainer-container {
            position: absolute;
width: 100%;
height: 156px;
left: 0%;
top: 19%;

background: #D9D9D9;
    font-family: 'DM Sans', sans-serif;
        }
        .trainer-container h2 {
            margin-top: 0;
            font-size: 20px;
        }
        .trainer-container ul {
            list-style-type: none;
            padding: 0;
        }
        .trainer-container li {
            margin-bottom: 10px;
            padding: 5px;
            border-bottom: 1px solid #fff;
        }
        .trainer-container li:last-child {
            border-bottom: none;
        }
        .trainer-container .label {
            font-weight: bold;
        }

        
        .timeline-container h3{
            background: #D9D9D9;
            position: absolute;

           left:0%;
        top: calc(58% - 30px/2 - 78px);


        width: 100%;
        height: 38px;
top: 33.5%;

font-family: 'DM Sans', sans-serif;
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 36px;
display: flex;
align-items: center;

color: #000000;
 
        }
        .timeline{
            position: absolute;
width: 1024px;
height: 471px;
left: 10%;
top: 391px;

background: url(lineatiempo.png);
        }

        .blog-container {
            position: absolute;
            width: 20%;
            height: 419px;
            left: 78%;
            top: 40.5%;
            background: #D9D9D9;
            padding: 20px;
            box-sizing: border-box; 
        }

        .blog-container h4 {
            font-family: 'DM Sans', sans-serif;
            font-style: normal;
            font-weight: 700; 
            font-size: 20px;
            line-height: 31px;
            text-align: center;
            color: #000000;
            margin: 0 auto 20px auto; 
            display: block; 
        }

        .blog {
            width: 262px;
            height: 262px;
            margin: 0 auto; 
            background: url('{{ asset('img/bitacora.png') }}') no-repeat center center;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            
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
            <a href="#option3">Cerrar Sesión</a>
             </div>
        </div>
    </div>

    <div class="trainer-container">
        <h2>Instructor Asignado</h2>
        <ul>
            <li><span class="label">Nombre:</span> Mariany Dorado</li>
            <li><span class="label">Correo:</span> edusena10@gmail.com</li>
            <li><span class="label">Teléfono:</span> 322 5467867</li>
        </ul>
    </div>

    <div class="timeline-container">
        <h3>LINEA TEMPORAL (Etapa de seguimiento)</h3>
        <img src="{{asset('img/lineatiempo.png')}}" alt="timeline" class='timeline'>
    </div>
    <div class="blog-container">
        <h4>BITACORAS</h4>
        <img src="{{asset('img/bitacora.png')}}" alt="blog" class='blog'>

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