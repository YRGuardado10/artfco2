@extends('navbar')
@section('content')
<link rel="stylesheet" href="./css/menu-costo.css">
        <div class="section1">
            <div class="heading">
                <h2>Costo por Viaje</h2>
            </div>
        </div>
        <div class="section2">
            <div class="formulario">
                    <div class="vehicletype">
                        <div class="heading">
                            ¿Qué tipo de vehiculo tiene?
                        </div>
                    </div>
                    <div class="btns">
                        <div class="btn1">
                            <a href="{{route('auto')}}">
                                <button>
                                    <div class="infobut">
                                        Automovil
                                    </div>
                              </button>
                            </a>
                        </div>
                        <div class="btn2">
                            <a href="{{route('moto')}}">
                                <button>
                                    <div class="infobut">
                                        Motocicleta
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
@endsection
