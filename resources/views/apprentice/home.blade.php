<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <style>

        .apprentice-page {
            padding: 3rem 0;
        }
        
        .container {
            max-width: 80rem;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        
        .card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            overflow: hidden;
        }
        
        .card-content {
            padding: 1.5rem;
        }
        
        h2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        
        h3 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }
        
        h4 {
            font-size: 1.125rem;
            font-weight: 600;
            margin-top: 1rem;
        }
        </style>
        <body>
              <form action="{{route('homeaprendiz.store')}}"  method="POST" enctype="multipart/form-data">
                @csrf 
                <main class="apprentice-page">
                    <div class="container">
                        <div class="card">
                            <div class="card-content">
                                <h2>APRENDIZ</h2>
                                <h3>{{ $apprentice->name }}</h3>
                                <p>Programa: {{ $apprentice->program }}</p>
                                <p>No. Ficha: {{ $apprentice->ficha }}</p>
            
                                <section class="instructor-info">
                                    <h4>Instructor Asignado</h4>
                                    <p>{{ $apprentice->trainer->name }}</p>
                                    <p>Correo: {{ $apprentice->trainer->correo }}</p>
                                    <p>Teléfono: {{ $apprentice->trainer->telefono }}</p>
                                </section>
            
                                <section class="timeline">
                                    <h4>LINEA TEMPORAL (Etapa de seguimiento)</h4>
                                    <!-- Add timeline component here -->
                                </section>
            
                                <section class="bitacoras">
                                    <h4>BITACORAS</h4>
                                    <!-- Add pie chart for bitacoras here -->
                                </section>
                            </div>
                        </div>
                    </div>
                </main>
               </form>
        
</body>
</html>