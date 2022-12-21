@extends('navbar')
@section('content')
<link href="css/bicicleta.css" rel="stylesheet">
<div class="container-sec1">
    <div class="heading">
        <b>La bicicleta como medio de transporte</b>
    </div>
    <div class="paragraph">
        Con el paso de los años, la bicicleta ha tomado una mayor importancia en la 
        movilidad y la salud de las personas, por lo que aquí te presentamos las 
        principales razones por las cuales deberías pensar en utilizar este medio de transporte.
    </div>
</div>
<div class="container-sec2">
    <div class="container-info">
        <div class="linea"></div>
        <div class="container-sec3">
            <div class="info1">
                <div class="heading">
                    <b>Eficiente</b>
                </div>
                <div class="paragraph">
                    Una bicicleta puede cubrir de manera eficiente viajes de hasta 7 km*, lo que es un 
                    dato importante, ya que la mitad de los viajes en automóvil recorren menos de 5 km, 
                    distancia que en terreno plano puede recorrer una bici entre 10 y 20 minutos, 
                    alcanzando velocidades de hasta 30 km/h.La bicicleta permite una flexibilidad en la 
                    duración del viaje, ya que al ocupar menos espacio, evita con mayor facilidad los 
                    embotellamientos viales de los viajes en automóvil.
                </div>
            </div>
            <div class="info2">
                <div class="paragraph">
                    De la misma forma, en trayectos cortos (menores a 7 km), la velocidad de la bicicleta 
                    es competitiva con la del transporte público, debido a que el ciclo 
                    "caminar-esperar-autobús-caminar" suele tomar más tiempo que el transporte de un punto 
                    A a un B en bicicleta. Las bicicletas son vehículos pequeños, ligeros, ecológicos y 
                    silenciosos, lo que los hace faciles de conducir y aparcar, ademas son de fácil 
                    manutención, ya que una bici cuesta 30-40 veces menos que un automóvil.
                </div>
            </div>
            <div class="imgsec3">
                <img src="./img/ilustraciones_pag/09-80.jpg" alt="">
            </div>
        </div>
        <div class="linea"></div>
        <div class="container-sec4">
            <div class="info1">
                <div class="txt">
                    <div class="heading">
                        <b>Accessible</b>
                    </div>
                    <div class="paragraph">
                        Cualquier persona con un estado de salud normal puede usar bicicleta, 
                        no es necesario ser atleta: hombres, mujeres, niños y hasta personas de 
                        edad avanzada pueden usarla.
                    </div>
                </div>
                <div class="img1sec4">
                    <img src="./img/ilustraciones_pag/10-80.jpg" class="imgtxt1" alt="">
                </div>
            </div>
            <div class="info2">
                <div class="txt">
                    <div class="heading">
                        <b>Autónoma</b>
                    </div>
                    <div class="paragraph">
                        El uso de bicicleta se puede realizar a cualquier hora del día, por 
                        lo que es más práctico que esperar por un autobús.
                    </div>
                </div>
                <div class="img2sec4">
                    <img src="./img/ilustraciones_pag/11-80.jpg" class="imgtxt2" alt="">
                </div>
            </div>
            <div class="info3">
                <div class="txt">
                    <div class="heading">
                        <b>Saludable</b>
                    </div>
                    <div class="paragraph">
                        Realizar ciclismo constantemente ayuda a reducir peso y quemar grasas, 
                        es un deporte de bajo impacto lo cual es ideal para personas con problemas 
                        de articulaciones y ayuda a fortalecer el sistema cardiovascular.
                    </div>
                </div>
                <div class="img3sec4">
                    <img src="./img/ilustraciones_pag/12-80.jpg" class="imgtxt3" alt="">
                </div>
            </div>
        </div>
        <div class="linea"></div>
        <div class="container-sec5">
            <div class="info1">
                <div class="txt">
                    <div class="heading">
                        <b>Accessible</b>
                    </div>
                    <div class="paragraph">
                        Cuando circula una bicicleta no emite contaminantes a la atmósfera aunque 
                        durante su ciclo de vida completo desde fabricación hasta la conversión en 
                        residuo la cantidad de contaminantes que genera es tan solo de 5g de CO2 
                        por km*.<br>
                        La circulación de bicicletas reduce notablemente la contaminación auditiva.
                    </div>
                </div>
                <div class="img1sec5">
                    <img src="./img/ilustraciones_pag/13-80.jpg" class="imgtxt1" alt="">
                </div>
            </div>
            <div class="info2">
                <div class="txt">
                    <div class="paragraph">
                        Pese a la gran cantidad de ventajas con las que contamos al usar este medio de 
                        transporte, este no es perfecto y aun cuenta con algunas desventajas como es la 
                        barrera climática
                        <br>
                        <br>
                        *Fuente: Ecoticias.com <a href="https://www.ecoticias.com">https://www.ecoticias.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-btn">
        <div class="linea"></div>
        <div class="container-btnsec1">
            <div class="heading">
                <b>¿No cuentas con una bicicleta en tu hogar?</b>
            </div>
            <div class="btns">
                    <div class="bt1">
                        <a href="https://www.ecobici.cdmx.gob.mx/">
                            <button class="btn">
                                <div class="logo">
                                    <img src="../img/image 20.png" alt="">
                                </div>
                                <div class="txt">
                                    Calculadora de la agencia reguladora de trasporte ferroviario 
                                    Calculadora de CO2, generada a partir de viajes constates
                                </div>
                            </button>  
                        </a>
                    </div>
                    <div class="bt2">
                        <a href="https://www.mibici.net">
                            <button class="btn">
                                <div class="logo">
                                    <img src="../img/image 22.png" alt="">
                                </div>
                                <div class="txt">
                                    Sistema de bicicletas públicas del área metropolitana de Guadalajara
                                    <br>
                                    Usuarios con una suscripción puede realizar trayectos menores a 30 minutos. 
                                </div>
                            </button>  
                        </a>
                    </div>
                    <div class="bt3">
                        <a href="https://www.dgsgm.unam.mx/bicipuma">
                            <button class="btn">
                                <div class="logo">
                                    <img src="../img/image 21.png" alt="">
                                </div>
                                <div class="txt">
                                    Calculadora de la agencia reguladora de trasporte ferroviario 
                                    Calculadora de CO2, generada a partir de viajes constates
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
                        <a href="https://bicitekas.org/">
                            <button class="btn">
                                <div class="logo">
                                    <img src="../img/image 23.png" alt="">
                                </div>
                                <div class="txt">
                                    Asociación de ciclistas cuyo objetivo se centra en aumentar el uso 
                                    de la bicicleta en la Ciudad de México como un medio de transporte 
                                    seguro, saludable y sostenible.
                                </div>
                            </button>  
                        </a>
                    </div>
                    <div class="bt2">
                        <a href="https://www.facebook.com/muyu.bikers/">
                            <button class="btn">
                                <div class="logo1">
                                    <img src="../img/image 24.png" alt="">
                                </div>
                                <div class="txt">
                                    Grupo de ciclismo nocturno con salidas cada jueves y domingo.
                                </div>
                            </button>  
                        </a>
                    </div>
            </div>
        </div>
        <div class="container-btnsec3">
            <div class="heading">
                <b>¿No sabes andar en bicicleta?</b>
            </div>
            <div class="btns">
                    <div class="bt1">
                        <a href="http://data.sedema.cdmx.gob.mx/mueveteenbici/index.php?option=com_content&view=article&id=70&Itemid=75">
                            <button class="btn">
                                <div class="logo">
                                    <img src="../img/BiciEntrenate.png" alt="">
                                </div>
                                <div class="txt">
                                    Programa diseñado para que familias puedan asistir a mejorar sus 
                                    habilidades sobre la bicicleta o aprender a andar en ella.
                                </div>
                            </button>  
                        </a>
                    </div>
            </div>
        </div>
        <div class="container-btnsec4">
            <div class="heading">
                <b>Apps para ciclistas</b>
            </div>
            <div class="btns">
                    <div class="bt1">
                        <a href="https://www.dezba.mx/">
                            <button class="btn">
                                <div class="logo">
                                    <img src="../img/image 25.png" alt="">
                                </div>
                                <div class="txt">
                                    Aplicación de renta de bicicletas eléctricas o mecánicas compartidas por 
                                    subscripción mensual o anual.
                                </div>
                            </button>  
                        </a>
                    </div>
                    <div class="bt2">
                        <a href="https://www.strava.com/">
                            <button class="btn">
                                <div class="logo">
                                    <img src="../img/image 26.png" alt="">
                                </div>
                                <div class="txt">
                                    Aplicación de monitoreo de velocidad, distancia, calorías quemadas y rutas 
                                    de ciclismo con la posibilidad de mostrar un ranking de tiempos de ruta entre ciclistas. 
                                </div>
                            </button>  
                        </a>
                    </div>
                    <div class="bt3">
                        <a href="https://maphub.net/Proyecto-BISIGET/mapciclovias">
                            <button class="btn">
                                <div class="logo1">
                                    <img src="../img/image 27.png" alt="">
                                </div>
                                <div class="txt">
                                    Aplicación que muestra mapas de la infraestructura ciclista de la República Mexicana 
                                    con fotografías, longitudes y variedad de datos adicionales
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