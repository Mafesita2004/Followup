<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>SuperAdmin Home</title>
    <style>
        #userMenu {
            top: 100%;
            margin-top: 0.5rem;
        }

    </style>

</head>
{{-- Barra Azul --}}
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
            <h1 class="text-lg m-0 text-[#009e00] font-bold">ADMINISTRADOR</h1>
        </div>
        <img class="w-[45px] h-[45px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
    </header>
    <nav class="bg-[#00324d] px-2.5 py-1.5 flex justify-start items-center relative z-10">
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
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Agregar Aprendiz</div>
        <div class="relative ml-auto flex items-center ">
            <div class="bg-white w-72 rounded-full px-8 py-1.5 text-sm text-black mr-2">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</div>
            <img class="bg-white w-[45px] h-auto rounded-full -ml-8 border-2 border-black" src="{{ asset('img/user-icon.png') }}" alt="User Icon">
            <button id="menuButton" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            {{-- Menu --}}
            <div id="userMenu" class=" hidden absolute right-4  mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">
                <div class="p-4">
                    <div class="flex items-center mb-4">
                        <div>
                            <p class="text-sm font-bold">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</p>
                            <p class="text-sm mt-2">Administrador</p>
                        </div>

                        <img src="{{ asset('img/user-icon.png') }}" alt="User Icon" class="w-10 h-10 rounded-full mr-3 mx-10 bg-white border-black border-2">
                    </div>
                    <ul>
                        <li class="mt-2"><a href="{{ route('administrator.Administrator-perfil') }}" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">Ver perfil</a></li>
                        <li class="mt-2"><a href="{{ route('administrator.home') }}" class="block text-black hover:bg-white p-2 rounded-lg">Inicio</a></li>
                        <li class="mt-2"><a href="{{ route('administrator.settings') }}" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>
                        <li class="mt-2"><a href="{{ route('administrator.apprentice') }}" class="block text-black hover:bg-white p-2 rounded-lg" onclick="toggleSublist(event)">Aprendices</a>
                            <ul class="hidden ml-4 mt-2 bg-[#EEEEEE] p-2 rounded-lg">
                                <li class="mt-2 font-bold text-black border-b border-gray-300 pb-2">APRENDICES</li>
                                <li class="mt-2"><a href="{{ route('administrator.apprentice')}}" class="block text-black hover:bg-white p-2 rounded-lg ">Lista de Aprendices que inician etapa productiva</a></li>
                                <li class="mt-2"><a href="{{ route('administrator.Agregar-aprendiz')}}" class="block text-black hover:bg-white p-2 rounded-lg ">Agregar Aprendices</a></li>
                            </ul></li>
                        <li class="mt-2"><a href="{{ route('administrator.instructor') }}" class="block text-black hover:bg-white p-2 rounded-lg">Instructores</a></li>
                        <li class="mt-2"><a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg" onclick="toggleSublist(event)">Plantillas</a>
                            <ul class="hidden ml-4 mt-2 bg-[#EEEEEE] p-2 rounded-lg">
                                <li class="mt-2 font-bold text-black border-b border-gray-300 pb-2">MODALIDAD</li>
                                <li class="mt-2"><a href="{{ route('administrator.template')}}"class="block text-black hover:bg-white p-2 rounded-lg">Pasantía</a></li>
                                <li class="mt-2"><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Vinculo Laboral</a></li>
                                <li><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg" onclick="toggleSublist(event)">Contrato de Aprendizaje</a>
                                    <ul class="hidden ml-4 mt-2 bg-[#D9D9D9] p-2 rounded-lg">
                                        <li class="mt-2"><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Ver Plantilla</a></li>
                                        <li class="mt-2"><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">+ Añadir Plantilla</a></li>
                                    </ul>
                                </li>
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
    </nav>
    <script>
        function toggleSublist(event) {
            event.preventDefault();
            const sublist = event.target.nextElementSibling;
            if (sublist.classList.contains('hidden')) {
                sublist.classList.remove('hidden');
            } else {
                sublist.classList.add('hidden');
            }
        }
    </script>

        {{-- FIN Menu --}}
        <div>
            <div class="form-group flex flex-wrap justify-between bg-[#BDBDBD] border:2 rounded-lg p-5 mt-2 mx-auto" style="width: 800px;">
                <label class="flex-shrink-0 w-[22%] mb-2">
                    Nombre
                    <input type="text" name="nombre" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
                </label>
                <label class="flex-shrink-0 w-[22%] mb-2">
                    Apellido
                    <input type="text" name="apellido" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
                </label>
                <label class="flex-shrink-0 w-[22%] mb-2">
                    Correo
                    <input type="email" name="correo" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
                </label>
                <label class="flex-shrink-0 w-[22%] mb-2">
                    Dirección
                    <input type="text" name="direccion" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
                </label>
                <label class="flex-shrink-0 w-[22%] mb-2">
                    Tipo de documento de Identidad
                    <select name="tipo-documento" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
                        <option value="">Cedula de ciudadania</option>
                        <option value="">Pasaporte</option>
                        <option value="">Cedula de extranjeria</option>
                        <option value="">TI</option>

                    </select>
                </label>
                <label class="flex-shrink-0 w-[22%] mb-2">
                    Número de documento
                    <input type="text" name="numero-documento" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
                </label>
                <label class="flex-shrink-0 w-[22%] mb-2">
                    Programa
                    <select name="programa" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
                        <option value="GESTION ADMINISTRATIVA DEL SECTOR SALUD">GESTION ADMINISTRATIVA DEL SECTOR SALUD</option>
                        <option value="GESTION DE MERCADOS">GESTION DE MERCADOS</option>
                        <option value="ASISTENCIA ADMINISTRATIVA">ASISTENCIA ADMINISTRATIVA</option>
                        <option value="GESTION DE PROCESOS ADMINISTRATIVOS DE SALUD">GESTION DE PROCESOS ADMINISTRATIVOS DE SALUD</option>
                        <option value="GESTION EMPRESARIAL">GESTION EMPRESARIAL</option>
                        <option value="GUIANZA TURISTICA">GUIANZA TURISTICA</option>
                        <option value="GESTION CONTABLE Y FINANCIERA">GESTION CONTABLE Y FINANCIERA</option>
                        <option value="ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION">ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION</option>
                        <option value="GESTION LOGISTICA">GESTION LOGISTICA</option>
                        <option value="NEGOCIACION INTERNACIONAL">NEGOCIACION INTERNACIONAL</option>
                        <option value="GESTION DEL TALENTO HUMANO">GESTION DEL TALENTO HUMANO</option>
                        <option value="GESTION DOCUMENTAL">GESTION DOCUMENTAL</option>
                        <option value="CONTABILIZACION DE OPERACIONES COMERCIALES Y FINANCIERAS">CONTABILIZACION DE OPERACIONES COMERCIALES Y FINANCIERAS</option>
                        <option value="GESTION BANCARIA Y DE ENTIDADES FINANCIERAS">GESTION BANCARIA Y DE ENTIDADES FINANCIERAS</option>
                        <option value="PELUQUERIA">PELUQUERIA</option>
                        <option value="PANIFICACION">PANIFICACION</option>
                        <option value="COCINA">COCINA</option>
                        <option value="SERVICIOS FARMACEUTICOS">SERVICIOS FARMACEUTICOS</option>
                        <option value="SALUD PUBLICA">SALUD PUBLICA</option>
                        <option value="APOYO ADMINISTRATIVO EN SALUD">APOYO ADMINISTRATIVO EN SALUD</option>
                        <option value="OPERACION TURISTICA LOCAL">OPERACION TURISTICA LOCAL</option>
                        <option value="ANIMACION 3D">ANIMACION 3D</option>
                        <option value="ANIMACION DIGITAL">ANIMACION DIGITAL</option>
                        <option value="PROMOCION DE PRODUCTOS">PROMOCION DE PRODUCTOS</option>
                        <option value="SERVICIOS Y OPERACIONES MICROFINANCIERAS">SERVICIOS Y OPERACIONES MICROFINANCIERAS</option>
                        <option value="CUIDADO ESTETICO DE MANOS Y PIES">CUIDADO ESTETICO DE MANOS Y PIES</option>
                        <option value="CONTROL DE MOVILIDAD TRANSPORTE Y SEGURIDAD VIAL">CONTROL DE MOVILIDAD TRANSPORTE Y SEGURIDAD VIAL</option>
                        <option value="ENFERMERIA">ENFERMERIA</option>
                        <option value="SISTEMAS">SISTEMAS</option>
                        <option value="DISTRIBUCION FISICA INTERNACIONAL">DISTRIBUCION FISICA INTERNACIONAL</option>
                        <option value="ASESORIA COMERCIAL Y OPERACIONES DE ENTIDADES FINANCIERAS">ASESORIA COMERCIAL Y OPERACIONES DE ENTIDADES FINANCIERAS</option>
                        <option value="ATENCION INTEGRAL A LA PRIMERA INFANCIA">ATENCION INTEGRAL A LA PRIMERA INFANCIA</option>
                        <option value="ASISTENCIA EN ORGANIZACION DE ARCHIVOS">ASISTENCIA EN ORGANIZACION DE ARCHIVOS</option>
                        <option value="DESARROLLO DE OPERACIONES LOGISTICA EN LA CADENA DE ABASTECIMIENTO">DESARROLLO DE OPERACIONES LOGISTICA EN LA CADENA DE ABASTECIMIENTO</option>
                        <option value="SERVICIO DE RESTAURANTE Y BAR">SERVICIO DE RESTAURANTE Y BAR</option>
                        <option value="OPERACIONES DE COMERCIO EXTERIOR">OPERACIONES DE COMERCIO EXTERIOR</option>
                        <option value="DISEÑO E INTEGRACION DE MULTIMEDIA">DISEÑO E INTEGRACION DE MULTIMEDIA</option>
                        <option value="INFORMACION Y SERVICIO AL CLIENTE">INFORMACION Y SERVICIO AL CLIENTE</option>
                        <option value="SERVICIOS DE AGENCIAS DE VIAJES">SERVICIOS DE AGENCIAS DE VIAJES</option>
                        <option value="ASESORIA COMERCIAL">ASESORIA COMERCIAL</option>
                        <option value="PROCESOS DE PANADERIA">PROCESOS DE PANADERIA</option>
                        <option value="GESTION COMUNITARIA DEL RIESGO DE DESASTRES">GESTION COMUNITARIA DEL RIESGO DE DESASTRES</option>
                        <option value="PROGRAMACION DE APLICACIONES Y SERVICIOS PARA LA NUBE">PROGRAMACION DE APLICACIONES Y SERVICIOS PARA LA NUBE</option>
                        <option value="PROGRAMACION DE SOFTWARE">PROGRAMACION DE SOFTWARE</option>
                        <option value="SERVICIOS DE BARISMO">SERVICIOS DE BARISMO</option>
                        <option value="GESTION CONTABLE Y DE INFORMACION FINANCIERA">GESTION CONTABLE Y DE INFORMACION FINANCIERA</option>
                        <option value="INTEGRACION DE OPERACIONES LOGISTICAS">INTEGRACION DE OPERACIONES LOGISTICAS</option>
                        <option value="INTEGRACION DE CONTENIDOS DIGITALES">INTEGRACION DE CONTENIDOS DIGITALES</option>
                        <option value="AUXILIAR EN COCINA">AUXILIAR EN COCINA</option>
                        <option value="PROGRAMACION PARA ANALITICA DE DATOS">PROGRAMACION PARA ANALITICA DE DATOS</option>
                        <option value="AGENTE DE TRANSITO Y TRANSPORTE">AGENTE DE TRANSITO Y TRANSPORTE</option>
                        <option value="ANALISIS Y DESARROLLO DE SOFTWARE">ANALISIS Y DESARROLLO DE SOFTWARE</option>
                        <option value="ATENCION INTEGRAL AL CLIENTE">ATENCION INTEGRAL AL CLIENTE</option>
                        <option value="CONTROL DE MOVILIDAD, TRANSPORTE Y SEGURIDAD VIAL">CONTROL DE MOVILIDAD, TRANSPORTE Y SEGURIDAD VIAL</option>
                        <option value="DESARROLLO DE PROCESOS DE MERCADEO">DESARROLLO DE PROCESOS DE MERCADEO</option>
                        <option value="DESARROLLO PUBLICITARIO">DESARROLLO PUBLICITARIO</option>
                        <option value="GESTION INTEGRAL DEL TRANSPORTE">GESTION INTEGRAL DEL TRANSPORTE</option>
                        <option value="ORGANIZACION DE ARCHIVO">ORGANIZACION DE ARCHIVO</option>
                        <option value="PRESELECCION DE TALENTO HUMANO MEDIADO POR HERRAMIENTAS TIC">PRESELECCION DE TALENTO HUMANO MEDIADO POR HERRAMIENTAS TIC</option>
                        <option value="SERVICIOS EN CONTACT CENTER Y BPO">SERVICIOS EN CONTACT CENTER Y BPO</option>
                        <option value="COORDINACION DE PROCESOS LOGISTICOS">COORDINACION DE PROCESOS LOGISTICOS</option>
                        </select>
                </label>
                <label class="flex-shrink-0 w-[22%] mb-2">
                    Ficha
                    <input type="text" name="ficha" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
                </label>
                <label class="flex-shrink-0 w-[22%] mb-2">
                    Teléfono
                    <input type="text" name="telefono" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
                </label>
                <label class="flex-shrink-0 w-[24%] mb-2">
                    Modalidad
                    <select name="modalidad" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
                    <option value="">Seleccionar opcion</option>
                    <option value="Contrato de Aprendizaje">Contrato de Aprendizaje</option>
                    <option value="Pasantia">Pasantia</option>
                    <option value="Vinculo laboral">Vinculo laboral</option>
                    <option value="Patrocinio">Patrocinio</option>
                    <option value="Unidad Productiva">Unidad Productiva</option>
                    <option value="Proyecto Productivo">Proyecto Productivo</option>
                    </select>
                </label>
                <label class="flex-shrink-0 w-[22%] mb-2">
                    Inicio de Etapa Práctica
                    <input type="date" name="inicio-etapa-practica" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
                </label>
                <label class="flex-shrink-0 w-[22%] mb-2">
                    Fin de Etapa Práctica
                    <input type="date" name="fin-etapa-practica" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
                </label>
                <label class="flex-shrink-0 w-[22%] mb-2">
                    Ciudad
                    <input type="text" name="ciudad" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
                </label>
                <label class="flex-shrink-0 w-[22%] mb-2">
                    NIT. Empresa
                    <input type="text" name="nit-empresa" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
                </label>
                <label class="flex-shrink-0 w-[22%] mb-2">
                    Razón social
                    <input type="text" name="razon-social" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
                </label>
                <label class="flex-shrink-0 w-[22%] mb-2">
                    Documentos
                    <textarea name="documentos" rows="4" class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm"></textarea>
                </label>
                <div class="buttons flex justify-center gap-4 mt-4 ml-auto">
                    <button type="button" class="bg-gray-300 border border-black p-2 rounded-md text-sm" onclick="window.location.href='{{ route('administrator.Agregar-aprendiz') }}'">CANCELAR</button>
                    <button type="submit" class="bg-green-700 text-white p-2 rounded-md text-sm">CONFIRMAR</button>

                </div>
                <button type="button" class="bg-[#838383] flex justify-center gap-4 mt-4 text-white p-2 rounded-md text-sm ml-auto" onclick="window.location.href='{{ route('administrator.Reporte-aprendiz') }}'">CORREO</button>
            </div>
        </div>


<script src="{{ asset('js/Administrator.js') }}"></script>
</body>
</html>
