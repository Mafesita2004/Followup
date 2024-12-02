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
                      class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                     Administrador

                      </a>
                  </li>
                  <li>
                      <a href="{{ route('superadmin.SuperAdmin-Instructor') }}" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                          Instructor
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('superadmin.SuperAdmin-Aprendiz') }}" class="block text-center text-white px-4 py-2 rounded-lg {{ request()->routeIs('superadmin.SuperAdmin-Aprendiz') ? 'bg-green-600 bg-opacity-70' : 'bg-green-600 bg-opacity-20 hover:bg-opacity-50' }}">
                          <span class="font-bold">
                            Aprendices
                          </span>
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
        <a href="{{route('superadmin.SuperAdmin-Aprendiz') }}" class="ml-4">
            <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
        </a>

        <a href="#" class="ml-4">
            <img src="{{ asset('img/Descarga.webp') }}" alt="descarga" class="w-8 mr-12 h-auto">
        </a>
    </div>
    <div class="flex justify-center">
        <main class="flex flex-col items-center mt-4 relative">
            <div class="w-full max-w-7xl mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <form id="formularioAprendiz" method="POST" action="{{ route('superadmin.SuperAdmin-AprendizGuardar') }}">
                    @csrf

                    <div>
                        <label for="cedula">Identificación (Cédula)</label>
                        <input type="text" id="cedula" name="cedula" required placeholder="Número de cédula">
                        <div id="errorCedula" class="error"></div>
                    </div>

                    <div>
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" required placeholder="Apellido del aprendiz">
                        <div id="errorApellido" class="error"></div>
                    </div>

                    <div>
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required placeholder="Nombre completo">
                        <div id="errorNombre" class="error"></div>
                    </div>

                    <div>
                        <label for="programa">Programa</label>
                        <input type="text" id="programa" name="programa" required placeholder="Nombre del programa">
                        <div id="errorPrograma" class="error"></div>
                    </div>

                    <div>
                        <label for="nivel_academico">Nivel Académico</label>
                        <input type="text" id="nivel_academico" name="nivel_academico" required placeholder="Nivel académico">
                        <div id="errorNivelAcademico" class="error"></div>
                    </div>

                    <div>
                        <label for="ficha">Ficha</label>
                        <input type="text" id="ficha" name="ficha" required placeholder="Número de ficha">
                        <div id="errorFicha" class="error"></div>
                    </div>

                    <div>
                        <label for="telefono">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" required placeholder="Teléfono del aprendiz">
                        <div id="errorTelefono" class="error"></div>
                    </div>

                    <div>
                        <label for="correo">Correo</label>
                        <input type="email" id="correo" name="correo" required placeholder="Correo electrónico">
                        <div id="errorCorreo" class="error"></div>
                    </div>

                    <div>
                        <label for="tipo_contrato">Tipo de Contrato</label>
                        <input type="text" id="tipo_contrato" name="tipo_contrato" required placeholder="Tipo de contrato">
                        <div id="errorTipoContrato" class="error"></div>
                    </div>

                    <div>
                        <label for="inicio_contrato">Inicio Contrato</label>
                        <input type="date" id="inicio_contrato" name="inicio_contrato" required>
                        <div id="errorInicioContrato" class="error"></div>
                    </div>

                    <div>
                        <label for="fin_contrato">Fin Contrato</label>
                        <input type="date" id="fin_contrato" name="fin_contrato" required>
                        <div id="errorFinContrato" class="error"></div>
                    </div>

                    <div>
                        <label for="nit_empresa">NIT Empresa</label>
                        <input type="text" id="nit_empresa" name="nit_empresa" required placeholder="NIT de la empresa">
                        <div id="errorNitEmpresa" class="error"></div>
                    </div>

                    <div>
                        <label for="razon_social">Razón Social</label>
                        <input type="text" id="razon_social" name="razon_social" required placeholder="Razón social de la empresa">
                        <div id="errorRazonSocial" class="error"></div>
                    </div>

                    <div>
                        <label for="direccion">Dirección</label>
                        <input type="text" id="direccion" name="direccion" required placeholder="Dirección de la empresa">
                        <div id="errorDireccion" class="error"></div>
                    </div>

                    <div>
                        <label for="telefono_empresa">Teléfono Empresa</label>
                        <input type="text" id="telefono_empresa" name="telefono_empresa" required placeholder="Teléfono de la empresa">
                        <div id="errorTelefonoEmpresa" class="error"></div>
                    </div>

                    <div>
                        <label for="nombre_instructor">Nombre Instructor</label>
                        <input type="text" id="nombre_instructor" name="nombre_instructor" required placeholder="Nombre del instructor">
                        <div id="errorNombreInstructor" class="error"></div>
                    </div>

                    <div>
                        <label for="correo_instructor">Correo Instructor</label>
                        <input type="email" id="correo_instructor" name="correo_instructor" required placeholder="Correo del instructor">
                        <div id="errorCorreoInstructor" class="error"></div>
                    </div>

                    <div class="mt-4">
                        <button type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script src="{{ asset('js/SuperAdmin.js') }}"></script>
    <script src="{{ asset('js/AgregarAprendis.js') }}"></script>
</body>

</html>
