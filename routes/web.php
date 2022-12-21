<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::view('/', 'index')->name('home');
Route::view('alternativas-para-compensar-huella-de-carbono', 'alternativa')->name('alternative');
Route::view('medios-alternativos-de-transporte', 'medios')->name('medio');
Route::view('medios-alternativos-de-transporte-bicicleta', 'bicicleta')->name('bici');
Route::view('medios-alternativos-de-transporte-ferrocarril', 'ferrocarril')->name('ferro');
Route::view('talleres-mantenimiento', 'mapa')->name('mapa');
Route::view('costo-viaje', 'menu-costo')->name('costo');

Route::get('cálculo-arboles', [Homecontroller::class, 'treeCalculator'])->name('calculo');
Route::get('calculadora-reguladora', [Homecontroller::class, 'transport'])->name('transport');
Route::get('estadisticas', [Homecontroller::class, 'stats'])->name('stats');
Route::get('xosto-viaje-calculo-auto', [HomeController::class, 'carsshow'])->name('auto');
Route::get('costo-viaje-calculo-moto', [HomeController::class, 'motosshow'])->name('moto');
