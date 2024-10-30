<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Etapa Productiva</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: white;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: white;
            border-bottom: 1px solid #e0e0e0;
        }

        nav {
            position: sticky;
            top: 70px; /* Ajusta según la altura del header */
            z-index: 999;
            background-color: #009e00;
        }

        /* Estilos para el carrusel */
        .carousel-container {
            max-width: 20%;
            margin: 40px auto 0;
            box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.4);
            border-radius: 10px;
            overflow: hidden;
        }

        .slick-prev, .slick-next {
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            font-size: 20px;
            padding: 10px;
            cursor: pointer;
        }

        .slick-prev:hover, .slick-next:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

        .slick-dots li button:before {
            color: #009e00;
        }

        .slick-dots li.slick-active button:before {
            color: #009e00;
        }

        .carousel-item img {
            width: 20%;
            margin: 0 auto;
            display: block;
        }
    </style>

    <!-- jQuery y Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
</head>

<body class="flex flex-col min-h-screen">
    <header class="text-[#009e00] px-5 py-2.5 flex flex-col items-center">
        <div class="flex justify-between w-full">
            <div class="flex items-center">
                <img class="w-[70px] h-[70px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
                <div class="flex-grow m-2"></div>
                <div class="text-left">
                    <div class="flex items-center">
                        <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
                        <div class="flex flex-col text-left">
                            <h2 class="text-[12px] m-0 text-[#009e00]">Etapa</h2>
                            <h2 class="text-[12px] m-0 text-[#009e00]">Productiva</h2>
                        </div>
                    </div>
                    <h2 class="text-sm mt-2 text-[#009e00]">Centro de Comercio y Servicios</h2>
                </div>
            </div>
        </div>
    </header>

    <nav class="h-14 py-1.5 flex justify-center items-center">
        <ul class="flex space-x-4">
            <li>
                <a href="#queEsEtapa" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                   ¿Qué es Etapa Productiva?
                </a>
            </li>
            <li>
                <a href="#tiposModalidad" class="block text-center text-white px-4 py-2 rounded-lg {{ request()->routeIs('administrator.apprentice') ? 'bg-green-600 bg-opacity-70' : 'bg-green-600 bg-opacity-20 hover:bg-opacity-50' }}">
                    <span class="font-bold">
                       Tipos de modalidad
                    </span>
                </a>
            </li>
            <li>
                <a href="#mision" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                   Misión
                </a>
            </li>
        </ul>
    </nav>

    <div class="container carousel-container mt-5">
        <div id="carouselImages">
            <div><img src="{{ asset('img/webpng/carrusel5.jpg') }}" alt="Imagen 1" class="d-block w-100"></div>
            <div><img src="{{ asset('img/webpng/carrusel1.png') }}" alt="Imagen 1" class="d-block w-100"></div>
            <div><img src="{{ asset('img/webpng/carrusel2.png') }}" alt="Imagen 2" class="d-block w-100"></div>
            <div><img src="{{ asset('img/webpng/carrusel3.png') }}" alt="Imagen 3" class="d-block w-100"></div>
            <div><img src="{{ asset('img/webpng/carrusel4.png') }}" alt="Imagen 4" class="d-block w-100"></div>
        </div>
    </div>

    <div id="queEsEtapa" class="mt-10">
        <h2>¿Qué es Etapa Productiva?</h2>
        <p>Contenido sobre la etapa productiva...</p>
    </div>

    <div id="tiposModalidad" class="mt-10">
        <h2>Tipos de Modalidad</h2>
        <p>En esta sección se describen los diferentes tipos de modalidades disponibles.</p>

        <table class="min-w-full bg-white border border-gray-300 mt-4">
            <thead>
                <tr class="bg-[#009e00] text-white">
                    <th class="py-2 px-4 border-b">Modalidad</th>
                    <th class="py-2 px-4 border-b">Descripción</th>
                    <th class="py-2 px-4 border-b">Duración</th>
                    <th class="py-2 px-4 border-b">Requisitos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4 border-b">Pasantía</td>
                    <td class="py-2 px-4 border-b">Experiencia práctica en un entorno laboral.</td>
                    <td class="py-2 px-4 border-b">3 meses</td>
                    <td class="py-2 px-4 border-b">Estudiante de último año.</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">Contrato de Aprendizaje</td>
                    <td class="py-2 px-4 border-b">Formación práctica y teórica en una empresa.</td>
                    <td class="py-2 px-4 border-b">6 meses</td>
                    <td class="py-2 px-4 border-b">Menores de 25 años.</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">Vínculo Laboral</td>
                    <td class="py-2 px-4 border-b">Relación laboral formal con una empresa.</td>
                    <td class="py-2 px-4 border-b">Indefinido</td>
                    <td class="py-2 px-4 border-b">Cumplimiento de requisitos de la empresa.</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">Unidad Productiva Familiar</td>
                    <td class="py-2 px-4 border-b">Emprendimiento familiar con apoyo técnico.</td>
                    <td class="py-2 px-4 border-b">Variable</td>
                    <td class="py-2 px-4 border-b">Plan de negocio viable.</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">Proyecto Productivo Empresarial</td>
                    <td class="py-2 px-4 border-b">Iniciativas empresariales con apoyo institucional.</td>
                    <td class="py-2 px-4 border-b">Variable</td>
                    <td class="py-2 px-4 border-b">Viabilidad del proyecto.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="mision" class="mt-10">
        <h2>Misión</h2>
        <p>Contenido sobre la misión...</p>
    </div>

    <!-- jQuery y Slick JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#carouselImages').slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });
    </script>
</body>
</html>
