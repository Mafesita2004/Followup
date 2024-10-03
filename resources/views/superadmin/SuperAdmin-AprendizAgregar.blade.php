<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Seguimiento</title>
    <style>
        #userMenu {
            top: 100%;
            margin-top: 0.5rem;
        }
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
            <h1 class="text-lg m-0 text-[#009e00] font-bold">SUPER</h1>
            <h1 class="text-lg m-0 text-[#009e00] font-bold">ADMINISTRADOR</h1>
        </div>
        <img class="w-[45px] h-[45px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
    </header>
    <nav class="bg-[#00324d] px-2.5 py-1.5 flex justify-start items-center relative z-10">
        <button id="notifButton" class="relative">
            <img class="w-[35px] h-auto mr-2.5 filter invert" src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones">
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">5</span>
        </button>
        <div id="notifMenu" class="hidden absolute top-full mt-2 left-0 w-64 bg-white border border-gray-300 rounded-lg shadow-lg z-20">
            <div class="p-4">
                <h2 class="text-sm font-bold">Notificaciones</h2>
                <ul>
                    <li class="mt-2">
                        <a href="{{ route('superadmin.SuperAdmin-Notificaciones')}}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 1</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('superadmin.SuperAdmin-Notificaciones')}}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 2</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('superadmin.SuperAdmin-Notificaciones')}}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 3</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('superadmin.SuperAdmin-Notificaciones')}}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 4</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('superadmin.SuperAdmin-Notificaciones')}}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 5</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Agregar Aprendiz</div>
        <div class="relative ml-auto flex items-center ">
            <div class="bg-white w-72 rounded-full px-8 py-1.5 text-sm text-black mr-2">{{ auth()->user()->name }}{{ auth()->user()->last_name }}</div>
            <img class="bg-white w-[45px] h-auto rounded-full -ml-8 border-[3px] border-[#00324d]" src="{{ asset('img/user-icon.png') }}" alt="User Icon">
            <button id="menuButton" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div id="userMenu" class=" hidden absolute right-4  mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">
                <div class="p-4">
                    <div class="flex items-center mb-4">
                        <div>

                            <p class="text-sm font-bold">{{ auth()->user()->name }}{{ auth()->user()->last_name }}</p>
                            <p class="text-sm mt-2">Super administrador</p>
                        </div>

                        <img src="{{ asset('img/user-icon.png') }}" alt="User Icon" class="w-10 h-10 rounded-full mr-3 mx-10 bg-white border-black border-2">
                    </div>
                    <ul>
                        <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Perfil') }}" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">Ver perfil</a></li>
                        <li class="mt-2"><a href="{{ route('superadmin.home') }}" class="block text-black hover:bg-white p-2 rounded-lg">Inicio</a></li>
                        <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Configuracion') }}" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>
                        <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Permisos') }}" class="block text-black hover:bg-white p-2 rounded-lg">Permisos</a></li>
                        <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Administrator') }}" class="block text-black hover:bg-white p-2 rounded-lg">Administradores</a></li>
                        <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Instructor') }}" class="block text-black hover:bg-white p-2 rounded-lg">Instructores</a></li>
                        <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Aprendiz') }}" class="block text-black hover:bg-white p-2 rounded-lg">Aprendices</a></li>
                        <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Notificaciones')}}" class="block text-black hover:bg-white p-2 rounded-lg">Reportes</a></li>
                        <li class="mt-2"><a href="{{ route('superadmin.SuperAdmin-Graficas') }}" class="block text-black hover:bg-white p-2 rounded-lg">Gráficas</a></li>
                    </ul>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-2 w-full">Cerrar sesión</button>
                    </form>
            </div>
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
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Identificación</th>
                                <th class="py-3 px-6 text-left">Apellido</th>
                                <th class="py-3 px-6 text-left">Nombre</th>
                                <th class="py-3 px-6 text-left">Programa</th>
                                <th class="py-3 px-6 text-left">Ficha</th>
                                <th class="py-3 px-6 text-left">Teléfono</th>
                                <th class="py-3 px-6 text-left">Correo</th>
                                <th class="py-3 px-6 text-left">Tipo de Contrato</th>
                                <th class="py-3 px-6 text-left">Inicio Contrato</th>
                                <th class="py-3 px-6 text-left">Fin Contrato</th>
                                <th class="py-3 px-6 text-left">NIT Empresa</th>
                                <th class="py-3 px-6 text-left">Razón Social</th>
                                <th class="py-3 px-6 text-left">Dirección</th>
                                <th class="py-3 px-6 text-left">Teléfono Empresa</th>
                                <th class="py-3 px-6 text-left">Nombre Instructor</th>
                                <th class="py-3 px-6 text-left">Correo Instructor</th>
                                <th class="py-3 px-6 text-left">Enviar Aprendiz</th>
                                 <th class="py-3 px-6 text-left">Enviar Instructor</th>
                                <th class="py-3 px-6 text-left">Editar</th>
                                <th class="py-3 px-6 text-left">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-300">
                                <td class="py-3 px-6 text-left">123456</td>
                                <td class="py-3 px-6 text-left">Apellido1</td>
                                <td class="py-3 px-6 text-left">Nombre1</td>
                                <td class="py-3 px-6 text-left">Programa1</td>
                                <td class="py-3 px-6 text-left">Ficha1</td>
                                <td class="py-3 px-6 text-left">555-1234</td>
                                <td class="py-3 px-6 text-left">correo1@example.com</td>
                                <td class="py-3 px-6 text-left"><select class="border border-gray-400 p-2 rounded-md w-48 bg-white">
                                    <option selected="">Selecciona Opción</option>
                                    <option value="Contrato de Aprendizaje">Contrato de Aprendizaje</option>
                                    <option value="Pasantia">Pasantia</option>
                                    <option value="Vinculo laboral">Vinculo laboral</option>
                                    <option value="Patrocinio">Patrocinio</option>
                                    <option value="Unidad Productiva">Unidad Productiva</option>
                                    <option value="Proyecto Productivo">Proyecto Productivo</option>
                                </select></td>
                                <td class="py-3 px-6 text-left">01/01/2022</td>
                                <td class="py-3 px-6 text-left">01/01/2023</td>
                                <td class="py-3 px-6 text-left">987654</td>
                                <td class="py-3 px-6 text-left">Empresa1</td>
                                <td class="py-3 px-6 text-left">Calle 123</td>
                                <td class="py-3 px-6 text-left">555-5678</td>
                                <td class="py-3 px-6 text-left">Representante1</td>
                                <td class="py-3 px-6 text-left">representante1@example.com</td>
                                <td class="py-3 px-6 text-left"><a href="{{ route('superadmin.SuperAdmin-MensajeAprendiz')}}" class="text-blue-600 hover:underline">Mensaje</a></td>
                                <td class="py-3 px-6 text-left"><a href="{{ route('superadmin.SuperAdmin-MensajeInstructor')}}" class="text-blue-600 hover:underline">Mensaje</a></td>
                                <td class="py-3 px-6 text-left"><a href="#" class="text-blue-600 hover:underline">Editar</a></td>
                                <td class="py-3 px-6 text-left"><a href="#" class="text-red-600 hover:underline">Eliminar</a></td>

                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="py-3 px-6 text-left">125536</td>
                                <td class="py-3 px-6 text-left">Apellid2</td>
                                <td class="py-3 px-6 text-left">Nombre2</td>
                                <td class="py-3 px-6 text-left">Programa2</td>
                                <td class="py-3 px-6 text-left">Ficha2</td>
                                <td class="py-3 px-6 text-left">585-1234</td>
                                <td class="py-3 px-6 text-left">correo2@example.com</td>
                                <td class="py-3 px-6 text-left"><select class="border border-gray-400 p-2 rounded-md w-48 bg-white">
                                    <option selected="">Selecciona Opción</option>
                                    <option value="Contrato de Aprendizaje">Contrato de Aprendizaje</option>
                                    <option value="Pasantia">Pasantia</option>
                                    <option value="Vinculo laboral">Vinculo laboral</option>
                                    <option value="Patrocinio">Patrocinio</option>
                                    <option value="Unidad Productiva">Unidad Productiva</option>
                                    <option value="Proyecto Productivo">Proyecto Productivo</option>
                                </select></td>
                                <td class="py-3 px-6 text-left">01/01/2022</td>
                                <td class="py-3 px-6 text-left">01/08/2024</td>
                                <td class="py-3 px-6 text-left">13123123</td>
                                <td class="py-3 px-6 text-left">Empresa2</td>
                                <td class="py-3 px-6 text-left">Calle 123</td>
                                <td class="py-3 px-6 text-left">555-5678</td>
                                <td class="py-3 px-6 text-left">Representante2</td>
                                <td class="py-3 px-6 text-left">representante2@example.com</td>
                                <td class="py-3 px-6 text-left"><a href="{{ route('superadmin.SuperAdmin-MensajeAprendiz')}}" class="text-blue-600 hover:underline">Mensaje</a></td>
                                <td class="py-3 px-6 text-left"><a href="{{ route('superadmin.SuperAdmin-MensajeInstructor')}}" class="text-blue-600 hover:underline">Mensaje</a></td>
                                <td class="py-3 px-6 text-left"><a href="#" class="text-blue-600 hover:underline">Editar</a></td>
                                <td class="py-3 px-6 text-left"><a href="#" class="text-red-600 hover:underline">Eliminar</a></td>

                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="py-3 px-6 text-left">123456</td>
                                <td class="py-3 px-6 text-left">Apellido3</td>
                                <td class="py-3 px-6 text-left">Nombre3</td>
                                <td class="py-3 px-6 text-left">Programa3</td>
                                <td class="py-3 px-6 text-left">Ficha3</td>
                                <td class="py-3 px-6 text-left">5454-876867</td>
                                <td class="py-3 px-6 text-left">correo3@example.com</td>
                                <td class="py-3 px-6 text-left"><select class="border border-gray-400 p-2 rounded-md w-48 bg-white">
                                    <option selected="">Selecciona Opción</option>
                                    <option value="Contrato de Aprendizaje">Contrato de Aprendizaje</option>
                                    <option value="Pasantia">Pasantia</option>
                                    <option value="Vinculo laboral">Vinculo laboral</option>
                                    <option value="Patrocinio">Patrocinio</option>
                                    <option value="Unidad Productiva">Unidad Productiva</option>
                                    <option value="Proyecto Productivo">Proyecto Productivo</option>
                                </select></td>
                                <td class="py-3 px-6 text-left">01/03/2023</td>
                                <td class="py-3 px-6 text-left">01/05/2024</td>
                                <td class="py-3 px-6 text-left">1232112</td>
                                <td class="py-3 px-6 text-left">Empresa3</td>
                                <td class="py-3 px-6 text-left">Calle 12313</td>
                                <td class="py-3 px-6 text-left">554355-5678</td>
                                <td class="py-3 px-6 text-left">Representante3</td>
                                <td class="py-3 px-6 text-left">representante3@example.com</td>
                                <td class="py-3 px-6 text-left"><a href="{{ route('superadmin.SuperAdmin-MensajeAprendiz')}}" class="text-blue-600 hover:underline">Mensaje</a></td>
                                <td class="py-3 px-6 text-left"><a href="{{ route('superadmin.SuperAdmin-MensajeInstructor')}}" class="text-blue-600 hover:underline">Mensaje</a></td>
                                <td class="py-3 px-6 text-left"><a href="#" class="text-blue-600 hover:underline">Editar</a></td>
                                <td class="py-3 px-6 text-left"><a href="#" class="text-red-600 hover:underline">Eliminar</a></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-end mt-6 space-x-4">
                    <a type="submit" href="{{ route('superadmin.SuperAdmin-Aprendiz')}}" class="bg-green-700 hover:bg-green-900 text-white py-2 px-4 rounded">Confirmar</a>
                    <a href="{{ route('superadmin.SuperAdmin-Aprendiz') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded">Cancelar</a>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('js/SuperAdmin.js') }}"></script>
</body>

</html>
