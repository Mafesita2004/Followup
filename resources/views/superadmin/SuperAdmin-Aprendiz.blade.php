<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    <title>Etapa Seguimiento</title>
</head>

<body class="font-sans bg-white m-0 flex flex-col min-h-screen">
    <header class="bg-white text-green-700 p-4 flex justify-between items-center border-t-4 border-white relative">
        <div class="flex items-center">
            <img src="{{ asset('img/logo.png')}}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-2">
            <div class="flex flex-col">
                <h2 class="text-sm m-0 text-green-700">Etapa</h2>
                <h2 class="text-sm m-0 text-green-700">Seguimiento</h2>
            </div>
        </div>
        <div class="text-center absolute left-1/2 transform -translate-x-1/2 text-xs flex flex-col items-center justify-center">
            <h1 class="text-lg m-0 text-green-700 font-bold">SUPER</h1>
            <h1 class="text-lg m-0 text-green-700 font-bold">ADMINISTRADOR</h1>
        </div>
        <img class="w-11 h-11" src="{{asset('img/logo-sena.png')}}" alt="Sena logo">
    </header>
    <nav class="bg-[#00324d] p-2 flex items-center relative">
        <img class="w-9 h-auto mr-2 invert" src="{{asset('img/notificaciones.png')}}" alt="">
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Aprendiz</div>
        <div class="bg-white rounded-full px-8 py-1.5 text-sm text-black ml-auto mr-0">Nombre de usuario</div>
        <img class="bg-white w-[35px] h-auto rounded-full -ml-4 border-2 border-black" src="{{ asset('img/user-icon.png') }}" alt="User Icon">
    </nav>
    <main class="flex flex-col items-center mt-4 relative">
        <div class="w-full flex justify-between items-center mb-4">
            <a href="{{ route('superadmin.home') }}" class="ml-4">
                <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
            </a>

            <form action="#" method="GET" class="flex items-center">
                <input type="text" name="q" placeholder="Buscar..." class="px-2 py-1 text-sm border border-black rounded-full w-96">
                <button type="submit" aria-label="Buscar" class="p-2 bg-transparent border-none cursor-pointer -ml-10">
                    <img src="{{ asset('img/lupa.png') }}" alt="Buscar" class="w-4 h-auto">
                </button>
            </form>

            <form action="#" method="GET" class="mr-8">
                <button type="button" class="bg-white border-none p-2 cursor-pointer">
                    <img src="{{ asset('img/mas.png') }}" alt="Agregar" class="w-5 h-auto">
                </button>
            </form>
        </div>
        <div class="w-full max-w-6xl bg-[#2f3e4c14] border-2 border-[#04324D] rounded-lg p-6 shadow-[0_0_10px_rgba(0,0,0,0.8)] mt-1">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-6 gap-4">
                @php
                    $contador = 0;
                @endphp
                @for ($i = 0; $i < 24; $i++)
                    <div class="w-40px h-30px  bg-white border-2 border-[#009E00] rounded-2xl m-4 p-2 flex flex-col items-center">
                        <img src="{{ asset('img/user-icon.png') }}" alt="User" class="w-8 h-8 mb-1">
                        <span class="text-xs text-center p-1">Nombre Completo</span>
                        <span class="text-xs text-center p-1">Cédula</span>
                        <span class="text-xs text-center p-1">Sede</span>
                        <span class="text-xs text-center p-1">Rol</span>
                    </div>
                    @php
                        $contador++;
                    @endphp
                @endfor
            </div>
        </div>
        <div class="mt-4 text-center m-4 text-sm text-gray-500">Total de cuadros: {{ $contador }}</div>
    </main>
    <footer>
    </footer>
</body>

</html>
