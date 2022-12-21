@extends('navbar')
@section('content')
<link href="css/medios.css" rel="stylesheet">
<div class="container-heading">
              <b>Alternativas para compensar huella de carbono</b>
          </div>
          <div class="container-info">
              <div class="heading">
                  La relación entre gases invernaderos y el transporte. 
              </div>
              <div class="paragraph">
                  Con el constante aumento de gases de efecto invernadero, acumulándose en la atmósfera debido al uso de medios de transporte contaminantes y poco eficientes, así como la creciente cantidad de congestionamiento vial, producida por el número de vehículos ocupando espacio, nace la necesidad de recurrir a medios de transporte con bajas emisiones contaminantes y más eficientes en cuanto a la capacidad de pasajeros.
Según el Instituto Nacional de Estadística y Geografía (INEGI), entre 2017 y 2019 la cantidad de vehículos en el valle de México se elevó a casi 12 millones de unidades, de las aproximadamente más de 33 millones de unidades registradas en el país.*
Además, de acuerdo al Instituto Mexicano para la Competitividad, en 2017 se registró que en la zona del Valle de México la velocidad de traslado promedio en horas pico es de 6.42 km/h.**
             </div>
          </div>
          <div class="container-image">
              <img src="img/image 17.png" alt="">
              <img src="img/image 18.png" alt="">
          </div>
          <div class="container-info">
          <div class="paragraph">
              La creciente cantidad de automóviles en la ciudad y la baja eficiencia de movilidad en horas pico, hacen que elegir el automóvil particular como medio de transporte regular no sea lo ideal. Sin embargo, si esto no es suficiente para considerar cambiar de tipo de transporte, aún nos queda el impacto ambiental que este tipo de vehículos genera, como se ilustra en la siguiente gráfica.
          </div>  
          </div>
          <div class="container-image2">
              <img src="img/image 19.png" alt="">
          </div>
          <div class="container-info">
          <div class="paragraph">
              En el valle de México la distancia promedio de un viaje en automóvil es de 7 a 10 km** y teniendo en cuenta la cantidad de emisiones en gramos de CO2 que generan distintos tipos de vehículos por kilómetro (ver gráfica anterior), podremos calcular la cantidad de emisiones que generamos por un cada viaje.
El uso de vehículos impulsados por gasolina es un gran foco de contaminantes, pues teniendo en cuenta lo anterior, podemos observar que los automóviles de este tipo generan alrededor de 2.54 kg de CO2 (automóvil grande) por un solo viaje de 9 km, teniendo en cuenta que un viaje de ida y vuelta (18 km) suele realizarse alrededor de unas 200 veces en un periodo de un año tenemos una huella de carbono de 1,018.62 kg de CO2, es decir 1.01 toneladas de CO2 en un año.
</div>          
</div>
<div class="container-info2">
<div class="paragraph">
    Si en cambio usamos un vehículo más eficiente, ecológicamente hablando, como lo es el ferrocarril, podemos observar que por un viaje de 9 km se generan alrededor de 370.35 gramos de CO2 y si hacemos el ejemplo anterior, obtenemos que un viaje de ida y vuelta (18 km) genera una huella de carbono de 148.14 kg de CO2 en un año. 
</div>
</div>
          <div class="fuente"> 
              <b>*Fuente: Instituto Nacional de Estadística y Geografía https://www.inegi.org.mx/temas/vehiculos/</b>
          </div>
          <div class="ctn">
              ¿Quieres conocer más? 
          </div>
          <div class="container-btn1">
              <a href="{{route('bici')}}">
                 <button>
                     Bicicleta 
                 </button>
              </a>
          </div>
          <div class="container-btn2">
              <a href="{{route('ferro')}}">
                 <button>
                     Ferrocarril 
                 </button>
              </a>
           </div>
@endsection