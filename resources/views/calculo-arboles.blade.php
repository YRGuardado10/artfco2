@extends('navbar')
@section('content')
<link rel="stylesheet" href="./css/calculo.css">
<div class="container-info">
    <div class="heading">
        Cálculo de árboles para compensación de carbono
    </div>
    <div class="paragraph">
        ¿Te has preguntado cuantos arboles tendrías que plantar para compensar la 
        huella de carbono que produces?
    </div>
</div>
{{-- div de muestreo de resultados --}}
@isset($data)
    <div class="titulores">
        <b>Para compensar <span class="text-danger">{{ $footprint }} </span> toneladas de 
        CO<sub>2</sub> debes plantar alguno de los siguientes tipos de árboles*</b>
    </div>
    {{-- Resultados --}}
    <div class="container-trees">
        {{-- Arboles --}}
        @foreach ($trees as $tree)
        <div class="sections">
                <div class="container-tree">
                    <div class="imgtree">
                        <img src="{{ $tree->url_img }}" alt="{{ $tree->name }}">
                    </div>
                    {{-- nombre --}}
                    <div class="name">{{ $tree->name }}</div>
                    {{-- cantidad --}}
                    <div class="">
                        {{ $data[$tree->id-1] }}
                        <br>
                        individuos
                    </div>
                    <div class="costo">
                        @if ($cost[$tree->id-1])                        
                            Con un costo total de:
                            <br>
                            ${{ $cost[$tree->id-1] }}
                        @else
                            Nombre científico:
                            {{ $tree->scientific_name }}
                        @endif
                    </div>
                    <div class="capacidad">
                        Capacidad de absorcion:
                        <br>
                        {{ $tree->absorption_capacity }} kg/año
                    </div>
                </div>  
            </div>
        @endforeach
    </div>
    <div class="container-info">
    <div class="heading">
        Calcular árboles para compensación de huella de carbono diferente  
    </div>
</div>
@endisset
<div class="container-form">
    <form class="calchuella">
        <div class="label1">
            <label class="label">
                Huella de carbono
            </label>
        </div>
        <div class="huella">
            <input
            class="huellaco2"
            type="number" step="0.001" name="footprint" min="0.001" max="2000000"
            placeholder="Ingrese huella de carbono" required>
        </div>
        <div class="btn">
            <input type="submit" value="Calcular"
            class="btn1">
        </div>
    </form>
</div>
<div class="container-sec3">
    <div class="container-left">
        <div class="heading">
            <b>*La capacidad de absorción de carbono puede variar dependiendo del crecimiento del individuo, 
            su diámetro a la altura del pecho (DAP) y a la zona donde se localiza</b>
        </div>
        <div class="paragraph">
            Fuente: Guía para la plantación de árboles del municipio de Mérida(2018) / Guia-de-plantacion-de-arboles.pdf.
        </div>
    </div>
    <div class="container-right">
        <div class="ast">*</div>
        <div class="paragraph">
            ¿Te gustaría conocer otras forma más sencillas (y económica) de poder ayudar? 
        </div>
    </div>
</div>
<div class="container-sec4">
    <div class="container"></div>
    <div class="but">
        <a href="{{route('alternative')}}">
            <button>
                Da Click Aquí
            </button>
        </a>
    </div>
</div>
{{-- div de muestra de errores --}}
@if ($errors->any())
    <div
        class="warning--">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection