<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        main {
            padding: 20px;
        }

        h2 {
            color: #333;
            font-family: DM Serif Text;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .search-bar input {
            padding: 10px;
            width: 80%;
            max-width: 400px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
        }

        .search-bar button {
            background: none;
            border: none;
            padding: 10px;
            border-left: 1px solid #ccc;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .search-bar button img {
            height: 20px;
        }

        

        .apprentice {
            display: flex;
            align-items: center;
            padding: 0px;
            margin: 1px 0;
            border-radius: 5px;
            background-color: #f1f1f1;
            font-family: 'DM Sans', sans-serif;
            border: none;
            cursor: pointer;
            width: 100%;
            text-align: left;
        }

        .apprentice img {
            height: 50px;
            width: 50px;
            margin-right: 20px;
        }

        .apprentice div {
            display: ;
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
            <h2 class="text-ventana">Aprendices</h2> 
        </form>
        <button id="notifButton">
            <img class="notifications" src="{{ asset('administrator/notificaciones.png') }}" alt="notificaciones">
        </button> 
        
    </header>
        {{-- Termina barra azul --}}
    
    
    <main>
        <h2>Aprendices que inician etapa productiva</h2>
        <div class="search-bar">
            <input type="text" placeholder="Número de Ficha">
            <button>
                <button>🔍</button>
            </button>
        </div>
        <div class="apprentice">
                <img src="user-icon.png" alt="User-icon">
                <div>
                    <p><strong>Nombre Aprendiz:</strong> Maria Fernanda Calvache</p>
                    <p><strong>Número de ficha:</strong> 2711891</p>
                    <p><strong>Programa de formación:</strong> Análisis y desarrollo de software</p>
                    <p><strong>Tipo de contrato:</strong> Pasantía</p>
                    <p><strong>Empresa:</strong> MOP</p>
                </div>
            </div>

            <div class="apprentice">
                <img src="user-icon.png" alt="User-icon">
                <div>
                    <p><strong>Nombre Aprendiz:</strong> Laura Camila Orozco</p>
                    <p><strong>Número de ficha:</strong> 2721581</p>
                    <p><strong>Programa de formación:</strong> Análisis y desarrollo de software</p>
                    <p><strong>Tipo de contrato:</strong> Contrato Laboral</p>
                    <p><strong>Empresa:</strong> MNN</p>
                </div>
            </div>
            <div class="apprentice">
                <img src="user-icon.png" alt="User-icon">
                <div>
                    <p><strong>Nombre Aprendiz:</strong> Jodier</p>
                    <p><strong>Número de ficha:</strong> 2549637</p>
                    <p><strong>Programa de formación:</strong> Análisis y desarrollo de software</p>
                    <p><strong>Tipo de contrato:</strong> Pasantía</p>
                    <p><strong>Empresa:</strong> JHU</p>
                </div>
            </div>
            <div class="apprentice">
                <img src="user-icon.png" alt="User-icon">
                <div>
                    <p><strong>Nombre Aprendiz:</strong> Astrid Dayana</p>
                    <p><strong>Número de ficha:</strong> 3568741</p>
                    <p><strong>Programa de formación:</strong> Análisis y desarrollo de software</p>
                    <p><strong>Tipo de contrato:</strong> Contrato Laboral</p>
                    <p><strong>Empresa:</strong> OPK</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

