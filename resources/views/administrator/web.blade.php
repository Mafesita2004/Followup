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
        .section-title {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            color: #009e00;
            margin-bottom: 20px;
        }

        .section-content {
            padding: 40px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin-top: 40px;
        }

        .section-content p {
            line-height: 1.8;
            font-size: 1rem;
            margin-bottom: 20px;
            color: #666;
        }

        .cta-button {
            display: inline-block;
            background-color: #009e00;
            color: white;
            padding: 12px 20px;
            text-align: center;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #007a00;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        .table th, .table td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .table th {
            background-color: #009e00;
            color: white;
        }

        .table tr:hover {
            background-color: #f9f9f9;
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

         /* Estilo para la sección de Misión */
         #mision {
    background: linear-gradient(to right, #ffffff, #009e00);  /* Gradiente de verdes claritos */
    color: #009e00;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgb(0, 0, 0);
}


        #mision .text-section {
            width: 60%;
        }

        #mision img {
            width: 30%;
            border-radius: 10px;
            margin-left: 20px;
        }

        #mision h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        #mision p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: rgba(0, 0, 0, 0.884);
    font-family: 'Poppins', sans-serif;
    text-align: justify;
}



        /* Animación para el título de la misión */
        #mision h2 {
            animation: fadeInUp 1s ease-out;
        }
        /* Aplica una fuente llamativa al párrafo de la sección "¿Qué es Etapa Productiva?" */
#queEsEtapa p {
    font-family: 'Poppins', sans-serif; /* Cambia a la fuente de tu elección */
    font-size: 1.1rem;
    line-height: 1.8;
    color: black;
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

    <nav class="h-14 py-1.5 flex justify-between items-center px-4 bg-[#009e00]">
        <!-- Elementos de navegación centrados -->
        <div class="flex justify-center w-full space-x-4">
            <a href="#queEsEtapa" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                ¿Qué es Etapa Productiva?
            </a>
            <a href="#tiposModalidad" class="block text-center text-white px-4 py-2 rounded-lg {{ request()->routeIs('administrator.apprentice') ? 'bg-green-600 bg-opacity-70' : 'bg-green-600 bg-opacity-20 hover:bg-opacity-50' }}">
                <span class="font-bold">Tipos de modalidad</span>
            </a>
            <a href="#mision" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                Misión
            </a>
        </div>

        <!-- Botón de Iniciar Sesión alineado a la derecha -->
        <a href="{{ route('login') }}" class="text-white text-sm bg-green-500 hover:bg-green-800 px-4 py-2 rounded-md transition ml-auto flex items-center justify-center w-32">
            Iniciar Sesión
        </a>


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

    <!-- Secciones de contenido -->
    <div id="queEsEtapa" class="section-content flex items-center justify-between">
        <div class="text-section w-3/5">
            <h2 class="section-title text-2xl font-bold mb-4">¿Qué es Etapa Productiva?</h2>
            <p class="text-lg">La "Etapa Productiva" es una fase del proceso formativo en la que los aprendices aplican en un entorno laboral real los conocimientos adquiridos durante la "Etapa Lectiva" o teórica. Esta etapa, similar a una práctica o pasantía, permite que el aprendiz gane experiencia directa en su campo de estudio bajo supervisión. Su objetivo es desarrollar competencias laborales, adquirir experiencia en el entorno real de trabajo, contribuir a la productividad de la empresa y facilitar la inserción laboral, ya que en muchos casos las empresas terminan contratando a los aprendices.</p>
        </div>
        <img src="{{ asset('img/trainer/etapa.jpg') }}" alt="Descripción de la imagen" class="w-1/3 ml-4 rounded-lg">
    </div>


    <div id="tiposModalidad" class="section-content">
        <h2 class="section-title">Tipos de Modalidad</h2>
        <p>En esta sección se describen los diferentes tipos de modalidades disponibles.</p>
        <table class="table">
            <thead>
                <tr>
                    <th>Modalidad</th>
                    <th>Descripción</th>
                    <th>Duración</th>
                    <th>Requisitos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pasantía</td>
                    <td>Experiencia práctica en un entorno laboral.</td>
                    <td>3 meses</td>
                    <td>Estudiante de último año.</td>
                </tr>
                <tr>
                    <td>Contrato de Aprendizaje</td>
                    <td>Formación práctica y teórica en una empresa.</td>
                    <td>6 meses</td>
                    <td>Menores de 25 años.</td>
                </tr>
                <tr>
                    <td>Vínculo Laboral</td>
                    <td>Relación laboral formal con una empresa.</td>
                    <td>Indefinido</td>
                    <td>Cumplimiento de requisitos del empleador.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Lobster&display=swap" rel="stylesheet">

    <!-- Sección Misión -->
    <div id="mision" class="section-content">
        <div class="flex items-center justify-between">
            <div class="text-section">
                <h2>Misión</h2>
                <p>La misión de la Etapa Productiva es promover la integración efectiva de los estudiantes en el entorno laboral, brindándoles la oportunidad de aplicar y perfeccionar los conocimientos adquiridos durante su formación académica. Este proceso se centra en fortalecer sus habilidades técnicas y desarrollar competencias transversales que les permitan adaptarse y responder a las demandas cambiantes del mercado laboral.

                    A través de experiencias prácticas supervisadas y orientadas, buscamos no solo mejorar la formación integral de los estudiantes, sino también impulsar su crecimiento personal y profesional. Nuestro objetivo es formar individuos competentes, comprometidos y preparados para enfrentar los desafíos de un entorno laboral globalizado, contribuyendo así al desarrollo y productividad de las organizaciones que los reciben, y creando un impacto positivo en la sociedad.






                    </p>
            </div>
            <div class="carrusel-container ml-8" style="max-width: 35%; width: 35%;">
                <div class="carousel-images">
                    <img src="{{ asset('img/webpng/image1.png') }}" alt="Imagen 1" style="width: 100%; height: auto;">
                    <img src="{{ asset('img/webpng/image copy.png') }}" alt="Imagen 2" style="width: 100%; height: auto;">
                    <img src="{{ asset('img/webpng/image copy 2.png') }}" alt="Imagen 3" style="width: 100%; height: auto;">
                    <img src="{{ asset('img/webpng/image2.png') }}" alt="Imagen 3" style="width: 100%; height: auto;">
                    <img src="{{ asset('img/webpng/image3.png') }}" alt="Imagen 3" style="width: 100%; height: auto;">
                    <img src="{{ asset('img/webpng/image.png') }}" alt="Imagen 3" style="width: 100%; height: auto;">

                    <!-- Agrega más imágenes aquí si lo deseas -->
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery y Slick JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

    <script>
     $(document).ready(function(){
    $('#carouselImages').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        autoplay: true,  // Activa el autoplay
        autoplaySpeed: 1000,  // Duración de 3 segundos entre cada imagen
    });
});

        $(document).ready(function(){
        $('.carousel-images').slick({
            autoplay: true,         // Activa el cambio automático
            autoplaySpeed: 4000,    // Cambia la imagen cada 3 segundos
            infinite: true,         // Ciclo infinito
            arrows: false,          // Desactiva los botones de navegación (opcional)
            dots: false,            // Desactiva los puntos de navegación
            fade: true,
            adaptiveHeight: true           // Efecto de desvanecimiento entre las imágenes
        });
    });
    </script>
</body>
</html>
