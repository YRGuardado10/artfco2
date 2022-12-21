@extends('navbar')
@section('content')
<link rel="stylesheet" href="./css/alternativa.css">
<div class="container-sec1">
    <div class="heading">
        <b>Alternativas para compensar la huella de carbono</b>
    </div>

</div>
<div class="container-sec2">
    <div class="info1">
        <div class="heading">
            <b>¿Por qué conocer y compensar nuestra huella de carbono? </b>
        </div>
        <div class="paragraph">
            Conocer el tamaño de nuestra huella de carbono es importante, ya que nos 
            permite concientizar y modificar nuestros hábitos para reducir las emisiones 
            de CO2 asociadas a nuestro estilo de vida.
        </div>
    </div>
    <div class="info2">
        <div class="paragraph">
            Compensar nuestra huella de carbono consiste en la aportación voluntaria de una 
            cantidad económica variable, para diversos proyectos de reforestación, generación 
            y ahorro de energía sostenible o tratamiento de residuos.
        </div>
        <div class="img1sec2">
            <img src="./img/ilustraciones_pag/01-80.jpg" alt="">
        </div>
    </div>
    <div class="info3">
        <div class="paragraph">
            Aunqué no es la única forma, entre las acciones que podemos realizar, se encuentra 
            el apoyar como voluntarios a organizaciones en sus labores de reforestación o mediante 
            pequeñas acciones que listamos en la sección de "¿Cómo reducir tu huella de carbono?", 
            ubicada al final de esta página.
        </div>   
        <div class="img2sec2">
            <img src="./img/ilustraciones_pag/02-80.jpg" alt="">
        </div>
    </div>
    <div class="info4">
        <div class="cite">
            <b>“Si realizas a partir de ahora algunas de estas ideas, tu huella de carbono comenzará a disminuir 
            y así podrás ayudar al medio ambiente a su conservación”</b>
        </div>
        <div class="img2sec2">
            <img src="./img/ilustraciones_pag/03-80.jpg" alt="">
        </div>
    </div>
</div>
<div class="linea"></div>
<div class="container-sec3">
    <div class="info1">
        <div class="heading">
            ¿Cómo compensar tu huella de carbono?
        </div>
        <div class="paragraph">
            Para realizar una compensación de tu huella de carbono personal te recomendamos las 
            siguientes opciones:
        </div>
    </div>
    <div class="buttons">
        <div class="btn">
            <a href="https://offset.climateneutralnow.org/AllProjects">
                <button>
                    <div class="logo">
                        <img src="./img/image 14.png" alt="">
                    </div>
                    <div class="txt">
                        Plataforma de compensación de las Naciones Unidas
                        <br>
                        Plataforma de compensacion en proyectos de mitigacion de Gases de Efecto Invernadero (GEI) 
                    </div>
                </button>
            </a>
        </div>
        <div class="btn">
            <a href="https://www.reforestamosmexico.org/adoptaunarbol">
                <button>
                    <div class="logo">
                        <img src="./img/image 15.png" alt="">
                    </div>
                    <div class="txt">
                        Adopta un árbol con Reforestamos México
                        <br>
                        Mediante una contribución económica mínima adopta un árbol durante un periodo de 3 años y recibe un certificado de adopción 
                    </div>
                </button>
            </a>
        </div>
    </div>
</div>
<div class="linea"></div>
<div class="container-sec4">
    <div class="left">
        <div class="container-sec5">
            <div class="info1">
                <div class="heading">
                    <b>Aquí se muestran 5 tips para reducir tu huella de carbono</b>
                </div>
                <div class="paragraph">
                    Actualmente nos encontramos en un momento crítico en el que tenemos la oportunidad 
                    de cambiar el futuro de nuestro planeta y así tener un futuro mejor para las próximas 
                    generaciones, si no actuamos hoy puede que no tengamos un mañana para hacerlo.
                </div>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="container-sec6">
            <div class="info1">
                <div class="heading">
                    <b>Usa focos ahorradores</b>
                </div>
                <div class="paragraph">
                    Realiza el cambio a focos ahorradores de energía de luz LED de bajo consumo en lugar de 
                    los tradicionales focos incandecentes, así como electrodomésticos de bajo consumo 
                    energético.
                </div>
                <div class="img1sec6">
                    <img src="./img/ilustraciones_pag/04-80.jpg" alt="">
                </div>
            </div>
            <div class="info2">
                <div class="heading">
                    <b>Si no lo usas desconéctalo</b>
                </div>
                <div class="paragraph">
                    Diversos aparatos eléctricos como los cargadores de teléfonos celulares siguen 
                    consumiendo energía incluso cuando no se utilizan. 
                </div>
                <div class="img2sec6">
                    <img src="./img/ilustraciones_pag/05-80.jpg" alt="">
                </div>
            </div>
            <div class="info3">
                <div class="heading">
                    <b>Usa fuentes de energía renovable</b>
                </div>
                <div class="paragraph">
                    Los calentadores de agua o paneles solares no emiten gases de efecto invernadero y 
                    ayudan a ahorrar gas y electricidad y sus respectivos costos.
                </div>
                <div class="img3sec6">
                    <img src="./img/ilustraciones_pag/06-80.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="container-sec7">
            <div class="info1">
                <div class="heading">
                    <b>Usa medios alternos de transporte</b>
                </div>
                <div class="paragraph">
                    Algunos medios de transporte, como los automóviles producen gran cantidad de gases 
                    contaminantes, por eso es aconsejable utilizar medios de transporte alternativos de 
                    bajas emisiones, como el tren, la bicicleta o incluso caminar.
                </div>
                <a href="{{route('medio')}}"class="a1">
                    <button>
                        Conoce más
                    </button>
                </a>
                <div class="img1sec7">
                    <img src="./img/ilustraciones_pag/07-80.jpg" alt="">
                </div>
            </div>
            <div class="info2">
                <div class="heading">
                    <b>Recicla</b>
                </div>
                <div class="paragraph">
                    Reduce la cantidad de desechos que generas, reutiliza la mayor cantidad posible y 
                    recicla para aprovechar materiales y crear nuevos productos.
                </div>
                <a href="#"class="a2">
                    <button>
                        Conoce más
                    </button>
                </a>
                <div class="img2sec7">
                    <img src="./img/ilustraciones_pag/08-80.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection