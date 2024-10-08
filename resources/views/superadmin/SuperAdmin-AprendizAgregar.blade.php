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
        <div class="flex items-center">
            <h2 class="text-sm m-0 text-[#009e00] mr-5">Centro de Comercio y Servicios</h2>
            <img class="w-[45px] h-[45px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
        </div>    </header>
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
                                <td class="py-3 px-6 text-left"><select class="border border-gray-400 p-2 rounded-md w-48 bg-white">
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
                                </td>
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
                                <td class="py-3 px-6 text-left"><select class="border border-gray-400 p-2 rounded-md w-48 bg-white">
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
                                <td class="py-3 px-6 text-left"><select class="border border-gray-400 p-2 rounded-md w-48 bg-white">
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
