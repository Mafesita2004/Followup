<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Seguimiento - Perfil</title>
</head>
<body class="font-sans bg-gray-100">
    <header class="bg-[#00324d] text-white p-4 flex justify-between items-center">
        <div class="flex items-center">
            <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-2">
            <div>
                <h2 class="text-sm m-0">Etapa</h2>
                <h2 class="text-sm m-0">Seguimiento</h2>
            </div>
        </div>
        <div class="text-center">
            <h1 class="text-lg font-bold m-0">SUPER</h1>
            <h1 class="text-lg font-bold m-0">ADMINISTRADOR</h1>
        </div>
        <img class="w-12 h-12" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
    </header>

    <nav class="bg-[#00324d] px-4 py-2 flex justify-between items-center text-white">
        <a href="{{ route('superadmin.home') }}" class="text-white">←</a>
        <div>Permisos</div>
        <div class="relative">
            <button id="menuButton" class="flex items-center">
                {{ Auth::user()->name }}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
        </div>
    </nav>

    <main class="bg-white m-5 p-6 rounded-lg shadow">
        <div class="bg-gray-100 p-6 rounded-lg">
            <div class="text-center mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 mx-auto text-gray-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <h2 class="text-xl font-bold mt-2">SUPER ADMINISTRADOR</h2>
            </div>

            <form action="{{ route('superadmin.perfil.update') }}" method="POST">
                @csrf
                <h3 class="font-bold mb-2">Datos básicos</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nombres:</label>
                        <input type="text" name="nombres" value="{{ old('nombres', Auth::user()->nombres) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Apellidos:</label>
                        <input type="text" name="apellidos" value="{{ old('apellidos', Auth::user()->apellidos) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Correo electrónico:</label>
                        <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Cuenta Soy SENA:</label>
                        <input type="text" name="cuenta_sena" value="{{ old('cuenta_sena', Auth::user()->cuenta_sena) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Departamento:</label>
                        <input type="text" name="departamento" value="{{ old('departamento', Auth::user()->departamento) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Municipio:</label>
                        <input type="text" name="municipio" value="{{ old('municipio', Auth::user()->municipio) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Fecha de nacimiento:</label>
                        <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', Auth::user()->fecha_nacimiento) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                </div>

                <h3 class="font-bold mb-2 mt-6">Lugar de Residencia</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Departamento:</label>
                        <input type="text" name="residencia_departamento" value="{{ old('residencia_departamento', Auth::user()->residencia_departamento) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Municipio:</label>
                        <input type="text" name="residencia_municipio" value="{{ old('residencia_municipio', Auth::user()->residencia_municipio) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Barrio:</label>
                        <input type="text" name="barrio" value="{{ old('barrio', Auth::user()->barrio) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Dirección:</label>
                        <input type="text" name="direccion" value="{{ old('direccion', Auth::user()->direccion) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                </div>

                <div class="flex justify-end mt-6 space-x-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">Guardar cambios</button>
                    <a href="{{ route('superadmin.home') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded">Cancelar</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
