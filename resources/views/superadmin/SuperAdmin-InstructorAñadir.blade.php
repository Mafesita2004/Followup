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
            text-align: center;
            color: #009e00;
            margin-top: 5px;
            font-size: 12px;
        }
    </style>
</head>
<body class="font-['Arial',sans-serif] bg-white m-0 flex flex-col min-h-screen">
<header class="bg-white text-[#009e00] px-5 py-2.5 flex flex-col items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0]">
    <!-- Encabezado -->
</header>

<nav class="bg-[#009e00] px-2.5 h-14 py-1.5 flex justify-end items-center relative z-10">
    <!-- Barra de navegación -->
</nav>

<div class="w-full flex justify-between items-center mt-6">
    <a href="{{route('superadmin.SuperAdmin-Instructor') }}" class="ml-4">
        <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
    </a>
</div>

<div class="flex justify-center">
    <main class="bg-white m-4 p-2 rounded-lg shadow-[0_0_10px_rgba(0,0,0,0.8)] border-[#2F3E4C] w-2/3 items-center">
        <div class="bg-gray-100 p-6 rounded-lg">
            <div class="text-center mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-40 h-40 mx-auto text-gray-500 m-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <h1 class="text-lg m-0 text-black font-bold">INSTRUCTOR</h1>
            </div>

            <h3 class="font-bold mb-4">Datos básicos</h3>
            <form id="instructorForm">
                <div class="grid grid-cols-3 gap-4 mb-6">
                    <div>
                        <label for="nombre" class="block text-gray-700">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Nombre">
                    </div>
                    <div>
                        <label for="apellido" class="block text-gray-700">Apellido</label>
                        <input type="text" id="apellido" name="apellido" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Apellido">
                    </div>
                    <div>
                        <label for="cedula" class="block text-gray-700">Cedula</label>
                        <input type="text" id="cedula" name="cedula" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Cedula">
                    </div>
                    <div>
                        <label for="correo" class="block text-gray-700">Correo</label>
                        <input type="email" id="correo" name="correo" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Correo">
                    </div>
                    <div>
                        <label for="celular" class="block text-gray-700">Celular</label>
                        <input type="text" id="celular" name="celular" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Celular">
                    </div>
                    <div>
                        <label for="programa" class="block text-gray-700">Red de conocimiento</label>
                        <select id="programa" name="programa" class="w-full border border-gray-300 rounded-lg p-2.5">
                            <option value="" disabled selected>Seleccione una red de conocimiento</option>
                            <option value="actividad-fisica">Red de Actividad física, recreación y deporte</option>
                            <!-- Más opciones aquí -->
                        </select>
                    </div>
                    <div>
                        <label for="horasTotales" class="block text-gray-700">Total de horas</label>
                        <input type="number" id="horasTotales" name="horasTotales" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Total de horas">
                    </div>
                    <div>
                        <label for="horasRealizadas" class="block text-gray-700">Horas realizadas</label>
                        <input type="number" id="horasRealizadas" name="horasRealizadas" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Horas realizadas">
                    </div>
                    <div>
                        <label for="fechaInicio" class="block text-gray-700">Fecha de inicio</label>
                        <input type="date" id="fechaInicio" name="fechaInicio" class="w-full border border-gray-300 rounded-lg p-2.5">
                    </div>
                    <div>
                        <label for="fechaFin" class="block text-gray-700">Fecha de fin</label>
                        <input type="date" id="fechaFin" name="fechaFin" class="w-full border border-gray-300 rounded-lg p-2.5">
                    </div>
                </div>

                <h3 class="font-bold mb-4 mt-6">Lugar de Residencia</h3>
                <div class="grid grid-cols-3 gap-4 mb-6">
                    <div>
                        <label for="pais" class="block text-gray-700">Pais</label>
                        <input type="text" id="pais" name="pais" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Pais">
                    </div>
                    <div>
                        <label for="departamento" class="block text-gray-700">Departamento</label>
                        <input type="text" id="departamento" name="departamento" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Departamento">
                    </div>
                    <div>
                        <label for="municipio" class="block text-gray-700">Municipio</label>
                        <input type="text" id="municipio" name="municipio" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Municipio">
                    </div>
                    <div>
                        <label for="barrio" class="block text-gray-700">Barrio</label>
                        <input type="text" id="barrio" name="barrio" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Barrio">
                    </div>
                    <div>
                        <label for="direccion" class="block text-gray-700">Dirección</label>
                        <input type="text" id="direccion" name="direccion" class="w-full border border-gray-300 rounded-lg p-2.5" placeholder="Dirección">
                    </div>
                </div>

                <div class="flex justify-end mt-6 space-x-4">
                    <button type="submit" class="bg-green-700 hover:bg-green-900 text-white py-2 px-4 rounded">Confirmar</button>
                    <a href="{{ route('superadmin.SuperAdmin-Instructor') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded">Cancelar</a>
                </div>
            </form>
        </div>
    </main>
</div>
<script src="{{ asset('js/Añadir_Instructor.js') }}"></script>
<script src="{{ asset('js/SuperAdmin.js') }}"></script>

</body>
</html>
