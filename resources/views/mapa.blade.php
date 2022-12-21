<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="./resources/ol.css">
        <link rel="stylesheet" href="resources/fontawesome-all.min.css">
        <link rel="stylesheet" href="./resources/ol-layerswitcher.css">
        <link rel="stylesheet" href="./resources/qgis2web.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/nav.css">
        <style>
.search-layer {
  top: 100px;
  left: .5em;
}
.ol-touch .search-layer {
  top: 130px;
}
</style>
        <style>
        html, body {
            background-color: #ffffff;
        }
        .ol-control button {
            background-color: #f7fcff !important;
            color: #000000 !important;
            border-radius: 0px !important;
        }
        .ol-zoom, .geolocate, .gcd-gl-control .ol-control {
            background-color: rgba(255,255,255,.4) !important;
            padding: 3px !important;
        }
        .ol-scale-line {
            background: none !important;
        }
        .ol-scale-line-inner {
            border: 2px solid #f7fcff !important;
            border-top: none !important;
            background: rgba(255, 255, 255, 0.5) !important;
            color: black !important;
        }
        </style>
<style>
.tooltip {
  position: relative;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 4px;
  color: white;
  padding: 4px 8px;
  opacity: 0.7;
  white-space: nowrap;
}
.tooltip-measure {
  opacity: 1;
  font-weight: bold;
}
.tooltip-static {
  background-color: #ffcc33;
  color: black;
  border: 1px solid white;
}
.tooltip-measure:before,
.tooltip-static:before {
  border-top: 6px solid rgba(0, 0, 0, 0.5);
  border-right: 6px solid transparent;
  border-left: 6px solid transparent;
  content: "";
  position: absolute;
  bottom: -6px;
  margin-left: -7px;
  left: 50%;
}
.tooltip-static:before {
  border-top-color: #ffcc33;
}
.measure-control {
  top: 65px;
  left: .5em;
}
.ol-touch .measure-control {
  top: 80px;
}
</style>
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        <title>Artfco2</title>
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
                                    <a class="nav-link active px-xl-4 px-lg-3 px-md-1 pt-3" aria-current="page" href="https://artfco2-travelcost.herokuapp.com/">Cálculo costo de viaje (automóvil)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active px-xl-4 px-lg-3 px-md-1 pt-3" aria-current="page" href="{{route('mapa')}}">Talleres de mantenimiento</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
        </header>
        <div id="map">
            <div id="popup" class="ol-popup">
                <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                <div id="popup-content"></div>
            </div>
        </div>
        <script src="resources/qgis2web_expressions.js"></script>
        <script src="resources/polyfills.js"></script>
        <script src="./resources/functions.js"></script>
        <script src="./resources/ol.js"></script>
        <script src="./resources/ol-layerswitcher.js"></script>
        <script src="layers/LimitesEstatales_1.js"></script><script src="layers/LneasdeFerrocarril_2.js"></script><script src="layers/PuntosdelaCapa_3.js"></script>
        <script src="styles/LimitesEstatales_1_style.js"></script><script src="styles/LneasdeFerrocarril_2_style.js"></script><script src="styles/PuntosdelaCapa_3_style.js"></script>
        <script src="./layers/layers.js" type="text/javascript"></script> 
        <script src="./resources/Autolinker.min.js"></script>
        <script src="./resources/qgis2web.js"></script>
    </body>
</html>