<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Etapa Productiva</title>
    <style>
       #userMenu {
            top: 100%;
            margin-top: 0.5rem;
        }

    </style>
</head>
{{-- Barra Azul --}}
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
                      <a href="{{ route('administrator.home') }}" class="flex items-center">
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
                                   <p class="text-sm mt-2">Administrador</p>
                               </div>


                           </div>
                           <ul>
                               <li class="mt-2"><a href="{{ route('administrator.Administrator-perfil') }}" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">Ver perfil</a></li>

                               <li class="mt-2"><a href="{{ route('administrator.settings') }}" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>


                               <li class="mt-2"><a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg" onclick="toggleSublist(event)">Plantillas</a>
                                   <ul class="hidden ml-4 mt-2 bg-[#EEEEEE] p-2 rounded-lg">
                                       <li class="mt-2 font-bold text-black border-b border-gray-300 pb-2">MODALIDAD</li>
                                       <li class="mt-2"><a href="{{ route('administrator.template')}}"class="block text-black hover:bg-white p-2 rounded-lg">Pasantía</a></li>
                                       <li>
                                          <a href="javascript:void(0)" class="block text-black hover:bg-white p-2 rounded-lg" id="contratoAprendizaje">Contrato de Aprendizaje</a>
                                          <ul id="sublistContrato" class="ml-4 mt-2 bg-[#D9D9D9] p-2 rounded-lg w-[250px] hidden">
                                              <li class="mt-2">
                                                  <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">Ver Plantilla</a>
                                              </li>
                                              <li class="mt-2">
                                                  <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">+ Añadir Plantilla</a>
                                              </li>
                                          </ul>
                                      </li>
                                       <li class="mt-2"><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Vinculo Laboral</a></li>
                                       <li><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Unidad Productiva Familiar</a></li>
                                       <li><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Proyecto Productivo Empresarial</a></li>
                                   </ul></li>
                               <li class="mt-2"><a href="{{ route('administrator.graphic')}}" class="block text-black hover:bg-white p-2 rounded-lg">Graficas</a></li>
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
                          <a href="{{ route('administrator.notificaciones') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 1</a>
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
                      <a href="{{ route('administrator.home') }}" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                          Inicio
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('administrator.apprentice') }}" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                          Aprendices
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('administrator.instructor') }}" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                          Instructores
                      </a>
                  </li>


              </ul>
          </div>




      </nav>
        {{-- FIN Menu --}}


            <div class="w-full flex justify-between items-center mb-2">
                <a href="{{ route('administrator.home') }}" class="ml-4">
                    <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
                    <h2 class="text-xl font-serif">Aprendices que inician etapa productiva</h2>
                </a>



            <form action="#" method="GET" class="flex items-center">
                <input type="text" name="q" placeholder="Buscar..." class="px-2 py-1 text-sm border border-black rounded-full w-96">
                <button type="submit" aria-label="Buscar" class="p-2 bg-transparent border-none cursor-pointer -ml-10">
                    <img src="{{ asset('img/lupa.png') }}" alt="Buscar" class="w-4 h-auto">
                </button>
            </form>

            <form action="#" method="GET" class="mr-25 -ml-10">
                <a href="{{ route('administrator.Agregar-aprendiz') }}" type="button" class="bg-white border-none p-2 cursor-pointer">
                    <img src="{{ asset('img/mas.png') }}" alt="Agregar" class="w-5 h-auto">
                </a>
            </form>

            <a href="#" class="-ml-96">
                <img src="{{ asset('img/Descarga.webp') }}" alt="descarga" class="w-8 mr-12 h-auto">
            </a>
        </div>


    <main class="p-5">



        <div class="flex flex-col gap-2">
            <div class="apprentice flex items-center p-5 mb-1 bg-gray-100 rounded-lg cursor-pointer" data-href="{{ route('administrator.Apprentice-perfil', ['id' => 1]) }}">
                <img src="user-icon.png" alt="User-icon" class="w-12 h-12 mr-5">
                <div class="flex flex-col">
                    <p><strong>Nombre Aprendiz:</strong> Maria Fernanda Calvache</p>
                    <p><strong>Número de ficha:</strong> 2711891</p>
                    <p><strong>Programa de formación:</strong> Análisis y desarrollo de software</p>
                    <p><strong>Tipo de contrato:</strong> Pasantía</p>
                    <p><strong>Empresa:</strong> MOP</p>
                </div>
            </div>
            <div class="apprentice flex items-center p-5 mb-1 bg-gray-100 rounded-lg cursor-pointer" data-href="{{ route('administrator.Apprentice-perfil', ['id' => 2]) }}">
                <img src="user-icon.png" alt="User-icon" class="w-12 h-12 mr-5">
                <div class="flex flex-col">
                    <p><strong>Nombre Aprendiz:</strong> Laura Camila Orozco</p>
                    <p><strong>Número de ficha:</strong> 2721581</p>
                    <p><strong>Programa de formación:</strong> Análisis y desarrollo de software</p>
                    <p><strong>Tipo de contrato:</strong> Contrato Laboral</p>
                    <p><strong>Empresa:</strong> MNN</p>
                </div>
            </div>
            <div class="apprentice flex items-center p-5 mb-1 bg-gray-100 rounded-lg cursor-pointer" data-href="{{ route('administrator.Apprentice-perfil', ['id' => 3]) }}">
                <img src="user-icon.png" alt="User-icon" class="w-12 h-12 mr-5">
                <div class="flex flex-col">
                    <p><strong>Nombre Aprendiz:</strong> Jodier</p>
                    <p><strong>Número de ficha:</strong> 2549637</p>
                    <p><strong>Programa de formación:</strong> Análisis y desarrollo de software</p>
                    <p><strong>Tipo de contrato:</strong> Pasantía</p>
                    <p><strong>Empresa:</strong> JHU</p>
                </div>
            </div>
            <div class="apprentice flex items-center p-5 mb-1 bg-gray-100 rounded-lg cursor-pointer" data-href="{{ route('administrator.Apprentice-perfil', ['id' => 4]) }}">
                <img src="user-icon.png" alt="User-icon" class="w-12 h-12 mr-5">
                <div class="flex flex-col">
                    <p><strong>Nombre Aprendiz:</strong> Astrid Dayana</p>
                    <p><strong>Número de ficha:</strong> 3568741</p>
                    <p><strong>Programa de formación:</strong> Análisis y desarrollo de software</p>
                    <p><strong>Tipo de contrato:</strong> Contrato Laboral</p>
                    <p><strong>Empresa:</strong> OPK</p>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Selecciona todas las tarjetas
            const cards = document.querySelectorAll('.apprentice');

            // Agrega el evento de clic a cada tarjeta
            cards.forEach(card => {
                card.addEventListener('click', function() {
                    // Obtén el enlace del data-href
                    const href = this.getAttribute('data-href');

                    // Redirige a la URL especificada en data-href
                    window.location.href = href;
                });
            });
        });
    </script>



    <script src="{{ asset('js/SuperAdmin.js') }}"></script>
</body>
</html>

