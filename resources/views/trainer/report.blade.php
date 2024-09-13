<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Seguimiento</title>
    <style>
        #userMenuTri {
            top: 100%;
            margin-top: 0.5rem;
        }
        /* reporte*/
        .container {
            width: 1500px;
            max-width: 1200px;
            height: 560px; /* Altura fija para alargar el contenedor verticalmente */
            background-color: #e0e0e0;
            border: 3px solid #04324d8b;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-left: -10px; /* lados */
            margin-top: 30px; /* altura */
            font-family: 'DM Sans', sans-serif;
        }
        .email-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid #212121;

        }
        .email-item img {
            width: 50px;
            height: 45px;
            margin-right: 10px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .header-item {
            flex: 1;
            text-align: center;
            font-weight: bold;
            padding: 10px;
            border-bottom: 1px solid #000;
            cursor: pointer;
        }

        .content {
            height: 400px; /* Ajusta esta altura según sea necesario */
            background-color: #d4d4d4;
            margin-bottom: 10px;
            border: 1px solid #ccc;

        }

        .buttons {
            display: flex;
            justify-content: space-between;
            justify-content: flex-end; /* Alinea los botones a la derecha */

        }

        .buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;

        }


        .buttons .confirm {
            background-color: #D9D9D9;
            border: 1px solid #000000; /* Borde de 2px de grosor con color #009E00 */
            margin-right: 10px; /* Espacio a la derecha del botón */
            border-radius: 10px;
        }

        .buttons .actual {
            background-color: #009E00;
            border-radius: 10px;

        }




    </style>
    <script>
        function navigateTo(page) {
            window.location.href = page;
        }
    </script>
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
            <h1 class="text-lg m-0 text-[#009e00] font-bold">INSTRUCTOR</h1>
        </div>
        <img class="w-[45px] h-[45px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
    </header>
    <nav class="bg-[#00324d] px-2.5 py-1.5 flex justify-start items-center relative z-10">
        <button id="notifButton" class="relative">
            <img class="w-[35px] h-auto mr-2.5 filter invert" src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones">
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">5</span> <!-- Ejemplo de contador de notificaciones -->
        </button>
        <div id="notifMenu" class="hidden absolute top-full mt-2 left-0 w-64 bg-white border border-gray-300 rounded-lg shadow-lg z-20">
            <div class="p-4">
                <h2 class="text-sm font-bold">Notificaciones</h2>
                <ul>
                    <li class="mt-2">
                        <a href="#" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 1</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 2</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 3</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="relative ml-auto flex items-center ">
            <div class="bg-white w-72 rounded-full px-8 py-1.5 text-sm text-black mr-2">Nombre Usuario</div>
            <img class="bg-white w-[45px] h-auto rounded-full -ml-8 border-2 border-black" src="{{ asset('img/user-icon.png') }}" alt="User Icon">
            <button id="menuButtonTri" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div id="userMenuTri" class=" hidden absolute right-4  mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">
                <div class="p-4">
                    <div class="flex items-center mb-4">
                        <div>
                            <p class="text-sm font-bold">Nombre Usuario</p>
                            <p class="text-sm mt-2">Instructor</p>
                        </div>

                        <img src="{{ asset('img/user-icon.png') }}" alt="User Icon" class="w-10 h-10 rounded-full mr-3 mx-10 bg-white border-black border-2">
                    </div>
                    <ul>
                        <a href="{{ route('username')}}" class="block text-center text-green-600 font-bold mt-4 bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">ver perfil</a>
                        <li class="mt-2"><a href="{{ route('icon')}}" class="block text-black hover:bg-white p-2 rounded-lg">Inicio</a></li>
                        <li class="mt-2"><a href="#" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>
                        <li class="mt-2"><a href="#" class="block text-black hover:bg-white p-2 rounded-lg">Permisos</a></li>
                        <li class="mt-2"><a href="{{ route('apprentice') }}" class="block text-black hover:bg-white p-2 rounded-lg">lista Aprendices</a></li>
                        <li class="mt-2"><a href="{{ route('report') }}" class="block text-black hover:bg-white p-2 rounded-lg">Reportes</a></li>
                    
                    </ul>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-2 w-full">Cerrar sesión</button>
                    </form>
            </div>
        </div>
    </nav>
    <div class="w-full flex justify-between items-center mt-6">
        <a href="{{ route('icon') }}" class="ml-4">
            <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
        </a>
    </div>
    <div class="w-auto flex justify-start m-2 pl-56 items-center"></div>
    <div class="flex justify-center">

        <main >
            <div class="container">
                <div class="header">
                    <div class="header-item" onclick="showContent('recibidos')">Recibidos</div>
                    <div class="header-item" onclick="showContent('enviados')">Enviados</div>
                </div>
                <div class="content" id="content"></div>
                <div class="buttons">
                    <button type="submit" class="confirm" onclick="window.location.href='{{ route('administrator.home') }}'">CONFIRMAR</button>
                    <button type="button" class="actual">ACTUALIZAR</button>
                </div>
            </div>
            <script>
                function showContent(type) {
                    const contentDiv = document.getElementById('content');
                    contentDiv.innerHTML = ''; // Limpiar contenido actual

                    if (type === 'recibidos') {
                        contentDiv.innerHTML = `
                            <div class="email-item">
                                <a href="/administrator/email/">
                                    <img src="img/user-icon.png" alt="Email Icon">
                                    <span>Email recibido 1</span>
                                </a>
                            </div>
                            <div class="email-item">
                                <a href="/administrator/email/">
                                    <img src="icon-email.png" alt="Email Icon">
                                    <span>Email recibido 2</span>
                                </a>
                            </div>
                            <div class="email-item">
                                <a href="/administrator/email/">
                                    <img src="icon-email.png" alt="Email Icon">
                                    <span>Email recibido 3</span>
                                </a>
                            </div>
                            <div class="email-item">
                                <a href="/administrator/email/">
                                    <img src="icon-email.png" alt="Email Icon">
                                    <span>Email recibido 4</span>
                                </a>
                            </div>
                            <div class="email-item">
                                <a href="/administrator/email/">
                                    <img src="icon-email.png" alt="Email Icon">
                                    <span>Email recibido 5</span>
                                </a>
                            </div>


                        `;
                    } else if (type === 'enviados') {
                        contentDiv.innerHTML = `
                            <div class="email-item">
                                <a href="/administrator/email/">
                                    <img src="icon-email.png" alt="Email Icon">
                                    <span>Email enviado 1</span>
                                </a>
                            </div>
                            <div class="email-item">
                                <a href="/administrator/email/">
                                    <img src="icon-email.png" alt="Email Icon">
                                    <span>Email enviado 2</span>
                                </a>
                            </div>
                            <div class="email-item">
                                <a href="/administrator/email/">
                                    <img src="icon-email.png" alt="Email Icon">
                                    <span>Email enviado 3</span>
                                </a>
                            </div>
                            <div class="email-item">
                                <a href="/administrator/email/">
                                    <img src="icon-email.png" alt="Email Icon">
                                    <span>Email enviado 4</span>
                                </a>
                            </div>
                            <div class="email-item">
                                <a href="/administrator/email/">
                                    <img src="icon-email.png" alt="Email Icon">
                                    <span>Email enviado 5</span>
                                </a>
                            </div>
                        `;
                    }
                }
            </script>
    <script src="{{ asset('js/Trainer.js') }}"></script>

</body>
</html>
