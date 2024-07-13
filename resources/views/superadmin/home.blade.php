<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="logo-icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Seguimiento</title>
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
    <nav class="bg-[#00324d] px-2.5 py-1.5 flex justify-start items-center">
        <img class="w-[35px] h-auto mr-2.5 filter invert" src="{{ asset('img/notificaciones.png') }}" alt="">
        <div class="bg-white rounded-full px-8 py-1.5 text-sm text-black ml-auto mr-0">Nombre de usuario</div>
        <img class="bg-white w-[35px] h-auto rounded-full -ml-4 border-2 border-black" src="{{ asset('img/user-icon.png') }}" alt="User Icon">
    </nav>
    <main class="flex-grow p-[30px] flex justify-center items-center  bg-white ">
        <div class="grid grid-cols-3 gap-5  bg-[#f0f0f0] border-2 border-[#2F3E4C] p-[30px] rounded-[10px] max-w-[900px] mx-auto shadow-[0_0_10px_rgba(0,0,0,0.8)]">

            <a href="{{ route('superadmin.SuperAdmin-Administrator') }}" class="m-2.5 rounded-[15%] flex flex-col items-center text-center p-5  bg-white border-[3px] border-black">
                <img src="{{ asset('img/administrador.png') }}" alt="Administradores" class="w-[50px] h-[50px] mb-2.5">
                <span class="text-sm">Administradores</span>
            </a>
            <div class="m-2.5 rounded-[15%] flex flex-col items-center text-center p-5  bg-white border-[3px] border-black">
                <img src="{{ asset('img/instructor.png') }}" alt="Instructores" class="w-[50px] h-[50px] mb-2.5">
                <span class="text-sm">Instructores</span>
            </div>
            <div class="m-2.5 rounded-[15%] flex flex-col items-center text-center p-5  bg-white border-[3px] border-black">
                <img src="{{ asset('img/aprendices.png') }}" alt="Aprendices" class="w-[50px] h-[50px] mb-2.5">
                <span class="text-sm">Aprendices</span>
            </div>
            <div class="m-2.5 rounded-[15%] flex flex-col items-center text-center p-5  bg-white border-[3px] border-black">
                <img src="{{ asset('img/permisos.png') }}" alt="Permisos" class="w-[50px] h-[50px] mb-2.5">
                <span class="text-sm">Permisos</span>
            </div>
            <div class="m-2.5 rounded-[15%] flex flex-col items-center text-center p-5  bg-white border-[3px] border-black">
                <img src="{{ asset('img/reportes.png') }}" alt="Reportes" class="w-[50px] h-[50px] mb-2.5">
                <span class="text-sm">Reportes</span>
            </div>
            <div class="m-2.5 rounded-[15%] flex flex-col items-center text-center p-5  bg-white border-[3px] border-black">
                <img src="{{ asset('img/grafica.png') }}" alt="Gráfica" class="w-[50px] h-[50px] mb-2.5">
                <span class="text-sm">Gráfica</span>
            </div>
        </div>
    </main>
</body>
</html>
