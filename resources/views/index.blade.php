<!doctype html>
<html lang="en">
  <head>
    <title>Artfco2</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">  
  </head>
  <body>
        <header class="header_css ">
            <div class="degradado">

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
                <div class="title1">
                    <div class="heading text-white">
                        Cálculo y compensación de huella de carbono
                    </div>
                </div>
            </div>          
        </header>
        <div class="container-sec1">
            <div class="info">
                <div class="heading">
                    ¿Qué es la huella de carbono?
                </div>
                <div class="paragraph">
                    La huella de carbono es una métrica ambiental que calcula la totalidad 
                    de emisiones de gases de efecto invernadero (GEI), generadas directa o 
                    indirectamente por una persona, organización, empresa o incluso productos 
                    o servicios. La huella de carbono se mide en “masa de CO2 equivalente” 
                    (CO2-eq), que trata de equiparar los otros gases de efecto invernadero 
                    que son producidos a la par que el CO2, esto debido a que el CO2 es el 
                    principal y más abundante de estos gases.*
                </div>
            </div>
        </div>
        <div class="container-sec2">
            <div class="images">
                <div class="img1 textimg1 text-white">
                    <div class="">
                        Fotos: Archivo/Iván Stephens/EL UNIVERSAL(2016-2019)/En tan solo 3 años 
                        ha aumentado drásticamente la cantidad de partículas PM2.5 y Ozono en 
                        la Zona Metropolitana del Valle de México.
                    </div>
                </div>
            </div>
            <div class="images">
                <div class="img2 textimg2 text-white">
                    <div class="">
                        Fotos: SANTIAGO ARAU y Facebook Damián Sánchez/Uno de los estados más afectados 
                        es el de Chiapas cuyos territorios como la selva Lacandona en el municipio de Marqués 
                        de Comillas o la Laguna de Metzabok, se han visto gravemente alterados.
                    </div>
                </div>
            </div>
            <div class="images">
                <div class="img3 textimg3 text-white">
                    <div class="">
                        Fotos: María Paula Martínez/ UNAM Especialistas del Instituto de Geofísica 
                        de la UNAM declaran extinto el glaciar de Ayoloco en el Iztaccíhuatl. 
                        Colocan placa de la deshonra.
                    </div>
                </div>
            </div>
        </div>
        <div class="container-sec3">
            <div class="info">
                <div class="heading">
                    ¿Cómo calcular tu huella de carbono?
                </div>
                <div class="paragraph">
                    Para poder realizar una estimación sobre tu huella de carbono personal 
                    te recomendamos los siguientes sitios:
                </div>
            </div>
            <div class="buttons">
                <div class="btn">
                    <a href="https://footprintcalculator.henkel.com/mx">
                        <button>
                            <div class="logo">
                                <img src="../img/image 8.png" alt="">
                            </div>
                            <div class="infobut">
                                Calculadora de huella de carbono Henkel, empresa alemana de productos 
                                de limpieza
                            </div>
                        </button>
                    </a>
                </div>
                <div class="btn">
                    <a href="https://www.footprintcalculator.org/home/es">
                        <button>
                            <div class="logo">
                                <img src="../img/image 9.png" alt="">
                            </div>
                            <div class="infobut">
                                Calculadora Global footprint netwook, ONG de protección al medio 
                                ambiente
                            </div>
                        </button>
                    </a>
                </div>
                <div class="btn">
                    <a href="{{route('transport')}}">
                        <button>
                            <div class="logo">
                                <img src="../img/image 2.png" alt="">
                            </div>
                            <div class="infobut">
                                Calculadora de la agencia reguladora de trasporte ferroviario 
                                <br>
                                Calculadora de CO2, generada a partir de viajes constates
                            </div>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-footer">
            <div class="info">
                <div class="ast">*</div>
                <div class="paragraph">
                    ¿Sabes cuantos arboles harían falta para compensar tu huella de carbono? Si quieres saberlo……
                </div>
            </div>
            <div class="button2">
                <a href="{{route('calculo')}}">
                    <button>
                        Da click aquí
                    </button>
                </a>
            </div>
        </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>