<!doctype html>
<html lang="en">
  <head>
    <title>Artfco2</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/nav.css">  
  </head>
  <body>
        <header class="header_css ">       
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img class="logo" src="./img/image 16.png">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end text-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active px-xl-4 px-lg-3 px-md-1 pt-3" aria-current="page" href="{{route('home')}}">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active px-xl-4 px-lg-3 px-md-1 pt-3" aria-current="page" href="{{route('calculo')}}">Cálculo de árboles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active px-xl-4 px-lg-3 px-md-1 pt-3" aria-current="page" href="{{route('alternative')}}">Alternativa para compensar huella de carbono</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active px-xl-4 px-lg-3 px-md-1 pt-3" aria-current="page" href="{{route('medio')}}">Medios alternativos de transporte</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active px-xl-4 px-lg-3 px-md-1 pt-3" aria-current="page" href="{{route('stats')}}">Estadisticas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active px-xl-4 px-lg-3 px-md-1 pt-3" aria-current="page" href="{{route('costo')}}">Cálculo costo de viaje (automóvil)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active px-xl-4 px-lg-3 px-md-1 pt-3" aria-current="page" href="{{route('mapa')}}">Talleres de mantenimiento</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
        </header>
    <section>
        @yield('content')
    </section>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>