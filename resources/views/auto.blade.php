@extends('navbar')
@section('content')
<link rel="stylesheet" href="./css/auto.css">
    @if (isset($_GET['com']))
        <div class="section1">
            <div class="heading">
                <h2>Costo por Viaje</h2>
            </div>
        </div>
                <div class="section3">
                    <div class="formulario">
                        <form>
                            <div class="resultados">
                                <div class="costoviaje">
                                    <h2>El Costo total del viaje de {{$travkm}} km es:</h2>
                                    <p>${{$cosviaje}}</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @endif
    @if (isset($_GET['env']))
        <div class="section2">
            <div class="formulario">
                <form>
                    <div class="kiloanual">
                        <div class="heading">
                        ¿Conoce su recorrido anual?
                    </div>
                    <div class="rdokm">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdokm" id="Yes" value="1">
                            <label class="form-check-label" for="rdokmn">
                                Sí
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdokm" id="No" value="0" checked>
                            <label class="form-check-label" for="rdokm">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="numkm">
                    <div class="heading">
                        Ingrese su kilometraje por año
                    </div>
                    <div class="txtkm">
                        <input class=" py-3 input-- imdays text"
                        type="number" min="0" max="500000" require step="0" disabled=""name="numkm" placeholder=" Ingrese su kilometraje por año" id="numkm">
                     </div>
                </div>
                <div class="modelocarro">
                    <div class="heading">
                        ¿Conoce el modelo de su auto?
                    </div>
                    <div class="rdomodelo">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdomodelo" id="Yes1" value="1" checked>
                            <label class="form-check-label" for="rdomodelo">
                                Sí
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdomodelo" id="No1" value="0">
                            <label class="form-check-label" for="rdomodelo">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="vehiclemodel">
                    <div class="heading">
                        Ingrese el modelo del vehiculo
                    </div>
                    <div class="model">
                        <select class="form-select" aria-label="Default select example" id="model" required name="model">
                            <option value>Elige la marca de tu vehiculo</option>
                            @if ($_REQUEST['year']==1)
                                @foreach ($cars10 as $car)
                                <option name="model" id='{{$car->id}}' value="{{$car->id}}" required step="0">{{$car->brand}} {{$car->car_model}}</option>
                                @endforeach
                            @elseif ($_REQUEST['year']==2)
                                @foreach ($cars11 as $car)
                                    <option name="model" id='{{$car->id}}' value="{{$car->id}}" required step="0">{{$car->brand}} {{$car->car_model}}</option>
                                @endforeach
                            @elseif ($_REQUEST['year']==3)
                                @foreach ($cars12 as $car)
                                    <option name="model" id='{{$car->id}}' value="{{$car->id}}" required step="0">{{$car->brand}} {{$car->car_model}}</option>
                                @endforeach
                            @elseif ($_REQUEST['year']==4)
                                @foreach ($cars13 as $car)
                                    <option name="model" id='{{$car->id}}' value="{{$car->id}}" required step="0">{{$car->brand}} {{$car->car_model}}</option>
                                @endforeach
                            @elseif ($_REQUEST['year']==5)
                                @foreach ($cars14 as $car)
                                    <option name="model" id='{{$car->id}}' value="{{$car->id}}" required step="0">{{$car->brand}} {{$car->car_model}}</option>
                                @endforeach
                            @elseif ($_REQUEST['year']==6)
                                @foreach ($cars15 as $car)
                                    <option name="model" id='{{$car->id}}' value="{{$car->id}}" required step="0">{{$car->brand}} {{$car->car_model}}</option>
                                @endforeach
                            @elseif ($_REQUEST['year']==7)
                                @foreach ($cars16 as $car)
                                    <option name="model" id='{{$car->id}}' value="{{$car->id}}" required step="0">{{$car->brand}} {{$car->car_model}}</option>
                                @endforeach
                            @elseif ($_REQUEST['year']==8)
                                @foreach ($cars17 as $car)
                                    <option name="model" id='{{$car->id}}' value="{{$car->id}}" required step="0">{{$car->brand}} {{$car->car_model}}</option>
                                @endforeach
                            @elseif ($_REQUEST['year']==9)
                                @foreach ($cars18 as $car)
                                    <option name="model" id='{{$car->id}}' value="{{$car->id}}" required step="0">{{$car->brand}} {{$car->car_model}}</option>
                                @endforeach
                            @elseif ($_REQUEST['year']==10)
                                @foreach ($cars19 as $car)
                                    <option name="model" id='{{$car->id}}' value="{{$car->id}}" required step="0">{{$car->brand}} {{$car->car_model}}</option>
                                @endforeach
                            @elseif ($_REQUEST['year']==11)
                                @foreach ($cars20 as $car)
                                    <option name="model" id='{{$car->id}}' value="{{$car->id}}" required step="0">{{$car->brand}} {{$car->car_model}}</option>
                                @endforeach
                            @elseif ($_REQUEST['year']==12)
                                @foreach ($cars21 as $car)
                                    <option name="model" id='{{$car->id}}' value="{{$car->id}}" required step="0">{{$car->brand}} {{$car->car_model}}</option>
                                @endforeach
                            @elseif ($_REQUEST['year']==13)
                                @foreach ($cars22 as $car)
                                    <option name="model" id='{{$car->id}}' value="{{$car->id}}" required step="0">{{$car->brand}} {{$car->car_model}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="vehiclesize">
                    <div class="heading">
                        ¿Cuál es el tamaño de su vehiculo?
                    </div>
                    <div class="rdosize">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdosize" id="chico" disabled ="" value="0">
                            <label class="form-check-label" for="rdosize">
                                Chico
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdosize" id="mediano" disabled ="" value="1">
                            <label class="form-check-label" for="rdosize">
                                Mediano
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rdosize" id="grande"disabled =""  value="2" checked>
                            <label class="form-check-label" for="rdosize">
                                Grande
                            </label>
                        </div>
                    </div>
                </div>
                <div class="numkm">
                    <div class="heading">
                        Ingrese los kilometraje de su viaje
                    </div>
                    <div class="txtkm">
                        <input class=" py-3 input-- imdays text"
                        type="number" min="0" max="500000" required name="numkmv" placeholder="Ingrese los kilometraje de su viaje" id="numkmv">
                    </div>
                </div>
                <div class="txts">
                    <div class="heading">
                        Ingrese el costo del vehiculo actual(+iva)
                    </div>
                    <div class="number">
                        <input class=" py-3 input-- imdays text"
                        type="number" min="0" max="50000000" required  name="precioiva" placeholder="Ingrese el costo del vehiculo actual(+iva)" id="precioiva">
                    </div>
                    <div class="heading">
                        Ingrese el costo de la tenencia de vehiculo
                    </div>
                    <div class="number">
                        <input class=" py-3 input-- imdays text"
                        type="number" min="0" max="50000000" required name="precioten" placeholder="Ingrese el costo de la tenencia de vehiculo" id="precioten">
                    </div>
                    <div class="heading">
                        Ingrese el costo de la verificación de vehiculo
                    </div>
                    <div class="number">
                        <input class=" py-3 input-- imdays text"
                        type="number" min="0" max="50000000" required name="preciover" placeholder="Ingrese el costo de la verificación de vehiculo" id="preciover">
                    </div>
                    <div class="heading">
                        Ingrese el costo del permiso para circular 
                    </div>
                    <div class="number">
                        <input class=" py-3 input-- imdays text"
                        type="number" min="0" max="50000000" required name="precioper" placeholder="Ingrese el costo del permiso para circular sin placas" id="precioper">
                    </div>
                    <div class="heading">
                        Ingrese el costo del alta de placas
                    </div>
                    <div class="number">
                        <input class=" py-3 input-- imdays text"
                        type="number" min="0" max="50000000" required name="preciopla" placeholder="Ingrese el costo del alta de placas" id="preciopla">
                    </div>
                    <div class="heading">
                        Ingrese el costo de la tarjeta de circulación
                    </div>
                    <div class="number">
                        <input class=" py-3 input-- imdays text"
                        type="number" min="0" max="50000000" required name="preciocir" placeholder="Ingrese el costo de la tarjeta de circulación" id="preciocir">
                    </div>
                    <div class="heading">
                        Ingrese el costo de la licencia
                    </div>
                    <div class="number">
                        <input class=" py-3 input-- imdays text"
                        type="number" min="0" max="50000000" required name="preciolic" placeholder="Ingrese el costo de la licencia" id="preciolic">
                    </div>
                    <div class="heading">
                        Ingrese el costo del seguro del vehiculo
                    </div>
                    <div class="number">
                        <input class=" py-3 input-- imdays text"
                        type="number" min="0" max="50000000" required name="precioseg" placeholder="Ingrese el costo del seguro del vehiculo" id="precioseg">
                    </div>
                    <div class="heading">
                        Ingrese el costo de la gasolina/litro
                    </div>
                    <div class="number">
                        <input class=" py-3 input-- imdays text"
                        type="number" min="0" max="50000000" required name="preciogas" placeholder="Ingrese el costo de la gasolina/litro" id="preciogas">
                    </div>
                    <div class="heading">
                        Ingrese el costo del mantenimiento del vehiculo
                    </div>
                    <div class="number">
                        <input class=" py-3 input-- imdays text"
                        type="number" min="0" max="50000000" required name="precioman" placeholder="Ingrese el costo del mantenimiento del vehiculo" id="precioman">
                    </div>
                </div>
                <div class="btncom">
                    <input type="submit" value="Calcular" name="com"
                    class="rounded-md mx-6 p-2 lg:text-lg hover:bg-marine transition duration-200">
                </div>
            </form>
        </div>
    </div>
    @else  
        <div class="secimg">
            <img src="./img/carro_animacion.gif">
        </div>
        <div class="section1">
            <div class="heading">
                <h2>Costo por Viaje</h2>
            </div>
        </div>
        <div class="section2">
            <div class="formulario">
                <form>
                    <div class="vehicleyear">
                        <div class="heading">
                            Ingrese el año del vehiculo
                        </div>
                        <div class="op">
                            <select class="form-select" aria-label="Default select example" required name="year" onsubmit="return norcargar();" id="year">
                                <option value>Año vehiculo</option>
                                <option value="1">2010</option>
                                <option value="2">2011</option>
                                <option value="3">2012</option>
                                <option value="4">2013</option>
                                <option value="5">2014</option>
                                <option value="6">2015</option>
                                <option value="7">2016</option>
                                <option value="8">2017</option>
                                <option value="9">2018</option>
                                <option value="10">2019</option>
                                <option value="11">2020</option>
                                <option value="12">2021</option>
                                <option value="13">2022</option>
                            </select> 
                        </div>
                    </div>
                    <div class="btncom">
                        <input type="submit" value="Continuar" name="env"
                        class="rounded-md mx-6 p-2 lg:text-lg hover:bg-marine transition duration-200 lg:w-2/12">
                    </div>
                </form>
            </div>
        </div>
    @endif
    <script>
        var numkm = document.getElementById('numkm');
        document.getElementById('Yes').addEventListener('click', function(e) {
        numkm.disabled = false;
        });
        document.getElementById('No').addEventListener('click', function(e) {
        numkm.disabled = true;
        });
        var model = document.getElementById('model');
        var chico = document.getElementById('chico');
        var mediano = document.getElementById('mediano');
        var grande = document.getElementById('grande');
        document.getElementById('Yes1').addEventListener('click', function(e) {
        model.disabled = false;
        chico.disabled = true;
        mediano.disabled = true;
        grande.disabled = true;
        });
        document.getElementById('No1').addEventListener('click', function(e) {
        model.disabled = true;
        chico.disabled = false;
        mediano.disabled = false;
        grande.disabled = false;
        });

    </script>
@endsection
