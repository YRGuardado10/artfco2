@extends('navbar')
@section('content')
<link href="css/ferrocarril.css" rel="stylesheet">
<div class="container-sec1">
    <div class="heading">
        Ferrocarril como medio de transporte 
    </div>
    <div class="paragrapgh">
        Entre la gran variedad de transportes terrestres el ferrocarril es uno de los más destacados, ya que cuenta con ventajas como bajas emisiones de gases de efecto invernadero o la capacidad de transportar cargas voluminosas, entre otras más de las que aquí hablaremos a continuación.
    </div>
</div>
<div class="container-sec2">
    <div class="container-info">
        <div class="linea"></div>
        <div class="container-sec3">
            <div class="info1">
                <div class="heading">
                    Ecológico
                </div>
                <div class="paragraph">
                    El ferrocarril es uno de los medios de transporte con menor tasa de emisiones 
                    de gases contaminantes, pues el ferrocarril nacional emite únicamente 41 
                    gramos de CO2 por cada kilómetro recorrido, mientras que los trenes más 
                    modernos emiten solamente 6 gramos de CO2 por kilómetro.
                </div>
            </div>
            <div class="info2">
                <div class="paragraph">
                    El migrar la forma en la que las empresas transportan mercancías de camiones de 
                    carga a ferrocarril generaría un ahorro de emisiones enorme, migrar tan solo el 
                    10% de carga y pasaje al transporte ferroviario disminuiría cerca de 8.38 millones 
                    de toneladas las emisiones de CO2 que son liberadas a la atmosfera. 
                </div>
            </div>
            <div class="imgsec1">
                <img src="./img/ilustraciones_pag/14-80.jpg" alt="">
            </div>
        </div>
        <div class="linea"></div>
        <div class="container-sec4">
            <div class="info1">
                <div class="heading">
                    Versatil  
                </div>
                <div class="paragraph">
                    El ferrocarril puede mover grandes cantidades y gran variedad de mercancías, 
                    pues existen muchos tipos de carros de carga permitiendo que sea posible llevar 
                    desde productos agroindustriales como café, maíz o trigo, permitiendo también 
                    el transporte de líquidos y gaseosos como vino, jugos, hidrogeno u oxígeno e 
                    incluso es posible transportar hasta automóviles nuevos. 
                </div>
            </div>
            <div class="info2">
                <div class="paragraph">
                    A pesar de los anteriormente mencionados, aún hay más variedad de tipos de mercancías 
                    que los ferrocarriles son capaces de transportar.
                    <br>
                    El transporte ferroviario además de contar con la flexibilidad de mover variedad de tipos de mercancía, también es uno de los medios de transporte más económicos pues las tarifas suelen ser fijas.
                </div>
            </div>
            <div class="imgsec2">
                <img src="./img/ilustraciones_pag/15-80.jpg"alt="">
            </div>          
        </div> 
        <div class="linea"></div> 
        <div class="container-sec5">
            <div class="info1">
                <div class="heading">
                   Seguro 
                </div>
                <div class="paragraph">
                    El transporte ferroviario es uno de los medios de transporte más seguros 
                    pues la cantidad de siniestros es muy baja, tan solo 264 reportes 
                    de siniestros durante el segundo trimestre de 2020, mientras que los 
                    accidentes viales ascienden hasta 301,678 registrados durante todo el 2020.
                </div>
                <div class="imgsec3">
                    <img src="./img/ilustraciones_pag/16-80.jpg" alt="">
                </div>
            </div>
            <div class="info2">
                <div class="heading">
                    Veloz
                </div>
                <div class="paragraph">
                    El transporte ferroviario es uno de los medios de transporte más veloces 
                    con una velocidad récord de 600 km/h (Tren bala de Maglev en China).
                    <br>
                    La mayoría de los trenes comerciales no alcanzan la velocidad récord, 
                    sin embargo, el promedio de velocidad se encuentra entre los 60 y 350 km/h, 
                    comparado con la velocidad promedio de viajar en automóvil en la ciudad 
                    de México (14 km/h) nos permite ahorrar mucho tiempo de viaje.
                </div>
                <div class="imgsec3">
                    <img src="./img/ilustraciones_pag/17-80.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-btn">
        <div class="linea"></div>
        <div class="container-btnsec1">
            <div class="heading">
                <b>¿Deseas mover cargamento?</b>
            </div>
            <div class="btns">
                    <div class="bt1">
                        <a href="https://ferromex.mx/ferromex-lo-mueve/ferromex-lo-mueve.jsp">
                            <button class="btn">
                                <div class="logo">
                                    <img src="../img/image 28.png" alt="">
                                </div>
                                <div class="txt">
                                    Grupo México Transportes (GMxT)
                                    <br>
                                    División de transportes de grupo México, entre sus servicios de 
                                    encuentra el trasporte de mercancías. 
                                </div>
                            </button>  
                        </a>
                    </div>
                    <div class="bt2">
                        <a href="https://www.kcsouthern.com/es-mx/ship-with-us/explore-shipping-options/carload">
                            <button class="btn">
                                <div class="logo">
                                    <img src="../img/image 29.png" alt="">
                                </div>
                                <div class="txt">
                                    Kansas City Southern 
                                    <br>
                                    Empresa ferroviaria dedicada al trasporte de cargas con servicio 
                                    de transporte entre ciudades del norte y centro de México y algunos 
                                    estados de EE.UU
                                </div>
                            </button>  
                        </a>
                    </div>
            </div>
        </div>
        <div class="container-btnsec2">
            <div class="heading">
                <b>¿Quieres unirte a un club de ciclistas?</b>
            </div>
            <div class="btns">
                    <div class="bt1">
                        <a href="https://www.trenmaya.gob.mx/">
                            <button class="btn">
                                <div class="logo">
                                    <img src="../img/image 31.png" alt="">
                                </div>
                                <div class="txt">
                                    Tren Maya (1500 km)
                                    <br>
                                    Cerca de 1,500 Kilómetros  de tren que se conectaran las principales 
                                    regiones de la península de Yucatán, desde sus grandes centros 
                                    turísticos hasta sus comunidades rurales.
                                </div>
                            </button>  
                        </a>
                    </div>
                    <div class="bt2">
                        <a href="http://treninterurbano.cdmx.gob.mx/">
                            <button class="btn">
                                <div class="logo1">
                                    <img src="../img/image 32.png" alt="">
                                </div>
                                <div class="txt">
                                    Tren interurbano México/Toluca (57 km)
                                    <br>
                                    El tren interurbano Toluca/valle de México es un proyecto que 
                                    contactará la zona metropolitana del valle de Toluca con el poniente 
                                    de la Ciudad de México 
                                </div>
                            </button>  
                        </a>
                    </div>
                    <div class="bt3">
                        <a href="http://www5.diputados.gob.mx/index.php/camara/Centros-de-Estudio/CESOP/Novedades/Carpeta-informativa.-El-proyecto-del-tren-transistmico">
                            <button class="btn">
                                <div class="logo1">
                                    <img src="../img/image 33.png" alt="">
                                </div>
                                <div class="txt">
                                    Tren Transistmico (300 Km)
                                    <br>
                                    El ferrocarril del Istmo de Tehuantepec podrá transportar 
                                    contenedores y pasajeros, a fin de conectar los puertos de 
                                    Salina Cruz, en Oaxaca y Coatzacoalcos, en Veracruz. 
                                </div>
                            </button>  
                        </a>
                    </div>
            </div>
        </div>
        <div class="linea"></div>
    </div>
</div>        
@endsection