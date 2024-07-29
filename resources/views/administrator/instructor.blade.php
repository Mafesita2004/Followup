<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructores de Seguimiento</title>
    <style>
        /* Inicio Barra azul */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Ubuntu, "Helvetica Neue", Helvetica, Arial, "PingFang SC",
                "Hiragino Sans GB", "Microsoft Yahei UI", "Microsoft Yahei",
                "Source Han Sans CN", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 20px;
            background-color: #04324d;
            color: #ffffff;
            z-index: 1;
            position: relative;
            margin-top: 74px; /* Ajusta la posición del encabezado hacia abajo */
        }

        header h1 {
            color: #009E00;
            margin-top: -110px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .text-1, .text-2 {
            color: #009E00;
            position: absolute;
            left: 5%; /* Posición horizontal en relación al contenedor padre */
            font-family: 'DM Sans', sans-serif; /* Establece el tipo de letra */
            font-size: 12px; /* Tamaño de la letra */
        }

        .text-1 {
            top: -55px; /* Ajustar la posición desde la parte superior */
        }

        .text-2 {
            top: -35px; /* Ajustar la posición desde la parte superior */
        }

        .logo {
            position: absolute;
            top: -65px; 
            left: 20px; 
            width: 50px; 
            height: auto;
        }

        .logo-sena {
            position: absolute;
            top: -55px; 
            right: 20px; 
            width: 50px; 
            height: auto;
        }
        #notifButton {
            position: absolute; /* Cambiado a absoluto para colocarlo en la barra azul */
            top: 10px; /* alto */
            right: 1450px; /* lado */
            background: none;
            border: none;
            cursor: pointer;
            z-index: 1000;
            
        }

        .notifications {
            display: block;
            width: 54px; /* tamaño de la imagen */
            height: auto; /* Mantiene la proporción de la imagen */
            filter: invert(1); /* Invierte los colores de la imagen */
        }
        .text-ventana {
            color: #ffffff; /* Color del texto para que contraste con el fondo */
            font-size: 20px; /* Tamaño del texto para que sea visible */
            position: absolute;
            font-family: 'DM Sans', sans-serif;
            left: 50%; /* Ajusta la posición horizontal según sea necesario */
            transform: translateX(-50%); /* Centra el texto horizontalmente */
            top: 0px; /* Ajusta la posición vertical según sea necesario */
        }

        /* Cierre Barra azul */




        .content h2 {
            font-family: DM Serif Text;
        }
        .header, .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f9fa;
        }
        .header img, .top-bar img {
            height: 50px;
        }
        .header h1 {
            color: #28a745;
            margin: 0;
        }
        .top-bar {
            background-color: #343a40;
            color: white;
        }
        .top-bar input {
            padding: 5px;
            border-radius: 5px;
            border: none;
        }
        .content {
            padding: 20px;
        }
        .search-bar {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        .search-bar input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 50%;
        }
        .search-bar button {
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #ccc;
            margin-left: 5px;
        }
        
        .card {
            display: flex;
            align-items: center;
            padding: 20px;
            margin: 1px 0;
            border-radius: 5px;
            background-color: #f1f1f1;
            font-family: 'DM Sans', sans-serif;
            border: none;
            cursor: pointer;
            width: 100%;
            text-align: left;

        }
        .card img {
            height: 50px;
            width: 50px;
            margin-right: 20px;
            
        }
        .card div {
            display: flex;
            flex-direction: column;
        }
    </style>
    
</head>
<body>
    {{-- Inicio barra azul --}}
    <header>
        
        <h1>ADMINISTRADOR</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            

            <img class="logo" src="{{ asset('img/logo.png') }}" alt="Logo">
            <img class="logo-sena" src="{{ asset('administrator/logo-sena.png') }}" alt="Logo-sena">
            
            <h2 class="text-1">Etapa</h2>
            <h2 class="text-2">Seguimiento</h2>
            <h2 class="text-ventana">Instructor</h2> 
        </form>
        <button id="notifButton">
            <img class="notifications" src="{{ asset('administrator/notificaciones.png') }}" alt="notificaciones">
        </button> 
        
    </header>
        {{-- Termina barra azul --}}
    <div class="content">
        <h2>Instructores de Seguimiento</h2>
        <div class="search-bar">
            <input type="text" placeholder="Programa de formación">
            <button>🔍</button>
        </div>
        <div class="card" href="{{ route('administrator.apprentice')}}">
            <img src="user-icon.png" alt="User-icon">
            <div>
                <strong>Nombre Instructor: Maria Fernanda Calvache</strong>
                <span>Correo electronico: ndhdggs@soy.sena.edu.co</span>
                <span>Programa ADSO</span>
                <span>Numero celular: 3125678954</span>
                <span>Aprendices en seguimiento: 5</span>
            </div>
        </div>
        <div class="card">
            <img src="user-icon.png" alt="User-icon">
            <div>
                <strong>Nombre Aprendiz: Laura Camila Orozco</strong>
                <span>Correo electronico: ndhdggs@soy.sena.edu.co</span>
                <span>Programa Multimedia</span>
                <span>Numero celular: 3125678954</span>
                <span>Aprendices en seguimiento: 5</span>
            </div>
        </div>
        <div class="card">
            <img src="user-icon.png" alt="User-icon">
            <div>
                <strong>Nombre Aprendiz: Jodier</strong>
                <span>Correo electronico: ndhdggs@soy.sena.edu.co</span>
                <span>Programa ADSO</span>
                <span>Numero celular: 3125678954</span>
                <span>Aprendices en seguimiento: 5</span>
            </div>
        </div>
        <div class="card">
            <img src="user-icon.png" alt="User-icon">
            <div>
                <strong>Nombre Aprendiz: Astrid Dayana</strong>
                <span>Correo electronico: ndhdggs@soy.sena.edu.co</span>
                <span>Programa Enfermeria</span>
                <span>Numero celular: 3125678954</span>
                <span>Aprendices en seguimiento: 5</span>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Selecciona todas las tarjetas
            const cards = document.querySelectorAll('.card');
            
            // Agrega el evento de clic a cada tarjeta
            cards.forEach(card => {
                card.addEventListener('click', function() {
                    // Obtén el id del data-id
                    const id = this.getAttribute('data-id');
                    
                    // Redirige a la vista 'perfil-instructor' en la carpeta 'administrator'
                    window.location.href = `/administrator/perfil-instructor/${id}`;
                });
            });
        });
    </script>
</body>
</html>
