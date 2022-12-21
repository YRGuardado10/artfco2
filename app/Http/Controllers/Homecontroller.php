<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Classes\Tree;
use App\Models\Footprint;
use App\Http\Requests\{TreeRequest, alternativeTransportRequest, CostoRequest};
use App\Models\tree as ModelsTree;
use App\Models\Vehicle;
use App\Models\visit;
use App\Models\car;
use App\Models\moto;

class Homecontroller extends Controller
{
/** 
   * @return \Illuminate\Contracts\Support\Renderable
    *
    */
    public function treeCalculator(TreeRequest $request){

        if($request->footprint != null){
            $aux = new Tree($request->footprint);
            $trees = ModelsTree::all();
            $data = $aux->calculateCompensation($trees);
            $data = $aux->getFormat($data, 0);
            $cost = $aux->calculateCost($trees, $data);
            $cost = $aux->getFormat($cost, 2);


            return view('calculo-arboles', [
                'trees' => $trees,
                'data' => $data,
                'cost' => $cost,
                'footprint' => number_format($request->footprint,2)
            ]);

        }else{

            return view('calculo-arboles', [
            ]);
        
        }
    }
    public function transport(alternativeTransportRequest $request){
        
        $visits = visit::firstOrFail();
        $vehicle = vehicle::find($request->vehicle);

        if($request->vehicle != null){
            $vehicleCarbonFootprint = $vehicle->carbon_generated * $request->distance;
            $trainCarbonFootprint = $request->distance * 41.15;
            $bicycleCarbonFootprint = $request->distance * 5;

            $trainSavedFootprint = $vehicleCarbonFootprint - $trainCarbonFootprint;
            $bicycleSavedFootprint = $vehicleCarbonFootprint - $bicycleCarbonFootprint;
            $footprintTon = ($vehicleCarbonFootprint / 1000000) * $request->daysPerYear;

            $trainPercent = 4115 / $vehicle->carbon_generated;
            $bicyclePercent = 500 / $vehicle->carbon_generated;

            $visits->total_visits++;
            $visits->saveOrFail();

            $footprint = new Footprint();
            $footprint->distance = $request->distance;
            $footprint->carbon_footprint = $footprintTon;
            $footprint->change_transport = $request->changeTransport;
            $footprint->vehicle_id = $request->vehicle;
            $footprint->vehicle->times_used++;
            $footprint->vehicle->saveOrFail();
            $footprint->saveOrFail();

            return view('calculadora-reguladora', [
                'vehicleCarbonFootprint' => number_format($vehicleCarbonFootprint),
                'footprintTon' => $footprintTon,
                'trainCarbonFootprint' => number_format($trainCarbonFootprint),
                'bicycleCarbonFootprint' => number_format($bicycleCarbonFootprint),

                'trainSavedFootprint' => number_format($trainSavedFootprint),
                'bicycleSavedFootprint' => number_format($bicycleSavedFootprint),
                'distance' => number_format($request->distance),
                'bicyclePercent' => number_format($bicyclePercent, 2),
                'trainPercent' => number_format($trainPercent, 2),
                'daysPerYear' => $request->daysPerYear,
                'visits' => number_format($visits->total_visits),

            ]);

        }else{
            return view('calculadora-reguladora', [
                'visits' => number_format($visits->total_visits),
            ]);
        }
    }
        public function stats(){

            $vehicles = Vehicle::all()->sortBy('id');
            $footprints = Footprint::all();

            $data = [];
            $footprintData = [];
            $true = 0;
            $false = 0;
            $avgFootprint = 0;

            foreach($footprints as $foot){
                $avgFootprint += $foot->carbon_footprint;
            }

            $avgFootprint /= $footprints->count();

            foreach($vehicles as $vehicle){
                $data['label'][] = $vehicle->vehicle_name;
                $data['data'][] = $vehicle->times_used;
            }

            foreach($footprints as $footprint){
                if($footprint->change_transport){
                    $true++;
                }else{
                    $false++;
                }
            }
            $footprintData['data'][] = $true;
            $footprintData['data'][] = $false;

            $data['data'] = json_encode($data);
            $footprintData['data'] = json_encode($footprintData);

            return view('estadisticas', [
                'data' => $data['data'],
                'footprint' => $footprintData['data'],
                'avgFootprint' => number_format($avgFootprint, 2)
            ]);
        
    }

