<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
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
                    <a href="{{ route('superadmin.home') }}" class="flex items-center">
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
                    <img class="bg-white w-[45px] h-auto rounded-full border-2 " src="{{ asset('img/administrador/mujer.png') }}" alt="User Icon">

                    <!-- Botón de los tres puntos encima de la imagen -->
                    <button id="menuButton" class="absolute top-1 right-0 bg-transparent p-1 mr-[-46%]">
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
                                 <p class="text-sm mt-2">Super Administrador</p>
                             </div>


                         </div>
                         <ul>
                             <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Perfil') }}" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">Ver perfil</a></li>

                             <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Configuracion') }}" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>
                             <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Permisos') }}" class="block text-black hover:bg-white p-2 rounded-lg" onclick="toggleSublist(event)">Permisos</a></li>
                             <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Graficas')}}" class="block text-black hover:bg-white p-2 rounded-lg">Graficas</a></li>
                         </ul>
                         <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                             @csrf
                             <button type="submit" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-2 w-full">Cerrar sesión</button>
                         </form>
                 </div>
             </div>
        </header>
    <nav class="bg-[#009e00] px-2.5 h-14 py-1.5 flex justify-end items-center relative z-10">

    {{-- FIN Barra Azul --}}

        <div class="w-full flex justify-center">
            <ul class="horizontal-list flex space-x-4 justify-center items-center" >
                <li>
                    <a href="{{ route('superadmin.home') }}" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="{{ route('superadmin.SuperAdmin-Administrator') }}"
                       class="block text-center text-white px-4 py-2 rounded-lg {{ request()->routeIs('superadmin.SuperAdmin-Administrator') ? 'bg-green-600 bg-opacity-70' : 'bg-green-600 bg-opacity-20 hover:bg-opacity-50' }}">
                        <span class="font-bold">
                           Administradores
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('superadmin.SuperAdmin-Instructor') }}" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                       Instructores
                    </a>
                </li>
                <li>
                    <a href="{{ route('superadmin.SuperAdmin-Aprendiz') }}" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                        Aprendices
                    </a>
                </li>
                <li>
                    <a href="{{ route('superadmin.SuperAdmin-Graficas') }}" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                       Graficas
                    </a>
                </li>

                <button id="notifButton" class="absolute right-0 mr-4">
                    <a href="{{ route('superadmin.SuperAdmin-Notificaciones') }}">
                        <img class="w-[50px] h-auto filter invert" src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones">
                    </a>
                </button>

            </ul>
        </div>

    </nav>

    <div class="w-full flex justify-between items-center mt-6">
        <a href="{{ route('superadmin.SuperAdmin-Administrator') }}" class="ml-4">
            <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
        </a>
    </div>
    <div class="flex justify-center mt-6">
        <main class="bg-gray-100  m-2 p-2 rounded-lg shadow-[0_0_10px_rgba(0,0,0,0.8)] border-[#2F3E4C] w-2/3">
            <div class="bg-gray-100 p-6 rounded-lg">
                <div class="text-center mb-6">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('img/administrador/administrador.png') }}" alt="User" class="w-40 h-40 mb-">
                    </div>
                    <h1 class="text-lg m-0 text-black font-bold">ADMINISTRADOR</h1>
                    </div>
                    <h3 class="font-bold mb-4">Datos básicos</h3>
                    <div class="space-y-4">
                      <!-- Campo Nombres -->
                      <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nombres:</label>
                        <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-md">
                        <div id="nameError" class="text-red-600 text-sm mt-1" style="display: none;">Este campo es obligatorio.</div>
                      </div>

                      <!-- Campo Apellidos -->
                      <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700">Apellidos:</label>
                        <input type="text" id="last_name" name="last_name" class="w-full p-2 border border-gray-300 rounded-md">
                        <div id="lastNameError" class="text-red-600 text-sm mt-1" style="display: none;">Este campo es obligatorio.</div>
                      </div>

                      <!-- Campo Correo Electrónico -->
                      <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico:</label>
                        <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md">
                        <div id="emailError" class="text-red-600 text-sm mt-1" style="display: none;">Por favor, ingrese un correo electrónico válido.</div>
                      </div>

                      <!-- Campo Departamento -->
                      <div>
                        <label for="department" class="block text-sm font-medium text-gray-700">Departamento:</label>
                        <input type="text" id="department" name="department" class="w-full p-2 border border-gray-300 rounded-md">
                        <div id="departmentError" class="text-red-600 text-sm mt-1" style="display: none;">Este campo es obligatorio.</div>
                      </div>

                      <!-- Campo Municipio -->
                      <div>
                        <label for="municipality" class="block text-sm font-medium text-gray-700">Municipio:</label>
                        <input type="text" id="municipality" name="municipality" class="w-full p-2 border border-gray-300 rounded-md">
                        <div id="municipalityError" class="text-red-600 text-sm mt-1" style="display: none;">Este campo es obligatorio.</div>
                      </div>
                    </div>

                    <!-- Botones de Confirmar y Cancelar -->
                    <div class="flex justify-end mt-6 space-x-4">
                      <button type="button" id="submitForm" class="bg-green-700 text-white py-2 px-4 rounded">Confirmar</button>
                      <a href="{{ route('superadmin.SuperAdmin-Administrator') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded">Cancelar</a>
                    </div>
                  </div>
                </main>
              </div>

              <script>
                // Función de validación del formulario
                function validateForm() {
                    let isValid = true;
                    let fields = [
                        { id: 'name', errorId: 'nameError' },
                        { id: 'last_name', errorId: 'lastNameError' },
                        { id: 'email', errorId: 'emailError', type: 'email' },
                        { id: 'department', errorId: 'departmentError' },
                        { id: 'municipality', errorId: 'municipalityError' }
                    ];

                    // Validar los campos
                    fields.forEach(field => {
                        let value = document.getElementById(field.id).value.trim();
                        let errorElement = document.getElementById(field.errorId);

                        if (value === '') {
                            errorElement.style.display = 'block';
                            isValid = false;
                        } else {
                            errorElement.style.display = 'none';
                        }

                        if (field.type === 'email' && value !== '') {
                            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                            if (!emailRegex.test(value)) {
                                errorElement.style.display = 'block';
                                errorElement.innerHTML = 'Por favor, ingrese un correo electrónico válido.';
                                isValid = false;
                            } else {
                                errorElement.style.display = 'none';
                            }
                        }
                    });

                    return isValid;
                }

                document.getElementById('submitForm').addEventListener('click', function(event) {
                    if (!validateForm()) {
                        event.preventDefault();
                    }
                });
              </script>
    <script src="{{ asset('js/SuperAdmin.js') }}"></script>
    <script src="{{ asset('js/SuperAdmin/AdministradorPerfil.js') }}"></script>

</body>

</html>
