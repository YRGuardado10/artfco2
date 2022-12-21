@extends('navbar')
@section('content')
<link rel="stylesheet" href="./css/moto.css">
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
        <div class="section2">
            <div class="formulario">
                <form>
                    <div class="consulta">
                        <div class="heading">
                            Para realizar otra consulta de costo de viaje en motocicleta de click en continuar
                        </div>
                    </div>
                    <div class="btncom">
                        <a href="{{route('home')}}">
                            <button>
                                Continuar
                            </button>    
                        </a>
                    </div>
                </form>
            </div>
        </div>
    @else
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
                    <div class="vehiclemodel">
                        <div class="heading">
                            Ingrese el  tipo de motocicleta
                        </div>
                        <div class="model">
                            <select class="form-select" aria-label="Default select example" id="model" required name="model">
                                <option value>Elige el tipo de motocicleta</option>
                                @foreach ($motos as $moto)
                                <option name="model" id='{{$moto->id}}' value="{{$moto->id}}" required step="0">{{$moto->type}}</option>
                                @endforeach
                            </select>
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
                            Ingrese el costo actual de la motocicelta(+iva)
                        </div>
                        <div class="number">
                            <input class=" py-3 input-- imdays text"
                            type="number" min="0" max="50000000" required  name="precioiva" placeholder="Ingrese el costo actual de la motocicleta(+iva)" id="precioiva">
                        </div>
                        <div class="heading">
                            Ingrese el costo anual de la tenencia de la motocicleta
                        </div>
                        <div class="number">
                        <input class=" py-3 input-- imdays text"
                        type="number" min="0" max="50000000" required name="precioten" placeholder="Ingrese el costo anual de la tenencia de la motocicleta" id="precioten">
                        </div>
                        <div class="heading">
                            Ingrese el costo anual del refrendo de la motocicleta
                        </div>
                        <div class="number">
                            <input class=" py-3 input-- imdays text"
                            type="number" min="0" max="50000000" required name="preciover" placeholder="Ingrese el costo anual del refrendo de la motocicleta" id="preciover">
                        </div>
                        <div class="heading">
                            Ingrese el costo del permiso para circular sin placas
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
                            Ingrese el costo anual del seguro de la motocicleta
                        </div>
                        <div class="number">
                            <input class=" py-3 input-- imdays text"
                            type="number" min="0" max="50000000" required name="precioseg" placeholder="Ingrese el costo anual del seguro de la motocicleta" id="precioseg">
                        </div>
                        <div class="heading">
                            Ingrese el costo de la gasolina/litro
                        </div>
                        <div class="number">
                            <input class=" py-3 input-- imdays text"
                            type="number" min="0" max="50000000" required name="preciogas" placeholder="Ingrese el costo de la gasolina/litro" id="preciogas">
                        </div>
                        <div class="heading">
                            Ingrese el costo anual del mantenimiento de la motocicleta
                        </div>
                        <div class="number">
                            <input class=" py-3 input-- imdays text"
                            type="number" min="0" max="50000000" required name="precioman" placeholder="Ingrese el costo anual del mantenimiento de la motocicleta" id="precioman">
                        </div>
                    </div>
                    <div class="btncom">
                        <input type="submit" value="Calcular" name="com"
                        class="rounded-md mx-6 p-2 lg:text-lg hover:bg-marine transition duration-200">
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
    </script>
@endsection