    public function carsshow(CostoRequest $request){
        $cars10 = car::all()->where('year', 2010);
        $cars11 = car::all()->where('year', 2011);
        $cars12 = car::all()->where('year', 2012);
        $cars13 = car::all()->where('year', 2013);
        $cars14 = car::all()->where('year', 2014);
        $cars15 = car::all()->where('year', 2015);
        $cars16 = car::all()->where('year', 2016);
        $cars17 = car::all()->where('year', 2017);
        $cars18 = car::all()->where('year', 2018);
        $cars19 = car::all()->where('year', 2019);
        $cars20 = car::all()->where('year', 2020);
        $cars21 = car::all()->where('year', 2021);
        $cars22 = car::all()->where('year', 2022);
        if($request->rdokm==1){
            $anualkm=$request->numkm;
        }else{
            $anualkm=20000;
        }
        if($request->rdomodelo==1){
            if($request->model == null){
                $rendimiento=1;
            }else{
                $car = car::find($request->model);
                $rendimiento=$car->performance;
            }
        }else{
        if($request->rdosize==0){
            $rendimiento=24.4;
        }elseif($request->rdosize==1){
            $rendimiento=16.24;
        }elseif($request->rdosize==2)
            $rendimiento=8.08;
        }
        $cosanualgas = $anualkm * $request->preciogas / $rendimiento;
        $cosanualveh = $request->precioiva / 4;
        $cosprom = $request->precioten + $request->preciover + $request->precioper + $request->preciopla + $request->preciocir + $request->preciolic + $request->precioseg + $request->precioman + $cosanualveh + $cosanualgas;
        $cosviaje = ($cosprom / $anualkm) * $request->numkmv;
        return view('auto', compact('cars10','cars11','cars12','cars13','cars14','cars15',
                                     'cars16','cars17','cars18','cars19','cars20','cars21',
                                     'cars22'),['anualkm' => number_format($anualkm), 
                                                    'travkm' => number_format($request->numkmv),
                                                    'rendimiento' => floatval($rendimiento),
                                                    'preciva' => number_format($request->precioiva),
                                                    'precten' => number_format($request->precioten),
                                                    'precver' => number_format($request->preciover),
                                                    'precper' => number_format($request->precioper),
                                                    'precpla' => number_format($request->preciopla),
                                                    'preccir' => number_format($request->preciocir),
                                                    'preclic' => number_format($request->preciolic),
                                                    'precseg' => number_format($request->precioseg),
                                                    'precgas' => number_format($request->preciogas),
                                                    'precman' => number_format($request->precioman),
                                                    'cosanualgas' => floatval($cosanualgas),
                                                    'cosanualveh' => floatval($cosanualveh),
                                                    'cosprom' => floatval($cosprom),
                                                    'cosviaje' => number_format((float)$cosviaje, 2, '.', '')]);
    }
    public function motosshow(CostoRequest $request){
        $motos = moto::all();
        if($request->rdokm==1){
            $anualkm=$request->numkm;
        }else{
            $anualkm=20000;
        }
        if($request->model == null){
            $rendimiento=1;
        }else{
            $moto = moto::find($request->model);
            $rendimiento=$moto->performance;
        }
        $cosanualgas = $anualkm * $request->preciogas / $rendimiento;
        $cosanualveh = $request->precioiva / 4;
        $cosprom = $request->precioten + $request->preciover + $request->precioper + $request->preciopla + $request->preciocir + $request->preciolic + $request->precioseg + $request->precioman + $cosanualveh + $cosanualgas;
        $cosviaje = ($cosprom / $anualkm) * $request->numkmv;
        return view('moto',compact('motos'),['anualkm' => number_format($anualkm), 
                                            'travkm' => number_format($request->numkmv),
                                            'rendimiento' => floatval($rendimiento),
                                            'preciva' => number_format($request->precioiva),
                                            'precten' => number_format($request->precioten),
                                            'precver' => number_format($request->preciover),
                                            'precper' => number_format($request->precioper),
                                            'precpla' => number_format($request->preciopla),
                                            'preccir' => number_format($request->preciocir),
                                            'preclic' => number_format($request->preciolic),
                                            'precseg' => number_format($request->precioseg),
                                            'precgas' => number_format($request->preciogas),
                                            'precman' => number_format($request->precioman),
                                            'cosanualgas' => floatval($cosanualgas),
                                            'cosanualveh' => floatval($cosanualveh),
                                            'cosprom' => floatval($cosprom),
                                            'cosviaje' => number_format((float)$cosviaje, 2, '.', '')]);
    }
}