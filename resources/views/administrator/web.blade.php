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


<<<<<<< HEAD
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
=======
        <!-- Sección Tipos de Modalidad -->
<section id="tiposModalidad" class="mt-16 bg-white p-8 border border-gray-200 rounded-lg shadow-sm">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Tipos de Modalidad</h2>
    <p class="text-gray-700 mb-6">Cada modalidad de la etapa productiva está diseñada para adaptarse a las distintas necesidades de formación y las características del entorno laboral, permitiendo que los aprendices adquieran experiencia según sus intereses y las oportunidades disponibles. A continuación, se describen las modalidades más comunes, cada una con sus beneficios y características principales:</p>
    <table class="w-full text-gray-700 text-sm bg-white rounded-lg shadow">
        <thead>
            <tr class="bg-[#009e00] text-white">
                <th class="py-3 px-4">Modalidad</th>
                <th class="py-3 px-4">Descripción</th>
                <th class="py-3 px-4">Duración</th>
                <th class="py-3 px-4">Requisitos</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <tr>
                <td class="py-3 px-4">Pasantía</td>
                <td class="py-3 px-4">El aprendiz realiza prácticas en una empresa para aplicar lo aprendido en su formación académica. Es ideal para estudiantes que desean experimentar el entorno laboral y poner en práctica sus conocimientos en un contexto real.</td>
                <td class="py-3 px-4">3 a 6 meses</td>
                <td class="py-3 px-4">Estudiante de último año con disponibilidad para aprender y aportar, con un enfoque teórico sólido y ganas de integrarse en un equipo profesional.</td>
            </tr>
            <tr>
                <td class="py-3 px-4">Contrato de Aprendizaje</td>
                <td class="py-3 px-4">Combina la formación teórica con la práctica laboral, donde el aprendiz se convierte en un colaborador activo dentro de una empresa. Además, recibe una remuneración acorde al tipo de contrato.</td>
                <td class="py-3 px-4">6 meses a 2 años</td>
                <td class="py-3 px-4">Menores de 25 años con formación técnica o tecnológica, con disposición para aprender y comprometerse a tiempo completo con la empresa.</td>
            </tr>
            <tr>
                <td class="py-3 px-4">Vínculo Laboral</td>
                <td class="py-3 px-4">El aprendiz trabaja directamente en una empresa bajo un contrato formal de trabajo, con un salario acorde a las normativas laborales. Esta modalidad permite una inmersión total en el entorno laboral, con el aprendizaje directo de tareas profesionales.</td>
                <td class="py-3 px-4">Indefinido</td>
                <td class="py-3 px-4">Cumplimiento de los requisitos específicos establecidos por la empresa, que generalmente incluyen experiencia previa o habilidades específicas relacionadas con el puesto.</td>
            </tr>
            <tr>
                <td class="py-3 px-4">Unidad Productiva Familiar</td>
                <td class="py-3 px-4">El aprendiz se involucra en el desarrollo de un emprendimiento familiar, aplicando sus conocimientos para fortalecer y expandir el negocio. En esta modalidad, los aprendices ayudan a mejorar la gestión y operatividad de una unidad familiar productiva.</td>
                <td class="py-3 px-4">Variable, según el plan de negocio</td>
                <td class="py-3 px-4">Viabilidad del proyecto, apoyo familiar y compromiso con los objetivos empresariales, especialmente en términos de la expansión y sostenibilidad del emprendimiento.</td>
            </tr>
            <tr>
                <td class="py-3 px-4">Proyecto Productivo Empresarial</td>
                <td class="py-3 px-4">Esta modalidad permite a los aprendices participar en proyectos innovadores dentro de las empresas, fomentando su creatividad y capacidad de resolver problemas. Se busca que los aprendices generen soluciones prácticas y aplicables para las necesidades de la empresa.</td>
                <td class="py-3 px-4">Variable, dependiendo del proyecto</td>
                <td class="py-3 px-4">Viabilidad y factibilidad del proyecto, habilidades en investigación, desarrollo e innovación, y capacidad para trabajar de forma independiente y colaborativa en equipos multidisciplinarios.</td>
            </tr>
        </tbody>
    </table>
    <p class="text-gray-700 leading-relaxed mt-4">
        Cada modalidad tiene un enfoque específico que busca no solo el desarrollo profesional de los aprendices, sino también la aportación de valor a las empresas o iniciativas productivas con las que se colaboran. Así, se genera un entorno de aprendizaje mutuamente beneficioso. Al participar en estas modalidades, los aprendices no solo adquieren conocimientos prácticos que aumentan su empleabilidad, sino que también se convierten en parte integral de procesos productivos reales, contribuyendo al éxito de las organizaciones.
    </p>
    <p class="text-gray-700 leading-relaxed mt-4">
        Además, estas modalidades ofrecen flexibilidad para adaptarse a las diferentes necesidades de los aprendices y las empresas. Algunas pueden requerir un mayor compromiso a largo plazo, como el contrato de aprendizaje o el vínculo laboral, mientras que otras, como las pasantías, ofrecen oportunidades más breves pero igualmente valiosas. Por esta razón, es importante elegir la modalidad que mejor se adapte a los objetivos profesionales de los aprendices y a las capacidades de las empresas.
    </p>
</section>

>>>>>>> 3952b8f79cfc3f803e873c28644ffe68929d3b28

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
