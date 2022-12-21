@extends('navbar')
@section('content')
<link href="css/estadisticas.css" rel="stylesheet">
{{-- div principal --}}
{{-- Titulo principal --}}
<div class="container-sec1">
    <div class="heading">
        Estadísticas
    </div>
    <div class="subheading">
        <b>Medio de transporte más usado</b>
    </div>
    <div class="paragraph">
        De acuerdo a la informacion ingresada por los usuarios de esta calculadora podemos 
        observar la cantidad de uso de los siguientes medios de transporte.
    </div>
</div>
<div class="container-sec2">
    <div class="grafica">
        {{-- primer grafica --}}
        {{-- area grafica --}}
        {{-- grafica --}}
        <div>
            <canvas id="vehicleChart"></canvas>
        </div>
        <div class="tags">
            {{-- tags --}}
            <p>A -> Taxi</p>
            <p>B -> Autobús</p>
            <p>C -> Automóvil Grande (Gasolina)</p>
            <p>D -> Automóvil Mediano (Gasolina)</p>
            <p>E -> Motocicleta</p>
        </div>
    </div>    
</div>
<div class="linea"></div>
<div class="container-sec3">
    {{-- segunda grafica --}}
    <div class=" head py-10 w-full">
        <p class="second--title mb-8"> <b>¿Estarias dispuesto a cambiar tu medio de
            transporte habitual?</b></p>
        <div class="w-10/12 mx-auto bg-white bg-opacity-80">
            <canvas id="useChart"></canvas>
        </div>
    </div>    
</div>
<div class="linea"></div>
<div class="container-sec4">
    {{-- Tercera grafica --}}
    <div class="py-10 w-full">
        <div class="lg:flex text-center btns">
            <div class="btn1">
                <button>
                    <h3 class="xxl--text lg:my-4 lg:text-center">México</h3>
                    <div class="mx-auto my-2 flex justify-center logo">
                        <img src="./img/image 34.png" alt="">
                    </div>
                    <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Huella de carbono promedio: 4
                    Toneladas</p>
                </button>        
            </div>
            <div class="btn2">
                <button>
                    <h3 class="xxl--text lg:my-4 lg:text-center">El mundo</h3>
                    <div class="mx-auto my-2 flex justify-center">
                        <img src="./img/image 34.png" alt="">
                    </div>
                    <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Huella de carbono promedio: 4.5
                    Toneladas</p>
                </button>
            </div>
            <div class="btn2">
                <button>
                    <h3 class="xxl--text lg:my-4 lg:text-center">ArtfCO2</h3>
                    <div class="mx-auto my-2 flex justify-center">
                        <img src="./img/image 34.png" alt="">
                    </div>
                    <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Huella de carbono promedio: {{ $avgFootprint }}
                    Toneladas</p>
                </button>
            </div>    
        </div>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.js"></script>

    <script>
        const cData = JSON.parse(`<?php echo $data; ?>`);
        const fData = JSON.parse(`<?php echo $footprint; ?>`);

        const ctx = document.getElementById('vehicleChart').getContext('2d');
        const ctx2 = document.getElementById('useChart').getContext('2d');

        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: 'ABCDE',
                datasets: [{
                    label:cData.label[0],
                    data: [cData.data[0], null, null, null, null],
                    backgroundColor: ['#5A844E'],
                    borderWidth: 1,
                    skipNull: true, 
                },
                {   
                    label:cData.label[1],
                    data: [null,cData.data[1], null, null, null],
                    backgroundColor: ['#235B4E'],
                    borderWidth: 1,
                    skipNull: true, 
                },
                {   
                    label:cData.label[2],
                    data: [null, null, cData.data[2], null, null],
                    backgroundColor: ['#5A844E'],
                    borderWidth: 1,
                    skipNull: true, 
                },
                {   
                    label:cData.label[3],
                    data: [null, null, null, cData.data[3], null],
                    backgroundColor: ['#235B4E'],
                    borderWidth: 1,
                    skipNull: true, 
                },
                {   
                    label:cData.label[4],
                    data: [null, null, null, null, cData.data[4]],
                    backgroundColor: ['#5A844E'],
                    borderWidth: 1,
                    skipNull: true, 
                }
                ],
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Medio de transporte',
                            color: 'black',
                            font: {
                                family: 'Nunito',
                            },
                        },
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: '# de usos',
                            color: 'black',
                            font: {
                                family: 'Nunito',
                            },
                        },
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend:{
                        display:false
                    }
                }
            }
        });

        //Segunda grafica
        const useChart = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: [
                    'Sí',
                    'No'
                ],
                datasets: [{
                    data: fData.data,
                    backgroundColor: [
                        '#235B4E',
                        '#5A844E'
                    ]
                }]
            },
            options:{
                layout:{
                    padding:16
                },
                plugins:{
                    legend:{
                        position:'bottom',
                        labels:{
                            color:'black',
                            font:{
                                family:'Nunito',
                                size:25
                            }
                        }
                    }
                }
            }
        });
    </script>
@endsection
