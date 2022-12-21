<?php

namespace Database\Seeders;

use App\Models\tree;
use App\Models\vehicle;
use App\Models\visit;
use App\Models\car;
use App\Models\moto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Tree::create([
            'name' => 'Mezquite',
            'scientific_name' => 'Propis Glandulosa',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Velvet_mesquite.jpg/1024px-Velvet_mesquite.jpg',
            'author_img' => 'Sue in az/Trabajo propio/wikipedia',
            'absorption_capacity' => 17,
            'cost' => 150
        ]);

        Tree::create([
            'name' => 'Fresno',
            'scientific_name' => 'Fraxinus Uhdei',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Starr_030405-0078_Fraxinus_uhdei.jpg/800px-Starr_030405-0078_Fraxinus_uhdei.jpg',
            'author_img' => 'Forest & Kim Starr/wikipedia',
            'absorption_capacity' => 30.564,
            'cost' => 295
        ]);

        Tree::create([
            'name' => 'Mandarino',
            'scientific_name' => 'Citrus Reticulata',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Limonaia_del_Castel_-_DSC02147.JPG/800px-Limonaia_del_Castel_-_DSC02147.JPG',
            'author_img' => 'Daderot/Fotografía propia/Dominio público',
            'absorption_capacity' => 31.101,
            'cost' => 150
        ]);

        Tree::create([
            'name' => 'Manglar blanco',
            'scientific_name' => 'Laguncularia Racemosa',
            'url_img' => 'http://3.bp.blogspot.com/-6vhcV5bqDbA/UWB73STgcHI/AAAAAAAAAH8/-WJLfT_VyPg/s640/manglares+2.JPG',
            'author_img' => 'Autor desconocido/infinitanaturaleza.com',
            'absorption_capacity' => 38.706
        ]);

        Tree::create([
            'name' => 'Naranjo',
            'scientific_name' => 'Citrus × Sinensis',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Laranxeira_Naranjo_GFDL.JPG/1280px-Laranxeira_Naranjo_GFDL.JPG',
            'author_img' => 'Luis Miguel Bugallo Sánchez/Trabajo propio/wikipedia',
            'absorption_capacity' => 49.345,
            'cost' => 150
        ]);

        Tree::create([
            'name' => 'Limonero',
            'scientific_name' => 'Citrus × Limon',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Citrus_limonum_3.JPG/1280px-Citrus_limonum_3.JPG',
            'author_img' => 'Vicenç Salvador Torres Guerola/Trabajo propio/wikipedia',
            'absorption_capacity' => 106.933,
            'cost' => 150
        ]);

        Tree::create([
            'name' => 'Eucalipto blanco',
            'scientific_name' => 'Eucalyptus Globulus',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Starr_031214-0076_Eucalyptus_globulus.jpg/800px-Starr_031214-0076_Eucalyptus_globulus.jpg',
            'author_img' => 'Forest & Kim Starr/wikipedia',
            'absorption_capacity' => 162.257,
            'cost' => 338
        ]);

        Tree::create([
            'name' => 'Pirul',
            'scientific_name' => 'Eucalyptus Globulus',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Starr_031214-0076_Eucalyptus_globulus.jpg/800px-Starr_031214-0076_Eucalyptus_globulus.jpg',
            'author_img' => 'Forest & Kim Starr/wikipedia',
            'absorption_capacity' => 162.257,
        ]);

        Tree::create([
            'name' => 'Palmera de abanico',
            'scientific_name' => 'Washingtonia Robusta',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Washingtonia_robusta.jpg/800px-Washingtonia_robusta.jpg',
            'author_img' => 'Geographer/Image: Washingtonia_robusta.jpg/wikipedia',
            'absorption_capacity' => 221.03,
            'cost' => 150
        ]);

        Tree::create([
            'name' => 'Roble sedoso',
            'scientific_name' => 'Grevillea Robusta',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Grevillea_robusta_flowering_in_Gan_Shmuel01.jpg/800px-Grevillea_robusta_flowering_in_Gan_Shmuel01.jpg',
            'author_img' => 'RickP/14/04/2006/self-made,/wikipedia',
            'absorption_capacity' => 229.28,
            'cost' => 230
        ]);
        
///////////////////////////////////////////////////////////
        Vehicle::create([
            'vehicle_name' => 'Taxi',
            'carbon_generated' => 211.76,
            'times_used' => 0
        ]);

        Vehicle::create([
            'vehicle_name' => 'Autobús',
            'carbon_generated' => 104.71,
            'times_used' => 0
        ]);

        Vehicle::create([
            'vehicle_name' => 'Automóvil Grande (Camioneta)',
            'carbon_generated' => 282.95,
            'times_used' => 0
        ]);

        Vehicle::create([
            'vehicle_name' => 'Automóvil Mediano (4 pasajeros)',
            'carbon_generated' => 192.28,
            'times_used' => 0
        ]);
        
        Vehicle::create([
            'vehicle_name' => 'Automóvil Pequeño',
            'carbon_generated' => 154,
            'times_used' => 0
        ]);

        Vehicle::create([
            'vehicle_name' => 'Motocicleta',
            'carbon_generated' => 102.89,
            'times_used' => 0
        ]);
        
        // Footprint::factory(200)->create();

        Visit::create([
            'total_visits' => 0
        ]);

        //Motos
        moto::create([
            'type' => 'CICLOMOTORES',
            'performance' => 43.5
        ]);
        moto::create([
            'type' => 'SCOOTER',
            'performance' => 35
        ]);
        moto::create([
            'type' => 'MEGASCOOTER',
            'performance' => 32.5
        ]);
        moto::create([
            'type' => 'MOTOCROSS',
            'performance' => 30
        ]);
        moto::create([
            'type' => 'CHOPPER',
            'performance' => 25
        ]);
        moto::create([
            'type' => 'SUPERDEPORTIVAS',
            'performance' => 18
        ]);
        moto::create([
            'type' => 'GRAN TURISMO',
            'performance' => 23
        ]);
        //2010

        //Acura

        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TL',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 9.49
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TL SHAWD',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 11.085
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'RL',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 10.74
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'MDX',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 8.25
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'RDX',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 10.98
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TSX',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 12.145
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'ZDX',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 10.78
        ]);

        //AUDI

        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3/SPORTBACK 1.4T Manual front',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 18.51
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3/SPORTBACK 1.4T S tronic front',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 17.81
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3/SPORTBACK 1.8T Manual front',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 14.38
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3/SPORTBACK/CABRIO 1.8T S tronic front',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 17.55
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3/SPORTBACK 2.0T S Manual front',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 13.59
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3/SPORTBACK/CABRIO 2.0T S tronic front / A3/SPORTBACK 2.0T S tronic front',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 15.42
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4 1.8T Manual front',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 15.88
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4 1.8T Multitronic front',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 15.56
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4 2.0T Multitronic front / A4 2.0T S tronic quattro / A5/SPORTBACK/CABRIO 2.0T S tronic front',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 14.77
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A5/SPORTBACK 3.2FSI S tronic quattro',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 10.95
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A6 2.8FSI Multitronic front',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 10.89
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'R8 4.2 Manual quattro / R8 4.2 R tronic quattro',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 9.27
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8 Tiptronic quattro',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 10.47
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8 Tiptronic quattro W12',
            'year' => 2010,
            'cylinders' => 12,
            'performance' => 9.29
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'TT Manual front / TT S tronic front',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 15.49
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q7 Tiptronic quattro',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 9.37
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'R8 5.2 R tronic quattro / R8 5.2 Manual quattro',
            'year' => 2010,
            'cylinders' => 10,
            'performance' => 6.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S3 Manual quattro',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 11.48
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S3 S tronic quattro',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 11.24
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S4 Manual quattro / S4 S tronic quattro',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 7.41
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S5 Manual quattro',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 7.98
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S5 Tiptronic quattro',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 7.91
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S6 Tiptronic quattro',
            'year' => 2010,
            'cylinders' => 10,
            'performance' => 7.43
        ]);

        //Bentley

        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'GT/GTC/Flying Spur / GT/Flying Spur',
            'year' => 2010,
            'cylinders' => 12,
            'performance' => 5.88
        ]);
        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'ArnageT / Arnage R/RL / Azure / BROOKLAND',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 6.21
        ]);

        //BMW

        car::create([
            'brand' => 'BMW',
            'car_model' => '118d',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 18.52
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '118i',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 16.95
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '118i A',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 16.13
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '120i',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '120i A',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '125i',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 12.66
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '125i A',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 12.65
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '130i / 130i A',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 12.05
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '135i',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 10.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '135i A',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 12.05
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325i',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 11.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325i A',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 11.11
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325i Coupe',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 11.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325i A Coupe',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 11.11
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325i CABRIO',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 12.66
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325i A CABRIO',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 12.35
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335i / 335i A',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 10.42
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335i Coupe / 335i A Coupe',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 10.53
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335i Cabrio / 335i A Cabrio',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 10.10
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '525i / 530i',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '530d',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 15.15
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '550i',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 9.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650i',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 9.01
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '740i',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 10.10
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '740Li',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 10.00
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '750i / 750Li',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 8.77
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '760i',
            'year' => 2010,
            'cylinders' => 12,
            'performance' => 7.75
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '760Li',
            'year' => 2010,
            'cylinders' => 12,
            'performance' => 7.69
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 8.06
        ]);

        //CHRYSLER

        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '300',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 11.41
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '300C',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 9.22
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => 'CIRRUS',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 13
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => 'CIRRUS LIMITED',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 10.78
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => 'TOWN & COUNTRY',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => 'PT CRUISER',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 10.87
        ]);

        //DODGE

        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 11.41
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER R/T',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 10.42
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER SRT8',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 8.53
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER R/T / CHALLENGER SRT8',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 6.48
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CALIBER',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 13.32
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'AVENGER',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 12.85
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 9.22
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY R/T',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 8.14
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'VIPER SRT 10',
            'year' => 2010,
            'cylinders' => 10,
            'performance' => 8.69
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'ATOS',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 20.4
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'ATTITUDE',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 16.07
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DAKOTA',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 8.66
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 1500',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 8.75
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 2500',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 7.66
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 2500 CREW CAB / RAM 2500 QUAD CAB',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 7.33
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'NITRO',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 8.77
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'H100',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 10.46
        ]);

        //FORD

        car::create([
            'brand' => 'FORD',
            'car_model' => 'RANGER',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 10.90
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'F150 XL CABINA',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 9.36
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'F150 XL DOBLE CABINA',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 9.71
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'LOBO STX CABINA / LOBO XLT CABINA',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 9.36
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'LOBO XLT CABINA Y',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 9.71
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'LOBO FX4 / LOBO LARIAT / LOBO KING RANCH / LOBO HARLEY',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 9.27
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FUSION',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 14.68
        ]);

        //HONDA

        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ACCORD LX',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 13.835
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ACCORD',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 13.275
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ACCORD CROSSTOUR',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 11.7035
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 16.05
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC HIBRIDO',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 23.42
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC SI',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 12.85
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ODYSSEY',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 10.305
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CRV',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 12.19
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'PILOT',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 8.17
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'RIDGELINE',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 7.735
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'FIT',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 16.575
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CITY',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 16.52
        ]);

        //JEEP

        car::create([
            'brand' => 'JEEP',
            'car_model' => 'CITY',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 16.52
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'WRANGLER',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 8.36
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'LIBERTY',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 10.21
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'GRAND CHEROKEE',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 9.59
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'GRAND CHEROKEE SRTS',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 6.94
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'COMMANDER',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 6.44
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'PATRIOT',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 13.53
        ]);    

        //LINCONL

        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MARK LT 4x2 / MARK 4x4',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 11.50
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKZ',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 12.39
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKS',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 11.20
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKX 4x2',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 11.73
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKX 4x4',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 8.55
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'NAVIGATOR 4x2',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 6.49
        ]);

        //SEAT

        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.4 150 HP DSG TURBO',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 18.78
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.6 105 HP DSG',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 16.56
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 2.0 115 HP MAN',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 16.31
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEÓN 1.4 125 HP MAN TFSI',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 18.26
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'ALTEA 1.4 125 HP MAN TURBO',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 15.61
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'ALTEA 1.8 160 HP MAN TSI',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 14.29
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'ALTEA 1.8 160 HP DSG TSI',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 14.74
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'ALTEA 2.0 211 HP DSG TSI',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 13.06
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEÓN 1.8 160 HP MAN TSI / LEÓN 1.8 160 HP DSG TSI',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 11.96
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEÓN 2.0 211 HP DSG TFSI',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 13.06
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEÓN 2.0 211 HP MAN TFSI',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 13.40
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEÓN 2.0 265 HP MAN TFSI CUPRA / LEÓN 2.0 240 HP MAN TFSI CUPRA',
            'year' => 2010,
            'cylinders' => 5,
            'performance' => 11.96
        ]);

        //SUBARU

        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'FORESTER',
            'year' => 2010,
            'cylinders' => 2,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'WRX STI',
            'year' => 2010,
            'cylinders' => 2,
            'performance' => 10.6
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'OUTBACK',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 10.7
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA',
            'year' => 2010,
            'cylinders' => 2,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'LEGACY',
            'year' => 2010,
            'cylinders' => 2,
            'performance' => 10.7
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'TRIBECA',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 7.8
        ]);

        //SUZUKI

        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SWIFT',
            'year' => 2010,
            'cylinders' => 0,
            'performance' => 17.96
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SX4 SEDAN / SX4-X OVER',
            'year' => 2010,
            'cylinders' => 0,
            'performance' => 14.51
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'KIZASHI',
            'year' => 2010,
            'cylinders' => 0,
            'performance' => 14.52
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'GRAND VITARA 2.4 2WD',
            'year' => 2010,
            'cylinders' => 0,
            'performance' => 12.86
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'GRAND VITARA 3.2 2WD / GRAND VITARA 3.2 4WD',
            'year' => 2010,
            'cylinders' => 0,
            'performance' => 13.18
        ]);

        //TOYOTA

        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'CAMRY',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'COROLLA CENG',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 12.7
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'COROLLA NG',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 13.0
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'MATRIX NG',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 12.2
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'YARIS HB / YARIS SEDAN',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 18.7
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'AVANZA',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'PRIUS',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 21.1
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'RUSH',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => '4 RUNNER',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 7.6
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'LAND CRUISER',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 6.3
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'RAV4',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 10.9
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HIGHLANDER 4X2',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 8.8
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HIGHLANDER 4X4',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 8.4
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'FJ CRUISER AWD',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 7.6
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'SEQUOIA 2009',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 6.5
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'SEQUOIA',
            'year' => 2010,
            'cylinders' => 8,
            'performance' => 8.5
        ]);

        //VOLKSWAGEN

        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE GP 2.0115 HP AUT',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 14.05
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE GP 2.0115 HP MAN',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 14.91
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE GP/CABRIO 2.5150 HP AUT',
            'year' => 2010,
            'cylinders' => 5,
            'performance' => 13.67
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE GP/CABRIO 2.5150 HP MAN',
            'year' => 2010,
            'cylinders' => 5,
            'performance' => 13.73
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BORA A 2.0 200 HP TFSIDSG',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 14.17
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BORA A 2.0 200 HP TFSI MAN',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 14.59
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BORA A57 GOLF SPORTWAGEN 2.5 170HP MAN',
            'year' => 2010,
            'cylinders' => 5,
            'performance' => 14.31
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BORA A57 GOLF SPORTWAGEN 2.5 170HP DSG',
            'year' => 2010,
            'cylinders' => 5,
            'performance' => 14.83
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA GP 1.8 180 HP MAN TURBO',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 15.47
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA GP 1.8 180 HP TIP TURBO',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 13.52
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA GP 2.0 115 HP AUT',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 15.79
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA GP 2.0 115 HP MAN',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 16.16
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA GP 1.3 100 HP MAN TDI',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 17.64
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BORA A5I GOLF SPORTWAGEN 1.9 105 HP DSG TDI',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 16.71
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BORA A5I GOLF SPORTWAGEN 1.9 105 HP MAN TDI',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 17.12
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CROSSFOX/LUPO 1.6 100 HP MAN',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 14.05
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOL/GOL SEDAN 1.6 100 HP MAN',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 16.61
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'SAVEIRO 1.6100HP MAN',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 13.07
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAL/PASSAT CC 3.6 280 HP TIP QUATTRO / PASSAL/PASSAT CC 3.6 280 HP TIP',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 11.09
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'SPORT VAN 106100 HP MAN',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 14.05
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN 2.0 200 HP TIP TFSI QUATTO',
            'year' => 2010,
            'cylinders' => 4,
            'performance' => 12.78
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'ROUTAN 3.8198 HP TIP',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 9.07
        ]);

        //VOLVO

        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'C30 2.4I AUTONOMÁTICA',
            'year' => 2010,
            'cylinders' => 5,
            'performance' => 11.1
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'C30 T5 MANUAL',
            'year' => 2010,
            'cylinders' => 5,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'C30 T5 AUT',
            'year' => 2010,
            'cylinders' => 5,
            'performance' => 10.6
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => '540 Z.41 MAN',
            'year' => 2010,
            'cylinders' => 5,
            'performance' => 10.7
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => '540 T5 AUT',
            'year' => 2010,
            'cylinders' => 5,
            'performance' => 10.9
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC 90 3.2 FWD / XC 90 3.2 AWD',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 8.6
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC 90 VO AWD',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 9.7
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'C70',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => '580 T6',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 8.9
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => '580 V8 AWD',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 8.4
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC60 3.2 AWD / XC60 3.2 FWD',
            'year' => 2010,
            'cylinders' => 6,
            'performance' => 8.9
        ]);

        //2011

        //ACURA

        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TL',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 9.49
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TL SHAWD',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.085
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'RL',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.42
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'MDX',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 8.25
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'RDX',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 10.98
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TSX',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 12.68
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'ZDX',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.78
        ]);

        //AUDI

        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A/3 SPORTBACK 1.4 Manual Front',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 18.507
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A/3 SPORTBACK 1.4 S tronic Front',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 17.813
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A/3 SPORTBACK 1.8 Manual Front',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.377
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A/3 SPORTBACK/CABRIO 1.8 S Tronic Front',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 17.554
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A/3 SPORTBACK 2.0 Manual Front',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 13.5971
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A/3 SPORTBACK/CABRIO 2.0 S Tronic Front / A3 SPORTBACK 2.0 S Tronic quattro',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 15.416
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4 1.8 Manual Front',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 15.881
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4 1.8 Multitronic Front',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 15.562
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4 2.0 Multitronic Front / A4 2.0 S Tronic quattro',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.765
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A5/SPORTBACK/CABRIO 2.0 Stronic quattro',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.765
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A5/SPORTBACK/CABRIO 3.2 Stronic quattro',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.947
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A6 2.8 MULTITRONIC FRONT',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.887
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'R8 4.2 MANUAL QUATTRO / R8 4.2 R TRONIC QUATTRO',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 9.267
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8 4.2 TIPTRONIC QUATTRO',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 10.468
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8 6.0 TIPTRONIC QUATTRO',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 9.29
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'TT 2.0T MANUAL FRONT / TT 2.0T S TRONIC FRONT',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 15.485
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q7',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 9.372
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'R8',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 6.698
        ]);

        //BENTLEY

        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'CONTINENTAL GT/GTC',
            'year' => 2011,
            'cylinders' => 12,
            'performance' => 5.876
        ]);
        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'ARNAGE / AZUFRE / BROOKLANDS',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 6.205
        ]);
        
        //BMW

        car::create([
            'brand' => 'BMW',
            'car_model' => '120i',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 12.80
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '120iA',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '125i',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 12.85
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '125iA',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 12.65
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '135i / 135iA',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325i / 325i COUPE',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325iA / 325iA COUPE',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.11
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325i CABRIO',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 12.66
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325iA CABRIO',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 12.05
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.49
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA COUPE',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA CONVERTIBLE',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '528iA',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 12.50
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535i',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '550iA',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 9.61
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535i GRAN TURISMO',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '550i GRAN TURISMO',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 8.93
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650i COUPE AUT',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 9.01
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650i CONVERTIBLE AUT',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 8.55
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '740i',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.10
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '750i / 750Li',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 8.77
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '760Li',
            'year' => 2011,
            'cylinders' => 12,
            'performance' => 7.69
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3 COUPE',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 8.06
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3 COUPE DGK',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 8.93
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3 CONVERTIBLE',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 7.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3 CONVERTIBLE DGK',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 8.70
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3 SEDAN',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 8.06
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3 SEDAN DGK',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 8.93
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 M / X6 M',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 7.19
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 XDRIVE25iA',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.30
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 XDRIVE28iA',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.10
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE28iA',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.11
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE35iA',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE35iA',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 8.00
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA SECURITY',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 7.35
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE35iA',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE50iA',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 8.00
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE 23iA AUT',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE 23iA MAN',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE 35iA AUT',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.64
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE 35iA MAN',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.20
        ]);

        //CHRYSLER

        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => 'TOWN & COUNTRY',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.49
        ]);

        //DODGE

        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.84
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER R/T',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 11.11
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER R/T',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 11.11
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER SRT8',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 9.64
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CALIBER',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 13.32
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'AVENGER',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 12.85
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY / JOURNEY R/T',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.33
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'ATOS',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 20.4
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'ATTITUDE',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 16.07
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DAKOTA',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 8.66
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 1500',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 8.75
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 2500',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 6.19
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 2500 CREW CAB / RAM 2500 QUAD CAB',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 7.33
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'NITRO',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 8.77
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'H100',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 10.46
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'H100 VAN',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 9.59
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'H100 WAGON',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 9.63
        ]);

        //FIAT

        car::create([
            'brand' => 'FIAT',
            'car_model' => '500',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 15.41
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'PANDA',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 18.21
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'LINEEA',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.4
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'STRADA',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 12.8
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'DUCATO',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 13.36
        ]);

        //FORD

        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA / FIESTA HATCHBACK',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 15.9
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA (A/T)',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 16.2
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA IKON SEDAN',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 12.3
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.4
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS ST',
            'year' => 2011,
            'cylinders' => 5,
            'performance' => 14.6
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS RS',
            'year' => 2011,
            'cylinders' => 5,
            'performance' => 14.7
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FUSION',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.7
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FUSION HYBRID',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 23.1
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MUSTANG',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MUSTANG (M/T)',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 13.2
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MUSTANG SHELBY',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'CROWN VICTORIA INTERCEPTOR',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ECOSPORT',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 11.2
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ESCAPE',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.0
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EDGE',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 12.2
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EDGE SPORT',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 12.3
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPLORER',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.8
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPEDITION',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 9.2
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPEDITION MAX',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 8.01
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'COURIER',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'RANGER CABINA CHASIS / RANGER CABINA CHASIS',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 10.9
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'F150 XL CABINA REGULAR 4X2 / F150 XL CABINA REGULAR 4X4 / F150 XL CABINA Y MEDIA 4X2',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.0
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'F150 XL DOBLE CABINA STYLESIDE / LOBO XLT CABINA REGULAR / LOBO XLT CABINA Y MEDIA / LOBO XLT DOBLE CABINA',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 9.1
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'LOBO LARIAT DOBLE CABINA / lOBO KING RANCH DOBLE CABINA / LOBO FX4 CABINA Y MEDIA',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 9.1
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'LOBO HARLEY DAVIDSON DOBLE CABINA / LOBO LIMITED DOBLE CABINA',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 8.3
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'LOBO RAPTOR SVT CABINA Y MEDIA',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 6.9
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'TRANSIT PASAJEROS / TRANSIT VAN / TRANSIT CHASIS',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 12.1
        ]);
        
        //HONDA

        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ACORD LX',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.465
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ACORD',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 13.275
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ACORD CROSSTOUR',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.7035
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 16.38
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC HÍBRIDO',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 23.42
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC SI',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 12.85
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ODYSSEY',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 9.245
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ODYSSEY TOURING',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 9.515
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CRV',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 12.19
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'PILOT',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 8.17
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'RIDGELINE',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 7.735
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'FIT',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 16.575
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CITY',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 16.29
        ]);

        //JEEP

        car::create([
            'brand' => 'JEEP',
            'car_model' => 'COMPAS',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 11.48
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'WRANGLER',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 8.36
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'GRAND CHEROKEE',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 7.1
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'PATRIOT',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 13.53
        ]);

        //LINCOLN

        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKZ 4x2 ',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 12.4
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKS 3.5L',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKS 3.7L FWD',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.2
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKX',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.6
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKX AWD',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.1
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MARK LT 6.2L 4X2',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 8.3
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MARK LT 6.2L 4X4',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 6.9
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MARK LT 5.0L 4X2 / MARK LT 5.0L 4X4',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 9.1
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'NAVIGATOR 4X2 / NAVIGATOR 4X4 / NAVIGATOR L 4X2',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 6.5
        ]);

        //SEAT

        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.4 150 HP DSG TURBO',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 18.784
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.6 105 HP DSG',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 16.556
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 2.0 115 HP MAN',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 16.312
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEÓN 1.4 125 HP TFSI',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 18.26
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'ALTEA 1.4 125 HP MAN TURBO',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 15.614
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'ALTEA 1.8 160 HP MAN TSI',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.293
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'ALTEA 1.8 160 HP DSG TSI',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.741
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'ALTEA 2.0 211 HP DSG TFSI',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 13.056
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.8 HP MAN TSI / LEON 1.8 160 HP DSG TSI',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 11.958
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEÓN 2.0 211 HP DSG TFSI',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 13.056
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEÓN 2.0 211 HP MAN TFSI',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 13.395
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEÓN 2.0 240 HP MAN TFSI CUPRA / LEÓN 2.0 266 HP MAN TFSI CUPRA R',
            'year' => 2011,
            'cylinders' => 5,
            'performance' => 11.958
        ]);

        //SUBARU

        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'FORESTER',
            'year' => 2011,
            'cylinders' => 2,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'WRX STI',
            'year' => 2011,
            'cylinders' => 2,
            'performance' => 10.6
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'OUTBACK',
            'year' => 2011,
            'cylinders' => 2,
            'performance' => 10.7
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA',
            'year' => 2011,
            'cylinders' => 2,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'LEGACY',
            'year' => 2011,
            'cylinders' => 2,
            'performance' => 10.7
        ]);

        //SUZUKI

        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SWIFT',
            'year' => 2011,
            'cylinders' => 0,
            'performance' => 16.29
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SX4 SEDAN / SX4-X OVER',
            'year' => 2011,
            'cylinders' => 0,
            'performance' => 14.51
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'KIZASHI',
            'year' => 2011,
            'cylinders' => 0,
            'performance' => 14.52
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'GRAND VITARA 2.4 2WD',
            'year' => 2011,
            'cylinders' => 0,
            'performance' => 12.86
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'GRAND VITARA 2.4 4WD',
            'year' => 2011,
            'cylinders' => 0,
            'performance' => 11.65
        ]);

        //TOYOTA

        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'CAMRY',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'COROLLA CE NG',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 12.7
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'COROLLA NG',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 13.0
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'MATRIX NG',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 12.2
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'YARIS HB / YARIS SEDAN',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 19.3
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'AVANZA',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'PRIUS',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 21.1
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'RUSH',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => '4 RUNNER',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 7.6
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'LAND CRUISER',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 6.3
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'RAV4',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.9
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HIGHLANDER 4X2',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 8.8
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HIGHLANDER 4X4',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 8.4
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'FJ CRUISER AWD',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 7.6
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'SEQUOIA 2009',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 6.5
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'SEQUOIA',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 8.5
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'SIENNA',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 9.6
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'SIENNA NG',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HIACE',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 8.3
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HILUX',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 10.0
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'TACOMA',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 8.6
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'TUNDRA V6',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 7.8
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'TUNDRA V8',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 8.5
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'TUNDRA V8 2009',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 7.0
        ]);

        //VOLKSWAGEN

        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE GP 2.0 115 HP AUT',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.048
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE GP 2.0 115 HP MAN',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.906
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE GP/CABRIO 2.5 150 HP AUT',
            'year' => 2011,
            'cylinders' => 5,
            'performance' => 13.666
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE GP/CABRIO 2.5 150 HP MAN',
            'year' => 2011,
            'cylinders' => 5,
            'performance' => 13.726
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BORA A5 2.0 200 HP TSFI DSG',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.174
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BORA A5 2.0 200 HP TSFI MAN',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.586
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BORA A5/GOLF SPORTEAGEN 2.5 170 HP MAN',
            'year' => 2011,
            'cylinders' => 5,
            'performance' => 14.306
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BORA A5/GOLF SPORTEAGEN 2.5 170 HP DSG',
            'year' => 2011,
            'cylinders' => 5,
            'performance' => 14.829
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA GP 1.8 180 HP MAN TURBO',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 15.471
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA GP 1.8 180 HP TIP TURBO',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 13.521
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA GP 2.0 115 HP AUT',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 15.793
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA GP 2.0 115 HP MAN',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 16.158
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA GP 2.0 115 HP MAN',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 16.158
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA GP 1.9 100 HP MAN TDI',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 17.64
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BORA A5/GOLF SPORTEAGEN GEN 1.9 105 HP DSG TDI',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 16.708
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BORA A5/GOLF SPORTEAGEN GEN 1.9 105 HP MAN TDI',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 17.121
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CROSSFOZ/LUPO 1.6 100 HP MAN',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.052
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOL/GOL SEDAN 1.6 100 HP MAN',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 16.608
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'SAVEIRO 1.6 100 HP MAN',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 13.066
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT/PASSAT CC 3.6 280 HP TIP QUATTRO / PASSAT/PASSAT CC 3.6 280 HP TIP',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 11.091
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT/PASSAT CC 3.6 280 HP TFSI DSG',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 11.091
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PICK UP 1.8 98 HP MAN',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.368
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'SPORT VAN 1.6 100 HP MAN',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.052
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN 2.0 200 HP TIP TFSI / TIGUAN 2.0 200 HP TIP TFSI QUATTRO',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 12.778
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'ROUTAN 3.8 198 HP TIP',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 9.066
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'EOS 2.0 200 HP DSG TFSI',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF GTI 2.0 200 HP DSG TFSI',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 12.547
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF GTI 2.0 200 HP MAN TFSI',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 13.127
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOAREG 3.6 280 HP TIP',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 7.08
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOAREG 4.2 360 HP TIP',
            'year' => 2011,
            'cylinders' => 8,
            'performance' => 6.997
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOAREG 3.0 240 HP TIP TDI',
            'year' => 2011,
            'cylinders' => 6,
            'performance' => 10.438
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'T5 1.9 104 HP MAN AXB',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 12.837
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TRANSPORTER 2.0 102 HP MAN (PANEL-COMBI-CHASIS)',
            'year' => 2011,
            'cylinders' => 4,
            'performance' => 13.167
        ]);

        //2012

        //ACURA

        car::create([
            'brand' => 'ACURA',
            'car_model' => 'RL',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.42
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'MDX',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 8.25
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'RDX',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 10.98
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TL',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.59
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TL SHAWD',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.99
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TSX',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 14.51
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'ZDX',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.78
        ]);

        //ALFA ROMEO

        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'MITO',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 16.18
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'GIULIETTA',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 16.83
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => '159',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 10.70
        ]);

        //AUDI

        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A1',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 18.32
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3/SPORTBACK',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 18.51
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 15.88
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A5/SPORTBACK',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 10.95
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A5/SPORTBACK/CABRIO',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 14.77
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A6',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 12.01
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A7',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 10.39
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q5',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 11.19
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q7',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.51
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'R8',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 9.27
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'RS',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 7.91
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S3 /S4',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 11.48
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S5',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 7.98
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'TT',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 14.60
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'TTRS',
            'year' => 2012,
            'cylinders' => 5,
            'performance' => 10.73
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'TTS',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.13
        ]);

        //BENTLEY
        
        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'CONTIENTAL GT/GTC/FLYING SPUR',
            'year' => 2012,
            'cylinders' => 12,
            'performance' => 5.35
        ]);
        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'CONTIENTAL SUPERSPORT',
            'year' => 2012,
            'cylinders' => 12,
            'performance' => 5.39
        ]);
        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'MULSANNE',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 7.38
        ]);

        //BMW

        car::create([
            'brand' => 'BMW',
            'car_model' => '118i',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 17.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '118iA',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 17.85
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '125i / 125iA',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 12.34
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '135i / 135iA',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328i',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 15.62
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328iA',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325i / 325i COUPE',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325iA / 325iA COUPE',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.11
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325i CONVERTIBLE',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 12.66
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325ia CONVERTIBLE',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 12.35
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335i',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 12.65
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 12.88
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335i COUPE / 335iA COUPE',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.53
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335i CONVERTIBLE / 335iA CONVERTIBLE',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.10
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '528iA / 535i',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 12.82
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 13.15
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '550iA',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 9.61
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535i GRAN TURISMO',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.23
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '550i GRAN TURISMO',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.92
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650i CONVERTIBLE / 650i COUPE',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 9.43
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '740i',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.10
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '750i / 750Li',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.77
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '760Li',
            'year' => 2012,
            'cylinders' => 12,
            'performance' => 7.69
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.06
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M5',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 10.10
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 M / X6 M',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 7.19
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 SDRIVE20i',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 14.08
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 SDRIVE25i',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.10
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 SDRIVE28i',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.65
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 SDRIVE28i',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.11
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 SDRIVE35i',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 SDRIVE35iA',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 SDRIVE50iA SECURITY',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 10.00
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 SDRIVE35iA',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 SDRIVE50iA',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.00
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE20i / Z4 SDRIVE20iA',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 14.70
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE35i',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE35iA',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.20
        ]);
    
        //BUICK

        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCLAVE',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.72
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'LACROSSE',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 12.32
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'REGAL',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.41
        ]);

        //CADILLAC

        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.96
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS SPORT',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.53
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS V',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.35
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ESCALADE',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.23
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'SRX',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.52
        ]);

        //CHEVROLET

        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'AVALANCHE',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 9.76
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'AVEO',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 17.72
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 12.37
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAPTIVA',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.23
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEVY',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 16.99
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'COLORADO',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 11.57
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE ZR1',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 9.73
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 14.86
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'EXPRESS CARGO VAN',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 9.59
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'EXPRESS PASSENGER VAN',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.11
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 13.91
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MATIZ',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 18.75
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 1500',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 9.52
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CHEYENNE',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 9.78
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 15.57
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SPARK',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 20.34
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SUBURBAN',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TAHOE',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TORNADO',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 14.57
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAVERSE',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.13
        ]);

        //CHRYSLER

        car::create([
            'brand' => 'CHYSLER',
            'car_model' => '200',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 13.32
        ]);
        car::create([
            'brand' => 'CHYSLER',
            'car_model' => '200 LIMITED',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 12.80
        ]);
        car::create([
            'brand' => 'CHYSLER',
            'car_model' => '300',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.48
        ]);
        car::create([
            'brand' => 'CHYSLER',
            'car_model' => '300C',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 11.06
        ]);
        car::create([
            'brand' => 'CHYSLER',
            'car_model' => '300 SRT8',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.71
        ]);
        car::create([
            'brand' => 'CHYSLER',
            'car_model' => 'TOWN & COUNTRY',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 9.53
        ]);

        //DODGE

        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.56
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER R/T',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 9.35
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER SRT8',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.71
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER R/T',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 10.16
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER SRT8',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 9.48
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CALIBER',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 13.32
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'AVENGER',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.19
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.16
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY R/T',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.59
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'ATOS',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 20.40
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'i10',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 21.91
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'ATTITUDE',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 18.31
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.31
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DAKOTA',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 8.66
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 1500',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 8.94
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 2500',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.24
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 2500 CREW CAB',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 7.09
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 2500 QUAD CAB',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 7.33
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'NITRO',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 8.77
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'H100 VAN',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 10.63
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'H100 WAGON',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 10.85
        ]);

        //FIAT

        car::create([
            'brand' => 'FIAT',
            'car_model' => '500',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 15.41
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'PANDA',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 18.21
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'LINEA',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 14.40
        ]);
        car::create([
            'brand' => 'FIAT', 
            'car_model' => 'STRADA / PALIO',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.90
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'PUNTO',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 17.01
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'DOBLO',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 17.78
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'DUCATO',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 13.36
        ]);

        //FORD

        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 19.41
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'IKON',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 16.26
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 19.50
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FUSION',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.31
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FUSION HIBIRIDO',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 23.16
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MUSTANG',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 11.37
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MUSTANG SHELBY',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 10.60
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'COURIER',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.70
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'RANGER',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 10.96
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'F150 / LOBO',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 9.83
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'TRANSIT',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.21
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ECOSPORT',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 11.92
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ESCAPE',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.29
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPLORER',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.86
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EDGE',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 12.64
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPEDITION',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 9.38
        ]);

        //GMC

        car::create([
            'brand' => 'GMC',
            'car_model' => 'ACADIA',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.13
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'CANYON',
            'year' => 2012,
            'cylinders' => 5,
            'performance' => 10.31
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'SIERRA CR',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 9.78
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'SIERRA DC',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 9.13
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'SIERRA DENALI',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 6.21
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'TERRAIN',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.55
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'YUKON DENALI',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.23
        ]);

        //HONDA

        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ACORD COUPÉ',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 13.09
        ]);     
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ACORD SEDÁN EX L',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 13.28
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ACORD SEDÁN LX',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 14.47
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC COUPÉ EX',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 13.97
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC COUPÉ SI',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 13.53
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC HYBRID',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 24.51
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC SEDÁN EX/CIVIC SEDÁN EXL/CIVIC SEDÁN LX ',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 13.97
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC SEDÁN SI',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 13.53
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CROSSTOUR',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.70
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CR-V EX/CR-V LX/ CR-V EX-L',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 13.63
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CITY EX / CITY LX',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 16.52
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'FIT EX / FIT LX ',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 16.58
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'PILOT EX / PILOT TOURING',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 8.17
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ODTSSEY EXL / ODTSSEY LX',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 9.25
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'OODTSSEY TOURING',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 9.52
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'RIDGELINE',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 7.74
        ]);

        //INFINITI

        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX56',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.59
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'M37',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 12.57
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'M56',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 11.35
        ]);
        car::create([   
            'brand' => 'INFINITI',
            'car_model' => 'G37 SEDÁN',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 12.72
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'G25 SEDÁN',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 13.83
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'G37 COUPÉ',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 12.27
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'FX35',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.34
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'FX50',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 9.06
        ]);

        //JEEP

        car::create([
            'brand' => 'JEEP',
            'car_model' => 'COMPAS',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 11.48
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'WRANGLER',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.14
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'LIBERTY',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 8.70
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'GRAND CHEROKEE',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 9.94
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'GRAND CHEROKEE STR8',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 7.76
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'PATRIOT',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 13.53
        ]);

        //LINCONLN

        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKZ / MKS',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 9.59
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKX',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 12.28
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MARK LT',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.75
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'NAVIGATOR',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.21
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'NAVIGATOR L',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.26
        ]);

        //SEAT

        car::create([
            'brand' => 'SEAT',
            'car_model' => 'ALTEA',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 15.61
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'EXEO',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 13.84
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 18.78
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 18.26
        ]);

        //SUBARU

        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'FORESTER X/FORESTER XS/FORESTER XSL',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 12.90
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'FORESTER XT',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 11.60
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA 2.0 AUT 5PTAS',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 8.20
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA 2.0 MAN 5PTAS',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 8.40
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA 2.0 MAN 5PTAS',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 11.00
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA 2.0 XV',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 11.90
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA 2.5 I SPORT',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 12.40
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA SEDÁN 2.0 AUT',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 8.20
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA SEDÁN 2.0 MAN',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 8.40
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA SEDÁN WRX STI',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 10.50
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA WRX SE SEDÁN',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 11.40
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA WRX STI',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 10.50
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA WRX SW 5PTAS',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 11.60
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'LEGACY 2.5I SPORT / LEGACY 2.5I',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 11.00
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'LEGACY GT',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 10.60
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'OUTBACK 2.5 LTD / OUTBACK 2.5I',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 13.70
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'OUTBACK 3.6 LTD',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 11.10
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'TRIBECA 7 ST',
            'year' => 2012,
            'cylinders' => 0,
            'performance' => 9.90
        ]);

        //SUZUKI

        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'GRAND VITARA 2.4 2WD',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.86
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'KIZASHI',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 14.52
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SX4 SEDÁN / SX4 X-OVER',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 14.51
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SWIFT 5MT',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 20.30
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SWIFT 4AT',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 18.47
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SWIFT SPORT',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 17.50
        ]);

        //TOYOTA

        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'CAMRY',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 11.11
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'CAMRY NG',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 14.25
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'COROLLA',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 13.03
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'MATRIX',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.23
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'YARIS',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 19.34
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'YARIS NG HB',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 18.20
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'AVANZA',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 11.43
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'PRIUS',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 21.12
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'LAND CRUISER',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 6.27
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'RAV4',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.94
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HIGHLANDER 4X2',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 8.83
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HIGHLANDER 4X4',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 8.37
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'FJ CRUISER AWD',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 7.57
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'SEQUOIA',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.52
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'SIENNA NG',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.34
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HIACE',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 8.26
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HILUX',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 9.96
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'TACOMA',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 8.59
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'TUNDRA V6',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 7.79
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'TUNDRA V8',
            'year' => 2012,
            'cylinders' => 8,
            'performance' => 8.52
        ]);

        //VOLSKWAGEN

        car::create([
            'brand' => 'VOLSKWAGEN',
            'car_model' => 'AMAROK',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.76
        ]);
        car::create([
            'brand' => 'VOLSKWAGEN',
            'car_model' => 'BEETLE',
            'year' => 2012,
            'cylinders' => 5,
            'performance' => 13.75
        ]);
        car::create([
            'brand' => 'VOLSKWAGEN',
            'car_model' => 'CROSSFOX',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 14.05
        ]);
        car::create([
            'brand' => 'VOLSKWAGEN',
            'car_model' => 'GOL / GOL SEDÁN',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 17.41
        ]);
        car::create([
            'brand' => 'VOLSKWAGEN',
            'car_model' => 'GOL GTI',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.77
        ]);
        car::create([
            'brand' => 'VOLSKWAGEN',
            'car_model' => 'GOLF SPORTWAGEN',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 16.62
        ]);
        car::create([
            'brand' => 'VOLSKWAGEN',
            'car_model' => 'JETTA CLASICO',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 15.40
        ]);
        car::create([
            'brand' => 'VOLSKWAGEN',
            'car_model' => 'JETTA MKVI',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 16.62
        ]);
        car::create([
            'brand' => 'VOLSKWAGEN',
            'car_model' => 'NUEVO PASSAT',
            'year' => 2012,
            'cylinders' => 5,
            'performance' => 13.93
        ]);
        car::create([
            'brand' => 'VOLSKWAGEN',
            'car_model' => 'PASSAT CC',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.62
        ]);
        car::create([
            'brand' => 'VOLSKWAGEN',
            'car_model' => 'ROUTAN',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 9.53
        ]);
        car::create([
            'brand' => 'VOLSKWAGEN',
            'car_model' => 'SAVEIRO',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 13.07
        ]);
        car::create([
            'brand' => 'VOLSKWAGEN',
            'car_model' => 'TIGUAN GP',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.78
        ]);
        car::create([
            'brand' => 'VOLSKWAGEN',
            'car_model' => 'TOUAREG',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 10.44
        ]);
        car::create([
            'brand' => 'VOLSKWAGEN',
            'car_model' => 'TRANSPORTER',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 13.17
        ]);

        //VOLVO

        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'S40',
            'year' => 2012,
            'cylinders' => 5,
            'performance' => 11.1
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC60',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC90 AWD',
            'year' => 2012,
            'cylinders' => 6,
            'performance' => 8.7
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'S80',
            'year' => 2012,
            'cylinders' => 4,
            'performance' => 12.3
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'C70',
            'year' => 2012,
            'cylinders' => 5,
            'performance' => 10.6
        ]);

        //2013

        //ACURA

        car::create([
            'brand' => 'ACURA',
            'car_model' => 'ILX 2.0 TECH / ILX 2.0 PREMIUM',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 16.27
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'ILX 2.4 PREMIUM',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 14.25
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'MDX',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 8.25
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'RDX',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TL',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 10.58
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TL SHAWD',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.98
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TSX L4',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 14.50
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TSX V6',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.68
        ]);

        //ALFA ROMEO

        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'GIULIETTA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 12.67
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'MITO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 16.18
        ]);

        //AUDI

        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A1',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 19.02
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 20.68
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3 CABRIO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 18.00
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 16.97
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A5/SPORTBACK / A5 CABRIO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 16.42
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A6',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 14.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A7',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.63
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.98
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q3',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 19.39
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q5',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 17.33
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q7',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 14.32
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'R8',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 22.59
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S4 / S5 / S5 SPORTBACK',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.36
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S6 / S7',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 11.01
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'TT',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 16.06
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'TTRS',
            'year' => 2013,
            'cylinders' => 5,
            'performance' => 12.72
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'TTS',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 13.43
        ]);

        //BENTLEY

        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'CONTINENTAL GT/GTC/FLYING SUPUR',
            'year' => 2013,
            'cylinders' => 12,
            'performance' => 7.92
        ]);
        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'MULSANNE',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 7.43
        ]);

        //BMW

        car::create([
            'brand' => 'BMW',
            'car_model' => '118i',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 16.95
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '118iA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 17.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '125i COUPE/ 125iA COUPE',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.35
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '135i / 135iA',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '320i',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.62
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '320iA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325iA COUPE',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 10.99
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '325iA CONVERTIBLE',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 10.53
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328i',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328iA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335i',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.66
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 13.89
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335i COUPÉ',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA CONVERTIBLE',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA ACTIVE HYBRID',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 16.95
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '530iA',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.2
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA GRAN TURISMO',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.2
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '550iA',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 9.61
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650i COUPÉ / 650i GRAN COUPÉ',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 11.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '740iA',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.66
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '750iA / 750LiA SEDÁN',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 11.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '760LiA SEDÁN',
            'year' => 2013,
            'cylinders' => 12,
            'performance' => 7.75
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M13Si',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M13SiA',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3 COUPÉ SEC',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.93
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M5 SEDÁN AUT',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M6 CONVERTIBLE',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 9.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M6 COUPÉ AUT',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE20iA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 14.70
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE35iA',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.11
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 SDRIVE20iA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 XDRIVE28iA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE28iA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE35iA',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 M / X6 M',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 7.19
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE35iA',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA / X5 XDRIVE50iA SECURITY',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.00
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE35iA',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE50iA',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.00
        ]);

        //BUICK

        car::create([
            'brand' => 'BUICK',
            'car_model' => 'LACROSSE',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.32
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'REGAL',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 12.41
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'VERANO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 14.41
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCLAVE',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 10.72
        ]);

        //CADILLAC

        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.96
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS SPORT',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.53
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS V',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.35
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ATS',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 14.53
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ESCALADE',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.36
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'SRX',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.91
        ]);

        //CHEVROLET

        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'AVALANCHE',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 9.17
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'AVEO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 17.72
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 13.49
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAPTIVA',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 10.63
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'COLORADO',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.75
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 11.01
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE CONVERTIBLE',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 10.84
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE ZR1',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 9.73
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 14.86
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'EXPRESS CARGO VAN',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 9.61
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'EXPRESS PASSENGER VAN',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.22
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU LS',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.06
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU LT',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 14.44
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU LTZ',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.13
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MATIZ',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 18.75
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 1500',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 9.52
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CHEYENNE',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 9.78
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.57
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SPARK',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 20.34
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SUBURBAN',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 9.17
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TAHOE',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 9.60
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TORNADO A',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.89
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TORNADO B',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 16.16
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TORNADO C',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.88
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAVERSE',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.13
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAX',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.37
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAX LTZ',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 14.31
        ]);

        //CHRYSLER

        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 LIMITED',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.80
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '300',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.84
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '300C',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 11.06
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '300 SRT8',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.71
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => 'TOWN & COUNTRY',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 9.53
        ]);

        //DODGE

        car::create([
            'brand' => 'DODGE',
            'car_model' => 'ATOS',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 20.40
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'ATTITUDE',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 18.31
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'AVENGER',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 12.19
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER R/T',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 10.16
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER SRT8',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 9.48
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 10.56
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER R/T',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 9.35
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER SRT8',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.71
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.93
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 10.31
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'H100 VAN',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 10.63
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'H100 WAGON',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 10.85
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'i10',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 21.91
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 12.16
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY R/T',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 10.59
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 1500',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 8.94
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 2500',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.24
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 2500 CREW CAB',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 7.09
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 2500 QUAD CAB',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 7.33
        ]);

        //FIAT

        car::create([
            'brand' => 'FIAT',
            'car_model' => '500',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.41
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 TURBO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 16.90
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'DOBLO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 17.78
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'DUCATO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 13.36
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'LINEA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 14.40
        ]);
        car::create([
            'brand' => 'FIAT', 
            'car_model' => 'PALIO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 12.42
        ]);
        car::create([
            'brand' => 'FIAT', 
            'car_model' => 'PALIO ADVENTURE',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 12.90
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'PANDA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 18.21
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'PUNTO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 17.01
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'STRADA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 13.18
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'UNO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 14.11
        ]);

        //FORD

        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 19.43
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'IKON',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 16.26
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS / FOCUS ST',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 18.21
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FUSION',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 27.95
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MUSTANG',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 11.56
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MUSTANG SHELBY',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 11.04
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'RANGER',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 10.10
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'F150 / LOBO',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.75
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'TRANSIT',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 12.21
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ECOSPORT',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.10
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ESCAPE',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 14.77
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPLORER',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 10.86
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EDGE',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.64
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPEDITION / EXPEDITION MAX',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 9.38
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'TAURUS POLICE INTER',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.40
        ]);

        //GMC

        car::create([
            'brand' => 'GMC',
            'car_model' => 'YUKON DENALI',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.36
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'SIERRA REG CAB',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 9.17
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'SIERRA CREW CAB',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 9.02
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'SIERRA DENALI',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.36
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'ACADIA',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.13
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'TERRAIN',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.29
        ]);

        //HONDA

        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ACCORD COUPÉ EXL / ACCORD COUPÉ EXL V6',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.03
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ACCORD SEDÁN EXL/ ACCORD SEDÁN LX',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 13.63
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC COUPÉ EX',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 13.99
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC HÍBRIDO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 25.10
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC SEDÁN EX / CIVIC SEDÁN EXL / CIVIC SEDÁN LX ',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 13.96
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC SI',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 13.52
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CROSSTOUR',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 10.73
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CR-V EXL / CR-V LX',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 13.63
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CR-Z',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 20.03
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'HONDA CITY EX / HONDA CITY LX',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 16.52
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'HONDA FIT EX / HONDA FIT LX',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 16.57
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'HONDA PILOT EX / HONDA PILOT TOURING',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 8.17
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ODYSSEY EXL',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 9.24
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ODYSSEY LX',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 9.25
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ODYSSEY TOURING',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 9.51
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'RIDGELINE',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 7.73
        ]);

        //INFINITI

        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX56',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.59
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'M37',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.57
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'M56',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 11.35
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'G37 COUPÉ',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.27
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'G37 SEDÁN',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.10
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'G25 SEDÁM',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 13.10
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'FX37',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 10.60
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'FX50 4X4',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 9.10
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'JX35 4X2',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.80
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'JX35 4X4',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 11.40
        ]);

        //JEEP

        car::create([
            'brand' => 'JEEP',
            'car_model' => 'COMPAS',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 11.48
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'WRANGLER',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 10.14
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'LIBERTY',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 8.70
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'GRAND CHEROKEE',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 9.94
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'GRAND CHEROKEE STR8',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 7.76
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'PATRIOT',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 13.53
        ]);

        //LINCOLN

        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'LINCOLN MKZ',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 12.19
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'LINCOLN MKS',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 9.59
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKX',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 12.29
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MARK LT 4X4',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.75
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MARK LT 4X2',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 9.86
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'NAVIGATOR / NAVIGATOR L',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.26
        ]);

        //SEAT

        car::create([
            'brand' => 'SEAT',
            'car_model' => 'ALTEA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.81
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 21.81
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 18.11
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 19.80
        ]);

        //SUZUKI

        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'GRAND VITARA 2.4 2WD',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 12.86
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'GRAND VITARA 2.4 4WD',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 11.65
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'KIZASHI',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 14.52
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SWIFT 4AT',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 18.47
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SWIFT 5MT',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 20.30
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SWIFT SPORT',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 17.50
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SX4 SEDAN / SX4 X-OVER',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 14.51
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SX4 SEDAN',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 14.51
        ]);

        //TOYOTA

        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'AVANZA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 11.43
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'AVANZA NG',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 12.06
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'CAMRY',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 14.23
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'COROLLA',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 10.93
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'COROLLA NG',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 13.21
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'FJ CRUISER AWD',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 7.57
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HIACE',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 8.26
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HIGHLANDER 4X2',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 8.83
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HIGHLANDER 4X4',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 8.37
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HILUX',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 9.96
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'LAND CRUISER',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 6.27
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'PRIUS',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 21.12
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'RAV4',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 10.94
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'RAV4 NG',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 13.61
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'SEQUOIA',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.52
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'SIENNA NG',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 10.34
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'TACOMA',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 8.59
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'TUNDRA V6',
            'year' => 2013,
            'cylinders' => 6,
            'performance' => 7.79
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'TUNDRA V8',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 8.52
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'YARIS',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 19.34
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'YARIS NG HB',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 18.26
        ]);

        //VOLKSWAGEN

        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 18.34
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CROSSFOX',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 13.69
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOL / GOL SEDAN',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 17.46
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 18.71
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF GTI',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.53
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF SPORTWAGEN',
            'year' => 2013,
            'cylinders' => 5,
            'performance' => 14.33
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA CLASICO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.14
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.81
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT',
            'year' => 2013,
            'cylinders' => 5,
            'performance' => 14.54
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'POLO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 19.40
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN GP',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 15.30
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOUAREG',
            'year' => 2013,
            'cylinders' => 8,
            'performance' => 10.72
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'AMAROK',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 12.07
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'SAVEIRO',
            'year' => 2013,
            'cylinders' => 4,
            'performance' => 17.06
        ]);

        //VOLVO

        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'C30',
            'year' => 2013,
            'cylinders' => 5,
            'performance' => 9
        ]);

        //2014

        //ACURA

        car::create([
            'brand' => 'ACURA',
            'car_model' => 'ILX 20 TECH / ILX BASE / ILX PREMIUM',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 16.27
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'MDX / MDX SH-AWD',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 9.58
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'RDX',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'RLX',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 10.31
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TSX L4',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.5
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TSX V6',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.68
        ]);

        //ALFA ROMEO

        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'GIULIETTA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.97
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'MITO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 16.51
        ]);

        //AUDI

        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A1 / A1 SPORTBACK',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 19.02
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 20.68
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3 CABRIO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 19.07
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 16.97
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A5 / A5 SPORTBACK / A5 CABRIO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.83
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A6',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 14.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A7 SPORTBACK',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.63
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8 / A8 LBW',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 11.98
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8 W12',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 9.45
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q3',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 19.39
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q5',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 17.33
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q7',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 14.32
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'R8',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 22.59
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'RS Q3',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 13.01
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S Q5',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 11.85
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S4 / S5',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.36
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S6 / S7',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 11.01
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S8',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 10.74
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'TT',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 18.54
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'TTRS',
            'year' => 2014,
            'cylinders' => 5,
            'performance' => 12.72
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'TTS',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.43
        ]);
        
         //BENTLEY

         car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'CONTINENTAL GT/GTC',
            'year' => 2014,
            'cylinders' => 12,
            'performance' => 8.98
        ]);
        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'FLYING SPUR',
            'year' => 2014,
            'cylinders' => 12,
            'performance' => 8.08
        ]);
        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'MULSANNE',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 7.43
        ]);

        //BMW

        car::create([
            'brand' => 'BMW',
            'car_model' => '118i',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 16.95
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '118iA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 17.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '220iA COUPÉ',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '320i',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '320iA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328i',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328iA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 13.89
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA ACTIVE HYBRID',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 5.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA GRAN TURISMO',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.99
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '420iA COUPÉ',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 16.39
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '428iA CONVERTIBLE',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.93
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '428iA COUPÉ / 428iA GRAN COUPÉ',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA CONVERIBLE',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.99
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA COUPÉ',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 13.51
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA GRAN COUPÉ',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '520iA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '528iA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.38
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA ACTIVE HYBRID',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 7
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA GRAN TURISMO',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.2
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '550iA',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 9.61
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '550iA GRAN TURISMO',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 10.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650iA CONVERTIBLE',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 10.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650iA COUPÉ / 650iA GRAN COUPÉ',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 11.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '740iA / 740LiA',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.66
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '750iA / 750LiA SEDÁN',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 11.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '760LiA SEDÁN',
            'year' => 2014,
            'cylinders' => 12,
            'performance' => 7.75
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M13Si',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M13SiA',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M23SiA COUPÉ',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3 SEDÁN / M4 COUPÉ',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 12.05
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M5 SEDÁN AUT',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M6 CONVERTIBLE',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 9.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M6 COUPÉ / M6 GRAN COUPÉ',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 SDRIVE20iA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 XDRIVE28iA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE28iA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE35iA',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 M / X6 M',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 7.19
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE35iA',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.00
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA SECURITY',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 7.40
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE35iA',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE50iA',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.00
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6M 50dA',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 12.99
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE18iA / Z4 SDRIVE20iA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE35iA / Z4 SDRIVE35is',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 11.11
        ]);

        //BUICK

        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCLAVE',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 10.72
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCORE',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 16.18
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'LACROSSE',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.32
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'REGAL',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.64
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'VERANO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.66
        ]);

        //CADILLAC

        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.49
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS COUPÉ',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 11.28
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS V',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.35
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ATS',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.4
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ESCALADE',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.23
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'SRX',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 11.52
        ]);

        //CHEVROLET

        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'AVEO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 17.72
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.37
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAPTIVA',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 13.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'COLORADO',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 11.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 12.7
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE CONVERTIBLE',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 12.7
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.9
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE TURBO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 18
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'EXPRESS CARGO VAN',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 9.59
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'EXPRESS PASSENGER VAN',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.11
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 16.52
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU TURBO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.12
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MATIZ',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 19.46
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 1500',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 11.65
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CHEYENNE',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 10.61
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 17.16
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SPARK',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 20.92
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SUBURBAN',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TAHOE',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TORNADO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.89
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAVERSE',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 11.13
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAX',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.37
        ]);

        //CHRYSLER

        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 LIMITED',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.19
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 LIMITED CONVERTIBLE',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.47
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 TOURING',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.69
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '300 C',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 11.59
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '300 SRT8',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.64
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => 'TOWN & COUNTRY',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 9.53
        ]);

        //DODGE

        car::create([
            'brand' => 'DODGE',
            'car_model' => 'ATTITUDE',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 16.91
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'AVENGER SE / AVENGER STX',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 12.69
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'AVENGER STX SPORT',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 12.19
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER RALLYE REDLINE',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 9.98
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER R/T',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 9.09
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER SRT8',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.44
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER POLICE',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 10.56
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER REALLYE REDLINE',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.33
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER R/T',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 9.35
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER SRT8',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.5
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER SXT',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 10.56
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER SXT PREMIUM',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 12.33
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART GT',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 10.93
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART LIMITED',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.9
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART SXT',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 10.93
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO CITADEL',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 8.34
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO CREW',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 8.34
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO SXT',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 10.03
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'H100 VAN',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 10.63
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'H100 WAGON',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 10.85
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'i10',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 19.89
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY CROSSROAD',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 12.16
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY R/T',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 10.59
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY SE / JOURNEY SXT',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.16
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 1500',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 11.1
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 2500',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.13
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'RAM 2500 CREW CAB',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 7.96
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'VIPER GTS COUPÉ / VIPER VENOM',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 7.85
        ]);

        //FIAT

        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 ABARTH',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 16.04
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'DUCATO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.36
        ]);
        car::create([
            'brand' => 'FIAT', 
            'car_model' => 'PALIO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 12.89
        ]);
        car::create([
            'brand' => 'FIAT', 
            'car_model' => 'PALIO ADVENTURE',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.11
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'PUNTO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.02
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'STRADA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 12.4
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'UNO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.8
        ]);

        //FORD

        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 19.43
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'IKON',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.65
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS / FOCUS ST',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 18.21
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FUSION',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 28.06
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MUSTANG SHELBY',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 11.04
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'NAVIGATOR',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.26
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'POLICE INTERCEPTOR',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 12.40
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'RANGER',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 10.10
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'F150 / LOBO',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.75
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'TRANSIT',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 12.21
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ECOSPORT',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.10
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ESCAPE',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.77
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPEDITION / EXPEDITION MAX',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 9.38
        ]);

        //GMC

        car::create([
            'brand' => 'GMC',
            'car_model' => 'YUKON DENALI',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.23
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'SIERRA DENALI',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 9.43
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'SIERRA DC',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 10.26
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'SIERRA RC',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 10.05
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'ACADIA',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 11.13
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'TERRAIN',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 11.29
        ]);

        //HONDA

        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ACCORD COUPÉ EXL / ACCORD EXL V6',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 11.03
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ACCORD EXL / ACCORD LX',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.63
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CITY EX / CITY LX',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 17.33
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC COUPÉ EX / CIVIC SEDÁN EX / CIVIC SEDÁN LX',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.99
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC SEDÁN EXL',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.96
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC HÍBRIDO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 25.10
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC SI',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.12
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CROSSTOUR',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 10.73
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CR-V EXL / CR-V LX / CR-V LX',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.63
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CR-Z',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 20.03
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'FIT 1.5EX / FIT 1.5LX',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 16.57
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'HONDA PILOT EX / HONDA PILOT TOURING',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 8.17
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ODYSSEY EX / ODYSSEY EXL / ODYSSEY LX / ODYSSEY TOURING',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 9.53
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'RIDGELINE',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 7.74
        ]);

        //INFINITI

        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 13.5
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 HYBRID',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 17
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q60 / Q70',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.27
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX60 4X2 / Q60 4X4',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 10.69
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX60 HYBRID 4X4',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.7
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX70',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 10.63
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX80',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.59
        ]);

        //JEEP

        car::create([
            'brand' => 'JEEP',
            'car_model' => 'CHEROKEE LATITUDE / CHEROKEE LIMITED / CHEROKEE SPORT',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 12
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'CHEROKEE TRAILHAWK',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 10.27
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'COMPAS LATITUDE / COMPAS LIMITED',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 11.86
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'GRAND CHEROKEE LIMITED 4X2/Grand Cherokee Overland 4X2',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 10.03
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'GRAND CHEROKEE LIMITED 4x4',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.03
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'GRAND CHEROKEE SRT8',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 7.86
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'GRAND CHEROKEE SUMMIT 4x4',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.34
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'PATRIOT LATITUDE / PATRIOT LIMITED',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 12.15
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'PATRIOT SPORT',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 12.15
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'WRANGLER RUBICON',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 8.68
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'WRANGLER SAHARA',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 9
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'WRANGLER SPORT',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 9.62
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'WRANGLER UNLIMITED RUBICON',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 8.24
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'WRANGLER UNLIMITED SAHARA / WRANGLER UNLIMITED SPORT',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 8.02
        ]);

        //LINCONLN

        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MARK 5.0L 4X4',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.75
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MARK 5.0L 4X2',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 9.86
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKZ 3.7L',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 12.19
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKS',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 9.59
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKZ 2.0L',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 12.18
        ]);


        //SEAT

        car::create([
            'brand' => 'SEAT',
            'car_model' => 'ALTEA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.81
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 21.81
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 19.75
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 19.8
        ]);

        //SUZUKI

        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SX4 S-CROSS',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 17.58
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SX4 S-CROSS 4WD',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 16.86
        ]);

        //TOYOTA

        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'CAMRY',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 14.23
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'COROLLA NG',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.21
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'COROLLA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.03
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'YARIS',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 19.34
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'YARIS NG HB',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 18.26
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'AVANZA',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 11.43
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'AVANZA NG',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 12.06
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'PRIUS',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 21.12
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'LAND CRUISER',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 6.27
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'RAV4',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 10.94
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'RAV4 NG',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.61
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HIGHLANDER 4X2 NC',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 8.9
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HIGHLANDER 4X4',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 8.37
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'FJ CRUISER AWD',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 7.57
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'SEQUOIA',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.52
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'SIENNA NG',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 10.34
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HIACE',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 8.26
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'HILUX',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 9.96
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'TACOMA',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 8.59
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'TUNDRA V6',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 7.79
        ]);
        car::create([
            'brand' => 'TOYOTA',
            'car_model' => 'TUNDRA V8',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 8.52
        ]);

        //VOLKSWAGEN

        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'AMAROK',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 12.07
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.97
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CADDY',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 17.83
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CROSSFOX',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.69
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOL / GOL SEDAN',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 17.46
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA CLASIC',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.52
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 15.81
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 13.09
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT CC',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.58
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'POLO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 19.4
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'SAVEIRO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 17.06
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 13.82
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN GP',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.16
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOUAREG',
            'year' => 2014,
            'cylinders' => 8,
            'performance' => 10.72
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'VENTO',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 19.19
        ]);

        //VOLVO

        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V40 / V40CC',
            'year' => 2014,
            'cylinders' => 5,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V40CC AWD',
            'year' => 2014,
            'cylinders' => 5,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'S60',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.7
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'S60 AWD',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V60',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 16.1
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC60',
            'year' => 2014,
            'cylinders' => 4,
            'performance' => 14.9
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC60 AWD',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 9.3
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'S80 AWD',
            'year' => 2014,
            'cylinders' => 6,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC90 AWD',
            'year' => 2014,
            'cylinders' => 5,
            'performance' => 8.4
        ]);

        //2015

        //ACURA

        car::create([
            'brand' => 'ACURA',
            'car_model' => 'ILX 20 TECH / ILX BASE / ILX PREMIUM',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.4
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'MDX / MDX SH-AWD',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 9.58
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'RDX',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'RLX',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 10.31
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TSX L4',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TSX V6',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 9.9
        ]);

        //ALFA ROMEO

        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'MITO',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 16.19
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => '4C',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 15.01
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'GUILIETTA',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 16.61
        ]);

        //AUDI

        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A1 / A1 SPORTBACK',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 19.02
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 18.20
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.50
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A5',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 13.00
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q3',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 18.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q5',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 13.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q7',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 13.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'R8',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 8.80
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'RS 5',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S3',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 12.80
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S4',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 12.10
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 11.40
        ]);

        //BENTLEY

        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'CONTINENTAL GT / GTC / FLYING',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 8.20
        ]);

        //BMW

        car::create([
            'brand' => 'BMW',
            'car_model' => '118i',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.95
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '118iA',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 17.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '220iA COUPÉ',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '320i',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '320iA',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328i',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328iA',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 13.89
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA ACTIVE HYBRID',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 5.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '420iA COUPÉ',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.39
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '428iA CONVERTIBLE',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 14.93
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '428iA COUPÉ / 428iA GRAN COUPÉ',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA CONVERIBLE',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 12.99
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA COUPÉ',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 13.51
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA GRAN COUPÉ',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '520iA',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '528iA',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.38
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA ACTIVE HYBRID',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 7
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA GRAN TURISMO',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 12.2
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '550iA',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650iA CONVERTIBLE',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 10.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650iA COUPÉ / 650iA GRAN COUPÉ',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 11.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '740iA / 740LiA',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 12.66
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '750iA / 750LiA SEDÁN',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 11.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '760LiA SEDÁN',
            'year' => 2015,
            'cylinders' => 12,
            'performance' => 7.75
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M13Si',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M13SiA',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M23SiA COUPÉ',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3 SEDÁN / M4 COUPÉ',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 12.05
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M4 CONVERTIBLE',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 11.49
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M5 SEDÁN AUT / M6 COUPÉ / M6 GRAN COUPÉ',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M6 CONVERTIBLE',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 9.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 SDRIVE20iA',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 XDRIVE28iA',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE20iA',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 14.08
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE28iA',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE35iA',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X4 XDRIVE28iA',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 13.51
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X4 XDRIVE35iA',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 12.04
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 M / X6 M',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 7.19
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE35iA',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA SECURITY',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 8.62
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE35iA',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE50iA',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE18iA',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE35is',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 11.11
        ]);

        //BUICK

        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCLAVE',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCORE',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 15.4
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'LACROSSE',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'REGAL',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'VERANO',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 13.7
        ]);

        //CADILLAC

        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ATS',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ATS COUPÉ',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 13.6
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ESCALADE',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 8.9
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'SRX',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 10.8
        ]);

        //CHEVROLET

        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'AVEO',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 17.72
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 11.3
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO ZL 1',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 8.7
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAPTIVA',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE CE / CHEYENNE DC',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE CR',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'COLORADO DC',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE CPE',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 9.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE CONVERTIBLE',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE TURBO',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.7
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU TURBO',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 14.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MATIZ',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 18.9
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 1500',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CE / SILVERADO 2500 DC',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CR',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC RS',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SPARK',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 20.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SUBURBAN',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TAHOE',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 9.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TORNADO',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAVERSE',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAX',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 14.9
        ]);

        //CHRYSLER

        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 C',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 12.69
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 C ADVANCE',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 LIMITED',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 14.69
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '300 C',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 10.85
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => 'TOWN & COUNTRY',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 9.55
        ]);

        //DODGE

        car::create([
            'brand' => 'DODGE',
            'car_model' => 'ATTITUDE',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 23.30
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER SRT',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 8.29
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER POLICE',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 9.86
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'REDLINE / CHARGER SXT',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 11.90
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART GT',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 14.35
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART SXT',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 14.68
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO LIMITED / DURANGO SXT',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 9.61
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO RT',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 8.61
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY RT',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY SE / JOURNEY SXT',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 11.79
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'VISION',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 16.14
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'VIPER GTS COUPÉ',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 7.35
        ]);

        //FIAT

        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 ABARTH',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.04
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 LOUNGE / 500 POP',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.86
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 SPORT',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.30
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 L',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 T SPORT',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.23
        ]);
        car::create([
            'brand' => 'FIAT', 
            'car_model' => 'PALIO ADVENTURE',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 13.93
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'RALIO',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 12.68
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'UNO',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 13.59
        ]);

        //FORD

        car::create([
            'brand' => 'FORD',
            'car_model' => 'IKON',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 13.48
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ESCAPE',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 11.63
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ECOSPORT',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 12.02
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EDGE',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 9.92
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPEDITION',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 8.33
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPLORER',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.17
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.21
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA ST',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 13.48
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 14.07
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS ST',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 14.07
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FUSION',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 11.70
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'F150 / LOBO',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 8.8
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MUSTANG',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 9.27
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MKS / MKX',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 7.79
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MKZ',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 9.62
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'POLICE INTERCEPTOR',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 9.77
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'RANGER',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 7.89
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'TRANSIT',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 9.63
        ]);

        //GMC

        car::create([
            'brand' => 'GMC',
            'car_model' => 'ACADIA',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'SIERRA DC / SIERRA RC',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 9.7
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'YUKOM',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 9.2
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'TERRAIN',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 10.7
        ]);

        //HONDA

        car::create([
            'brand' => 'HONDA',
            'car_model' => 'FIT COOL / FIT FUN',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.1
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'FIT HIT',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.4
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ACCORD EXL / ACCORD EXL V6',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 9.6
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CR-Z',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 19.9
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CROSSTOUR',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 9.5
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC HÍBRIDO',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 25
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC SI',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 13.4
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CIVIC COUPÉ EX / CIVIC SEDÁN EX / CIVIC SEDÁN LX / CIVIC SEDÁN EXL',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 13
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => ' ODYSSEY EX / ODYSSEY EXL / ODYSSEY LX / ODYSSEY TOURING',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 8.5
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'HONDA PILOT EX / HONDA PILOT TOURING',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 7.6
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CR-V EX-L 4WD/ CR-V EX-L/CR-V LX/CR-V EX',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 12.1
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ACORD (LX) / ACORD(EX-L) / ACORD (SPORT)',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CITY LX / CITY EX',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.6
        ]);

        //HYUNDAI

        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'GRAND i10',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 17.99
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'ELANTRA',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.97
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'iX35',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 13.98
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'SONATA',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.41
        ]);

        //INFINITI

        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 13.5
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 HYBRID',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 17
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q60',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 12.27
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q70',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 12.57
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX70',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 10.63
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX80',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 8.06
        ]);

        //JEEP

        car::create([
            'brand' => 'JEEP',
            'car_model' => 'CHEROKEE LATITUDE / CHEROKEE LIMITED / CHEROKEE LIMITED PREMIUM',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 11.69
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'CHEROKEE TRAILHAWK 4x4',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 11.13
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'COMPAS LATITUDE / COMPAS LIMITED',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 11.64
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'GRAND CHEROKEE LIMITED / GRAND CHEROKEE LIMITED LUJO',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 9.61
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'GRAND CHEROKEE LIMITED 4x4',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 7.65
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'GRAND CHEROKEE SRT8',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 7.37
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'GRAND CHEROKEE SUMIT 4x4',
            'year' => 2015,
            'cylinders' => 8,
            'performance' => 7.84
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'PATRIOT LATITUDE / PATRIOT LIMITED / PATRIOT SPORT',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 11.96
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'WRANGLER RUBICON',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 8.41
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'WRANGLER SAHARA',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 8.67
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'WRANGLER SPORT',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 9.32
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'WRANGLER UNLIMITED RUBICON',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 7.96
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'WRANGLER UNLIMITED SAHARA / WRANGLER UNLIMITED SPORT',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 7.44
        ]);

        //LINCOLN

        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'LINCOLN MK C',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.35
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'LINCOLN NAVIGATOR',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 8.33
        ]);

        //SEAT

        car::create([
            'brand' => 'SEAT',
            'car_model' => 'ALTEA 1.8 160 HP DSG TSI',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 154
        ]);

        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.6 105 HP DSG',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 123
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 2.0 115 HP MAN',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 145
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.2 105 HP MAN',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 113
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO 1.2 105 HP MAN',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 120
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO 1.4 122 HP DSG',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 127
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO 1.6 105 HP DSG',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 140
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.4 122 HP MAN TURBO 4 PUERTAS FRONT / LEON 1.4 122 HP MAN TURBO 2 PUERTAS',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 115
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.8 180 HP DSG TURBO 4 PUERTAS / LEON 1.8 180 HP DSG TURBO 2 PUERTAS',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 133
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON CUPRA 2.0 TSI 265 HP DSG 2 PUERTAS FRON',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 152
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.4 140 HP DSG TURBO 4 PUERTAS FRONT / LEON 1.4 140 HP DSG TURBO 2 PUERTAS FRONT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 111
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.2T 105 HP DSG FRONT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 112
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA CUPRA 1.4T 180 HP DSG FRONT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 126
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO 1.6 105 HP TIP',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 129
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON CUPRA 2.0 TSI 265 HP DSG 4 PUERTAS',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 152
        ]);

        //SUZUKI

        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'CIAZ 5MT',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 19.3
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'CIAZ 4AT',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 19.4
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'GRAND VITARA 4AT',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 11.90
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'GRAND VITARA 4WD',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 11.40
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'KIZASHI',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 14.50
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SWIFT 4AT',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 17.80

        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SWIFT 5MT',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 17.90
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SWIFT SPORT 6MT',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.70
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SX4 S-CROSS',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 17.00
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SX4 S-CROSS 4WD',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.50
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SX4 S-CROSS MT',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.20
        ]);

        //SUBARU

        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'WRX',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 12.7
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'WRX STI',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 10.7
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'FORESTER',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.3
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'LEGACY',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'OUTBACK',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 15.9
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA 4D',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 17.8
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA 5D',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 17.6
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'XV',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 14.54
        ]);

        //VOLKSWAGEN

        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'AMAROK 2.0 TDI 140 HP MAN QUATTRO / AMAROK 2.0 TDI 180 HP HP MAN',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 12.4
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'AMAROK 2.0 TDI 180 HP MAN QUATTRO / AMAROK 2.0 TFSI 158 HP MAN FRONT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 13.4
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'AMAROK 2.0 TDI 180 HP TIP QUATTRO',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 13.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE 2.5 170 HP MAN / BEETLE 2.0 210 HP DSG TURBO',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 15.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE 2.5 170 HP TIP',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE 2.0 210 HP MAN TURBO',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 15
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CADDY 1.2 TFSI 105 HP MAN / CADDY MAXI',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 16.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CARAVELLE 2.0 TDI 138 HP AUT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CROSSFOX 1.6 100 HP MAN',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 15.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOL 1.6 100 HP MAN FRONT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 17.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOL 1.6 101 HP ASG FRONT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 18.6
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOL SEDAN 1.6 101 HP ASG FRONT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 18.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOL SEDAN 1.6 100 HP MAN FRONT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 17.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF A7 1.4 TSFI 138 HP MAN FRONT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 19.7
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF A7 1.4 TSFI 138 HP DSG FRONT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 20.8
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA CLASICO 2.0 115 HP AUT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 14
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA CLASICO 2.0 115 HP MAN FRONT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 15.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.0 115 HP AUT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 14.7
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.0 115 HP MAN',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 15
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.0 140 HP DSG TDI',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 20.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.5 170 HP AUT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 14.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.5 170 HP MAN',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 14.4
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.0 210 HP TFSI MAN',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 15.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.0 210 HP TFSI DSG',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 15.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'MULTIVAN 2.0 TDI 138 HP DSG',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT 3.6 280 HP DSG',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT 2.5 TIP 170 HP TIP',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 14.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT CC 3.6 280 HP TIP',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 11.7
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT CC 2.0 200 HP TFSI DSG',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 13.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'POLO 1.6 105 HP MAN FRONT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 17
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'POLO 1.6 105 HP TIP FRONT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 16.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'SAVEIRO 1.6 101 HP MAN',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 17
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'SAVEIRO DOUBLE CAB CROSS 1.6 110 HP MAN',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 17.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN 1.4 160 HP DSG TFSI FRONT',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 14.6
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN GP 2.0 200 HP TIP TFSI',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN GP 2.0 200 HP TIP TFSI 4MOTION',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 12.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOUAREG 3.0 333 (+46) HP TIP 4MOTION HIBRIDA',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 12
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOUAREG 3.6 280 HP TIP 4MOTION',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOUAREG 4.2 360 HP TIP 4MOTION',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOUAREG 3.0 245 HP TIP TDI 4MOTION',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 13.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TRANSPORTER 2.0 140 HP AUT TDI ',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TRANSPORTER 2.0 102 HP MAN TDI ',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'VENTO 1.6 105 HP MAN GASOLINA',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 16.7
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'VENTO 1.6 105 HP AUT GASOLINA',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 16.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'VENTO 1.6 105 HP MAN DIESEL',
            'year' => 2015,
            'cylinders' => 0,
            'performance' => 23.8
        ]);

        //VOLVO

        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V40 T3 FE',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 18.58
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V40 MOM',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V40 RD',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.92
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V40CC MOM',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 17.27
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V40CC EVOLUTION',
            'year' => 2015,
            'cylinders' => 5,
            'performance' => 13.6
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V40 T5 AWD',
            'year' => 2015,
            'cylinders' => 5,
            'performance' => 14.55
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'S60 1.6 T',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 17.27
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'S60 2.0 T',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'S60 T6',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 12.82
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'S80 T6',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 12.03
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V60',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 16.61
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC60 T5',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 14.28
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC60 T6',
            'year' => 2015,
            'cylinders' => 4,
            'performance' => 14.57
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC60 T6',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 11.46
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC60 T5',
            'year' => 2015,
            'cylinders' => 5,
            'performance' => 12.15
        ]);

        //2016

        //ACURA

        car::create([
            'brand' => 'ACURA',
            'car_model' => 'ILX',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'MDX',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'RDX',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 12.4
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TLX',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.6
        ]);

        //ALFA ROMEO

        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'MITO',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.23
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => '4C',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.01
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'GUILIETTA',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.62
        ]);

        //AUDI

        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A1 / A1 SPORTBACK',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.5
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A1 SPORTBACK',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 17.7
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 19.4
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3 CABRIO / A3 SEDÁN',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 18.20
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.50
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A5 / A5 CABRIO',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.90
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A5 SPORTBACK',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A6',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 13.40
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A7 SPORTBACK',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 13.30
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 13.00
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8 LWB',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.30
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q3',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 14.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q5',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 13.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q7',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.40
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'R8',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 8.80
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'RS Q3',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 12.60
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'RS 5',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'RS 7 SPORTBACK',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S Q5',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 11.40
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S3',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 12.80
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S6 / S7',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 10.90
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S8',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 9.80
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'TT',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 15.30
        ]);

        //BENTLEY

        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'CONTINENTAL GT / GTC / FLYING',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 8.20
        ]);
        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'MULSANNE',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 6.80
        ]);

        //BMW

        car::create([
            'brand' => 'BMW',
            'car_model' => '118i',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.95
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '118iA / 120i',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 17.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '120iA',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 17.54
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '218iA ACTIVE TOURER',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 19.60
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '220iA COUPÉ',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '220iA ACTIVE TOURER',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 17.85
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '320iA',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328iA',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 13.89
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA ACTIVE HYBRID',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 5.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '420iA COUPÉ',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.39
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '428iA CONVERTIBLE',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 14.93
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '428iA COUPÉ / 428iA GRAN COUPÉ',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA CONVERIBLE',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 12.99
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA COUPÉ',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 13.51
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA GRAN COUPÉ',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '520iA',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '528iA',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.38
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA ACTIVE HYBRID',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 7
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '550iA',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '640iA GRAN COUPÉ',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650iA COUPÉ / 650iA GRAN COUPÉ',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 11.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '740iA / 740LiA',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 15.15
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '750iA / 750LiA SEDÁN',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '760LiA SEDÁN',
            'year' => 2016,
            'cylinders' => 12,
            'performance' => 7.75
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M13SiA',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M23SiA COUPÉ',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3 SEDÁN / M4 COUPÉ',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 12.05
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M4 CONVERTIBLE',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 11.49
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M5 SEDÁN AUT / M6 COUPÉ / M6 GRAN COUPÉ',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 SDRIVE20iA',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 XDRIVE28iA',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE20iA',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 14.08
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE28iA',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE35iA',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X4 XDRIVE28iA',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 13.51
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X4 XDRIVE35iA',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 12.04
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 M / X6 M',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 7.19
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE35iA',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA SECURITY',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 8.62
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE35iA',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE50iA',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE18iA',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE35is',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.11
        ]);

        //BUICK

        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENVISION',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 12.6
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCLAVE',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCORE',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 15.2
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'LACROSSE',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'REGAL',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'VERANO',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 13.7
        ]);

        //CADILLAC

        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ATS SEDÁN / ATS COUPÉ',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 14.4
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ATS SEDÁN / ATS COUPÉ V',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS SEDÁN',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS SEDÁN V',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 9.1
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ESCALADE SUV',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 9.4
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ESCALADE ESV',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 9.1
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'SRX',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 10.8
        ]);

        //CHEVROLET

        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO LT1',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE HC',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 8.9
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'COLORADO',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 13.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 9.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 20.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'EQUINOX',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 13.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'S10',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 12
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 1500 CR',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CR',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CE / SILVERADO 2500 DC',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 17
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SPARK',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 20.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SUBURBAN',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TAHOE',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 9.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAVERSE',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAX',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 14.9
        ]);

        //CHRYSLER

        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 C ADVANCE',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 LIMITED',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 14.54
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '300 C',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => 'TOWN & COUNTRY',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 9.55
        ]);

        //DODGE

        car::create([
            'brand' => 'DODGE',
            'car_model' => 'ATTITUDE',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 23.32
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER SRT',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 8.29
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER POLICE',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 9.86
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'REDLINE / CHARGER SXT',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 11.90
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART GT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 14.35
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART SXT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 14.68
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO LIMITED / DURANGO SXT',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 9.61
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO RT',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 8.61
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY RT',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY SE / JOURNEY SXT',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.79
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'VISION',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 16.14
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'VIPER GTS COUPÉ',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 7.35
        ]);

        //FIAT

        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 ABARTH',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.04
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 LOUNGE / 500 POP',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.86
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 SPORT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.30
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 L',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 T SPORT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.23
        ]);
        car::create([
            'brand' => 'FIAT', 
            'car_model' => 'PALIO ADVENTURE',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 13.93
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'RALIO',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 12.68
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'UNO',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 13.59
        ]);

        //FORD

        car::create([
            'brand' => 'FORD',
            'car_model' => 'IKON',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 13.48
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ESCAPE',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 11.63
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ECOSPORT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 12.02
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EDGE',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 9.92
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPEDITION',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 8.33
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPLORER',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.17
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.21
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA ST',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 13.48
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 14.07
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS ST',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 14.07
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FUSION',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 11.70
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'F150 / LOBO',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 8.8
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MUSTANG',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 9.27
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MKS / MKX',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 7.79
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MKZ',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 9.62
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'POLICE INTERCEPTOR',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 9.77
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'RANGER',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 7.89
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'TRANSIT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 9.63
        ]);

        //ENDFAKE
        //GMC

        car::create([
            'brand' => 'GMC',
            'car_model' => 'Acadia',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra Denali',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 8.9
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra Doble Cabina/Sierra Reg Cab',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 9.7
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Yukon Denali',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 9.4
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Terrain',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.3
        ]);

        //HONDA

        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Accord Sedan L4 CVT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.1
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Accord Sedan V6 6AT',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'City CVT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 20.8
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'City MT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 18.8
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Civic Coupé CVT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 20.9
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Civic Sedán 1.5 CVT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 20.9
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Civic Sedán 2.0 CVT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 20.1
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Civic Sedán 2.0 6MT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 18.2
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CRV 2WD',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.9
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CRV 4WD',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.4
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Fit MT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 18.5
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Fit MT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 18.5
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Fit CVT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 19.9
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'HR-V MT',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 16.4
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'HR-V CVT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 17.5
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Odyssey',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Pilot',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 11.9
        ]);

        //INFINITI

        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX80',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 8.06
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX70',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 10.09
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q70',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 12.08
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 Hybrid',
            'year' => 2015,
            'cylinders' => 6,
            'performance' => 17
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX60 4X4/ QX60 4X2',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 10.37
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX60 Hybrid 4X4',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.92
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 12.88
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 Hybrid',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 17.21
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q60',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.64
        ]);

        //JEEP

        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Patriot Sport',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 13.6
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Compas Latitude',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 11.64
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Cherokee latitude ',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 11.70
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Cherokee Trailhawk 4x4',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.13
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Sport 4X4',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 9.32
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Sahara 4X4',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 8.67
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Rubicon 4X4',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 8.41
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Unlimited Sport 4X4',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 7.45
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Unlimited Rubicon 4X4',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 7.96
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee  Limited',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.1
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee  Limited Lujo/Grand Cherokee Summit',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 8.39
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee  SRT',
            'year' => 2016,
            'cylinders' => 8,
            'performance' => 8.2
        ]);

        //KIA

        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sportage',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 13.84
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sorento G6DF',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 11.80
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'K5',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.02
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Optima',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 14.28
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Rio',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.81
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Soul',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.43
        ]);

        //LINCONLN

        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln MKC',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 11.6
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln MKX',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 10.8
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln MKZ',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 10.9
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Navigator',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 8.9
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Navigator L',
            'year' => 2016,
            'cylinders' => 6,
            'performance' => 9.1
        ]);

        //SEAT

        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.6 110 HP MAN',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 18.8
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.6 110 HP TIP',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 18.3
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.2T 110 HP MAN',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 21
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.8 180 HP DSG TURBO 4 PUERTAS / LEON 1.8 180 HP DSG TURBO 2 PUERTAS',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 17.7
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON CUPRA 2.0 TSI 265 HP DSG 2 PUERTAS FRONT',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 15.4
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.4T 125 HP MAN 4 PUERTAS',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 19.6
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.4T 150 HP MAN 4 PUERTAS',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 19.2
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.4T 150 HP DSG 4 PUERTAS',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 18.3
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.4T 125 HP MAN 2 PUERTAS',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 19.6
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.4T 150 HP MAN 2 PUERTAS',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 19.2
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON CUPRA 2.0 TSI 265 HP DSG 4 PUERTA',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 15.4
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.4T 150 HP DSG 2 PUERTAS',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 18.3
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON ST 1.4 150 HP DSG TURBO 4 PUERTAS',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 18.6
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO 1.6 110 HP MAN',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 19.1
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO 1.6 110 HP TIP',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 18.9
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO 1.2 110 HP MAN',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 20.2
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO 1.4T 125 HP DSG',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 20.6
        ]);

        //SUBARU

        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'WRX',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 12.7
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'WRX STI',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 10.7
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'BRZ',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.8
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'FORESTER',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.3
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'LEGACY',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'OUTBACK',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.9
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA 4D',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 17.8
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA 5D',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 17.6
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'XV',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 14.5
        ]);

        //SUZUKI
        
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SWIFT 1.4L, 5MT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 18.5
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SWIFT 1.4L, 4AT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 18.4
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SWIFT SPORT 1.6L, 6MT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.10
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'KIZASHI, 2.4L, CVT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 14.5
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'GRAND VITARA 2.4L, 4AT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 11.90
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'GRAND VITARA 2.4L, 4AT 4WD',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 11.40
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SX4 S-CROSS 1.6L, MT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.6
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'SX4 S-CROSS 1.6L, CVT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 18.50
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'VITARA 5MT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 17.50
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'VITARA 6AT 2WD',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 18.20
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'VITARA 6AT 4WD',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 17.60
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'CIAZ 1.4L 5MT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 19.70
        ]);
        car::create([
            'brand' => 'SUZUKI',
            'car_model' => 'CIAZ 1.4L 4AT',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 19.40
        ]);

        //TESLA

        car::create([
            'brand' => 'TESLA',
            'car_model' => '70D',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 0
        ]);
        car::create([
            'brand' => 'TESLA',
            'car_model' => '90D',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 0
        ]);
        car::create([
            'brand' => 'TESLA',
            'car_model' => 'P90D',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 0
        ]);

        //VOLKSWAGEN

        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'AMAROK TDI / AMAROK TDI QUATTRO',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 12.4
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'AMAROK TDI',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 13.4
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CADDY TFSI',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 16.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CARAVELLE TDI',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CROSSFOX',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOL',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 17.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF SPORTWAGEN',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 14.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 15.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI TDI',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 20.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'MULTIVAN TDI',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'SAVEIRO',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 17
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOL SEDAN',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 17.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOL',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 18.6
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT CC',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 13.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'POLO 1.2 TFSI',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 18.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TRANSPORTER (CARAVELLE SI)',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'POLO',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 17.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'POLO 1.8 TFSI',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 17.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI TFSI',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 15.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE TURBO',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 15
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN GP TFSI',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 14.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN GP TFSI 4MOTION',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 12.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN 1.4T TFSI FRONT',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 12.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'AMAROK 2.0 TDI QUATTRO',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 13.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CADDY MAXI 1.2 TFSI',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 16.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOUAREG 4MOTION HIBRIDA',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 12
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOUAREG 4MOTION',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOUAREG TDI 4MOTION',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 14.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF A7 2.0 TFSI FRONT',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'UP 1.0',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 18.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'SAVEIRO DOUBLE CAB CROSS 1.6',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 17.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'MULTIVAN 2.0 TDI',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 14
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'SAVEIRO DOUBLE CAB 1.6',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 15.7
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CROSS UP 1.0',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 18.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'VENTO 1.6',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 16.7
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF A7 1.4 TFSI',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 18.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'VENTO',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 16.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'VENTO 1.6 TDI',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 23.8
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'VENTO 1.5',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 19.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF A7 1.6 TFSI FRONT',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 18.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF A7 1.6 TFSI FRONT',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 17
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TRANSPORTER TDI',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'VENTO 1.5',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 21.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CADDY 1.6',
            'year' => 2016,
            'cylinders' => 0,
            'performance' => 15.1
        ]);

        //VOLVO
        
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'VA40 FIRST EDITION T3',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 18.18
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'VA40 EDITION T3',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 18.18
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V40 SPORT T4',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 18.18
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V40 R-DESIGN T5',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.95
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V40 CROSS COUNTRY MOMENTUM T4 AWD',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V40 CROSS COUNTRY INSPIRATION T4 AWD',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'S60',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 17.24
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'S60 R-DESIGN T5',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 15.62
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'S60CC T5 AWD',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 10.86
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V60 MOMENTUM R-DESIGN T4',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 16.13
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC60 INSPIRATION T5',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 14.28
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC60 OSEAN RACE T5 AWD',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 11.23
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC90 KINETIC T6 AWD',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 12.98
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'S60 T6 DESIGN',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 14.50
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'V60CC T5',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 13.00
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC60 T6',
            'year' => 2016,
            'cylinders' => 4,
            'performance' => 13.20
        ]);

        //2017

        //AUDI

        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A1 / A1 SPORTBACK',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 19.02
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 18.20
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 15.50
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A5',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 15.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 13.00
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q3',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 18.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q5',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 13.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q7',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 13.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'R8',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 8.80
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'RS 5',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S3',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 12.80
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S4',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 12.10
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 11.40
        ]);

        //nofake
        //BAIC

        car::create([
            'brand' => 'BAIC',
            'car_model' => 'D20 HATCHBACK AUT / D20 SEDAN AUT',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 10.31
        ]);
        car::create([
            'brand' => 'BAIC',
            'car_model' => 'D20 HATCHBACK STD / D20 SEDAN STD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BAIC',
            'car_model' => 'X25 AUT / X25 STD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 10.2
        ]);

        //BENTLEY

        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'CONTINENTAL GT / GTC / FLYING',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 8.20
        ]);

        //BUICK

        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCLAVE',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCORE',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 15.4
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'LACROSSE',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'REGAL',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'VERANO',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 13.7
        ]);

        //CHEVROLET

        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'AVEO',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 17.72
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 11.3
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO ZL 1',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 8.7
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAPTIVA',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE CE / CHEYENNE DC',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE CR',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'COLORADO DC',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE CPE',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 9.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE CONVERTIBLE',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 15.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE TURBO',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 15.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 15.7
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU TURBO',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 14.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MATIZ',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 18.9
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 1500',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CE / SILVERADO 2500 DC',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CR',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC RS',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SPARK',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 20.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SUBURBAN',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TAHOE',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 9.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TORNADO',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 15.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAVERSE',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAX',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 14.9
        ]);

        //FORD

        car::create([
            'brand' => 'FORD',
            'car_model' => 'IKON',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 13.48
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ESCAPE',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 11.63
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ECOSPORT',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 12.02
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EDGE',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 9.92
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPEDITION',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 8.33
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPLORER',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 15.17
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.21
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA ST',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 13.48
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 14.07
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS ST',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 14.07
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FUSION',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 11.70
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'F150 / LOBO',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 8.8
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MUSTANG',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 9.27
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MKS / MKX',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 7.79
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MKZ',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 9.62
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'POLICE INTERCEPTOR',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 9.77
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'RANGER',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 7.89
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'TRANSIT',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 9.63
        ]);

        //GMC

        car::create([
            'brand' => 'GMC',
            'car_model' => 'SIERRA Cabina Regular',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 10
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra Denali',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 9.1
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra Dob Cab',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 9.8
        ]);

        //HONDA

        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Accord Sedan',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.1
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'City',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 20.8
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Civic Coupe/Civic Sedan',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 20.865
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Civic Type R',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 14.12
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CRV 2WD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 17.675
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Fit',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 18.545
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'HR-V',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.38
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Odyssey',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 12.535
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Pilot',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 11.885
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ILX',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.771
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'RDX',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 12.41
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'TLX',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 15.585
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'MDX',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 12.485
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'NSX',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 12.515
        ]);

        //HYUNDAI

        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Grand i10 HB',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 18
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Grand i10 Sedan',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 18.21
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Creta',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.59
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Elantra',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 18.51
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Tucson',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 14.62
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Santa Fe Sport',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 12.86
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Sonata',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.43
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Sonata Sport',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 14.15
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Santa FE 7 Pasajeros',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 11.72
        ]);

        //INFINITI

        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX80',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 8.42
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX70',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 10.57
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX60 4X4/QX60 4X2',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 10.37
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX60 Hybrid 4X4',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 15.59
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 Hybrid',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 17.21
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q60',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 12.81
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 12.48
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX30',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.56
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'NV2500',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 7.22
        ]);

        //JAC

        car::create([
            'brand' => 'JAC',
            'car_model' => 'S2',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 14.79
        ]);
        car::create([
            'brand' => 'JAC',
            'car_model' => 'S3',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 18.77
        ]);
        car::create([
            'brand' => 'JAC',
            'car_model' => 'J4',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 17.51
        ]);

        //JAGUAR

        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'XF 2.0 L4 Turbo',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 12.49
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'XF 3.0 V6 SC',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 12.74
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'XE 2.0 L4 Turbo',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'XE 3.0 V6 SC',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 12.51
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'XJ 5.0 V8 SC',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 10.42
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'F-Type 3.0 V6 SC',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 12.11
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'F-Type 5.0 V8 SC',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 10.42
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'F-Type 5.0 V8 SVR',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 8.33
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'F Pace',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 11.23
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'New XF 2.0 L4 Turbo',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'New XF 3.0 V6 SC',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 12.11
        ]);

        //KIA

        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sportage',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 14.77
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sportage AWD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 13.81
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.82
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte (Hatchback)',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.42
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Rio',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.81
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sorento',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 14.15
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sorento AWD',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 11.07
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Soul',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.43
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Optima',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.02
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Niro (Híbrido)',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 26.92
        ]);

        //LAND ROVER

        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Range Rover Evoque',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 14.21
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Discovery',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 9.19
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Discovery Sport',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 14.21
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Range Rover 3.0 V6 SC/Range Rover Sport 3.0 V6 SC',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 10.94
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Range Rover 5.0 V8 SC/Range Rover Sport 5.0 V8 SC',
            'year' => 2017,
            'cylinders' => 8,
            'performance' => 8.65
        ]);

        //LINCOLN

        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln Continental',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln MKZ',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln MKC',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 11.7
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln MKX',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 10.76
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln Navigator',
            'year' => 2017,
            'cylinders' => 6,
            'performance' => 8.7
        ]);

        //SEAT

        car::create([
            'brand' => 'SEAT',
            'car_model' => 'ALTEA 1.4 125 HP MAN TURBO FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 131
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'ALTEA 1.8 160 HP DSG TSI',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 154
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'ALTEA 2.0 211 HP DSG TFSI',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 164
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.2T 105 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 113
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.2T 110 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 112
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.4T 150 HP DSG',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 129
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.6 105 HP DSG',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 123
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.6 110 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 125
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 1.6 110 HP TIP',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 128
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'IBIZA 2.0 115 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 145
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.4 122 HP MAN TURBO 2 PUERTAS',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 115
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.4 122 HP MAN TURBO 4 PUERTAS FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 115
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.4 125 HP MAN TURBO FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 133
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.4 140 HP DSG TURBO 2 PUERTAS FRONT / LEON 1.4 140 HP DSG TURBO 4 PUERTAS FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 111
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.4T 125 HP MAN 2 PUERTAS / LEON 1.4T 125 HP MAN 4 PUERTAS',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 120
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.4T 150 HP DSG 2 PUERTAS / LEON 1.4T 150 HP DSG 4 PUERTAS',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 128
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.4T 150 HP MAN 2 PUERTAS / LEON 1.4T 150 HP MAN 4 PUERTAS',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 122
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.8 160 HP DSG TSI FRONT / LEON 1.8 160 HP MAN TSI FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 146
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 1.8 180 HP DSG TURBO 2 PUERTAS / LEON 1.8 180 HP DSG TURBO 4 PUERTAS',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 133
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 2.0 211 HP DSG TFSI FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 162
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 2.0 211 HP MAN TFSI FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 159
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON 2.0 240 HP MAN TFSI FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 171
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON CUPRA 2.0 TSI 265 HP DSG 2 PUERTAS FRONT / LEON CUPRA 2.0 TSI 265 HP DSG 4 PUERTAS',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 152
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'LEON ST 1.4 150 HP DSG TURBO 4 TURBO',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 126
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO 1.2 105 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 120
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO 1.2 110 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 116
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO 1.4 122 HP DSG',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 127
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO 1.4T 125 HP DSG',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 114
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO 1.6 105 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 140
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO 1.6 110 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 123
        ]);
        car::create([
            'brand' => 'SEAT',
            'car_model' => 'TOLEDO 1.6 110 HP TIP',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 124
        ]);

        //SMART

        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORFOUR BRABUS',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 20.60
        ]);
        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORFOUR PASSION MANUAL',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 19.89
        ]);
        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORFOUR PASSION TURBO',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 20.979
        ]);
        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORFOUR PRIME MANUAL',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 19.89
        ]);
        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORFOUR PRIME TURBO',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 20.979
        ]);
        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORFOUR TURBO',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 20.979
        ]);
        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORTWO BLUE BEAM',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 23.062
        ]);
        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORTWO BRABUS CONVERTIBLE',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 20.607
        ]);
        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORTWO BRABUS COUPÉ',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 20.607
        ]);
        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORTWO MANUAL',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 23.062
        ]);
        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORTWO PASSION CONVERTIBLE',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 20.71
        ]);
        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORTWO PASSION MANUAL',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 23.062
        ]);
        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORTWO PASSION TURBO',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 20.852
        ]);
        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORTWO PRIME TURBO',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 20.852
        ]);
        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORTWO TURBO',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 20.852
        ]);
        car::create([
            'brand' => 'SMART',
            'car_model' => 'FORTWO TURBO CONVERTIBLE',
            'year' => 2017,
            'cylinders' => 3,
            'performance' => 20.71
        ]);

        //SUBARU

        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA 2.OI PREMIUM 4D AWD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 18.9
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA 2.OI PREMIUM 4D AWD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 22.7
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA 2.OI SPORT 4D AWD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 22.2
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA 2.OI LIMITED 4D AWD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 22.7
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA 2.OI SPORT 5D AWD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 21.7
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'IMPREZA 2.OI LIMITED 5D AWD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 22
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'BRZ 6MT 2WD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 17.8
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'BRZ 6MT 2WD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 20.1
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'WRX 2.0T 6MT AWD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.1
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'WRX 2.0T CVT AWD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 14.3
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'WRX 2.5T STI 6MT AWD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'FORESTER 2.5I X AWD / FORESTER 2.5I XS AWD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 19.5
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'FORESTER 2.5I XSL AWD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 19.1
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'FORESTER 2.0T XT AWD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.4
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'OUTBACK 2.5I PREMIUM AWD / 2.5I LIMITED AWD',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 19.7
        ]);
        car::create([
            'brand' => 'SUBARU',
            'car_model' => 'OUTBACK 3.6R PREMIUM AWD / OUTBACK 3.6R LIMITED AWD ',
            'year' => 2017,
            'cylinders' => 4,
            'performance' => 16.2
        ]);

        //TESLA

        car::create([
            'brand' => 'TESLA',
            'car_model' => '70D',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 0
        ]);
        car::create([
            'brand' => 'TESLA',
            'car_model' => '90D',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 0
        ]);
        car::create([
            'brand' => 'TESLA',
            'car_model' => 'P90D',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 0
        ]);

        //VOLKSWAGEN

        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE 2.0 210 HP DSG TURBO',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE 2.0 210 HP MAN TURBO',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE 2.5 170 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE 2.5 170 HP TIP',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.6
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CROSSGOLF 1.4 150 HP DSG',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 18.6
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF A7 1.4 TFSI 150 HP MAN FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 18.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF A7 1.6 TFSI 110 HP DSG FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 17
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF A7 1.6 TFSI 110 HP MAN FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 18.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF A7 2.0 TFSI 220 HP DSG FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF SPORTWAGEN 2.5 170 HP TIP FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.0 115 HP AUT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.0 115 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.0 140 HP DSG TDI',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 20.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.0 210 HP TSFI DSG',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.0 210 HP TSFI MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.0 170 HP AUT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.0 170 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14.4
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT 2.5 TIP 170HP TIP',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT 3.6 280 HP DSG',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'AMAROK 2.0 TDI 140 HP MAN / AMAROK 2.0 TDI 140 HP MAN QUATTRO',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 12.4
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'AMAROK 2.0 TDI 163 HP MAN FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'AMAROK 2.0 TDI 180 HP MAN / AMAROK 2.0 TDI 180 HP MAN QUATTRO',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.4
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'AMAROK 2.0 TDI 180 HP TIP QUATTRO',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'AMAROK 2.0 TFSI 158 HP MAN FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CADDY 1.2 TFSI 105 HP MAN / CADDY MAXI 1.2 TFSI 105 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 16.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CADDY 1.6 110 HP MAN / CADDY MAXI 1.6 110 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CARAVELLE 2.0 TDI 102 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CARAVELLE 2.0 TDI 140 HP AUT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'COMBI 1.4 LT 78 HP MANUAL REAR',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.6
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'MULTIVAN 2.0 TDI 138 HP DSG',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'MULTIVAN 2.0 TDI 180 HP DSG',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'SAVEIRO 1.6 101 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 17
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'SAVEIRO DOUBLE CAB 1.6 100 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.7
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'SAVEIRO DOUBLE CAB CROSS 1.6 110 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 17.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TRANSPORTER (CARAVELLE SI) 2.0 140 HP AUT TDI FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TRANSPORTER 2.0 102 HP MAN TDI',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE 1.2 105 HP MAN TURBO FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 18.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE 2.0 200 HP DSG TURBO FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'BEETLE 2.0 200 HP MAN TURBO FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CROSSFOX 1.6 100 HP MAN / CROSSFOX 1.6 100 HP MAN FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CROSSFOX 1.6 100 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOL 1.6 101 HP ASG FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 18.6
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOL 1.6 101 HP MAN FRONT / GOL SEDAN 1.6 100 HP MAN FRONY',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 17.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOL 1.6 101 HP ASG FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 18.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF 1.4 TFSI 160 HP DSG 7 VEL',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 17.8
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF 1.4 TFSI 160 HP MAN 7 VEL',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 16.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF GTI 2.0 211 HP DSG TFSI FRONT / GOLF GTI 2.0 211 HP MAN TFSI FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF GTI 35 2.0 235 HP DSG TFSI FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'GOLF GTI 35 2.0 235 HP MAN TFSI FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.6
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA CLASICO 1.8 180 HP MAN TURBO',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14.6
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA CLASICO 1.8 180 HP TIP TURBO FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 12.6
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA CLASICO 2.0 115 HP AUT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA CLASICO 2.0 115 HP MAN FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.0 200 HP TFSI DSG FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'JETTA MKVI 2.0 200 HP TFSI MAN FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.8
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT 2.5 170 HP TIP FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT CC 2.0 200 HP TFSI DSG',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT CC 3.6 280 HP TIP / PASSAT CC 3.6 280 HP TIP 4 MOTION',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 10.8
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'PASSAT CC 3.6 280 HP TIP',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 11.7
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'POLO 1.2 TFSI 105 HP DSG 7 VEL FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 18.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'POLO 1.2 TFSI 105 HP MAN 6 VEL',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 19.4
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'POLO 1.4 TFSI 180 HP DSG 7 VEL',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 17
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'POLO 1.6 105 HP MAN FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 17.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'POLO 1.6 105 HP TIP FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 16.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'POLO 1.8 TFSI 190 HP DSG 7 VEL',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 17.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'ROUTAN 3.6 283 HP TIP FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 8.7
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN 1.4 150 HP DSG TFSI FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 16.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN 1.4 160 HP DSG TFSI FRONT / TIGUAN GP 1.4 148 HP DSG TFSI',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14.6
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN GP 2.0 200 HP DSG TFSI FRONT',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.4
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN 2.0 200 HP TIP TFSI',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TIGUAN 2.0 200 HP TIP TFSI 4MOTION',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 12.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOUAREG 3.0 245 HP TIP TDI 4MOTION',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14.5
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOUAREG 3.0 333 (+46) HP TIP  4MOTION HIBRIDA',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 12
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOUAREG 3.6 280 HP TIP 4MOTION',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'TOUAREG 4.2 360 HP TIP 4MOTION',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'CROSS UP 1.0 75 HP MAN / UP 1.0 75 HP MAN',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 18.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'VENTO 1.5 105 HP DSG DIESEL',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 21.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'VENTO 1.5 105 HP MAN DIESEL',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 19.3
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'VENTO 1.6 105 HP AUT GASOLINA',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 16.2
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'VENTO 1.6 105 HP MAN GASOLINA',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 16.7
        ]);
        car::create([
            'brand' => 'VOLKSWAGEN',
            'car_model' => 'VENTO 1.6 105 HP MAN TDI',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 23.8
        ]);

        //VOLVO

        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'VOLVO V40 FIRST EDITION T3 2.0 LITROS 4 CIL T/M',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 17.5
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'VOLVO V40 ADDITION T3 1.5 LITROS 4 CIL T/A',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 18.3
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'VOLVO V40 SPORT T4 2.0 LITROS 4 CIL T/A',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 17.6
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'R-DESIGN T5',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.6
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'VOLVO V40 CROSS COUNTRY INSPIRATION T4 AWD 20 LITROS 4 CIL T/A',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.64
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'VOLVO S60 MOTOR 2.0 LITROS 4 CIL T/A',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 17.3
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'VOLVO S60',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 16
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'VOLVO S60',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14.5
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'VOLVO S60CC T5 AWD MOTOR 2.0 LITROS 4 CIL T/A',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 15.2
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'VOLVO XC 60',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.2
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'VOLVO XC60 T5 / INSPIRATION T5',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'VOLVO S90 MOTOTR 2.0 LITROS 4 CIL T/A',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14.4
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'VOLVO XC90 KINETIC T6 AWD MOTOR 2.0 LITROS 4 CIL T/A',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 12.4
        ]);
        car::create([
            'brand' => 'VOLVO',
            'car_model' => 'XC90 HIBRIDA B4204T28+ERAD 14.2',
            'year' => 2017,
            'cylinders' => 0,
            'performance' => 14.4
        ]);

        //2018
        //NOFAKE
        //ALFA ROMERO

        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'MITO',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 19.01
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'GIULIETTA',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.46
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'GIULIA',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.91
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'GIULIA QV',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'STELVIO',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.02
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => '4C',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.01
        ]);

        //AUDI

        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A1 / A1 SPORTBACK',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 19.02
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 18.20
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.50
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A5',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 13.00
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q3',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 18.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q5',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q7',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 13.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'R8',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 8.80
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'RS 5',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S3',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 12.80
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S4',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.10
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 11.40
        ]);

        //BAIC

        car::create([
            'brand' => 'BAIC',
            'car_model' => 'D20 HATCHBACK AUT / D20 SEDAN AUT',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 10.31
        ]);
        car::create([
            'brand' => 'BAIC',
            'car_model' => 'D20 HATCHBACK STD / D20 SEDAN STD',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BAIC',
            'car_model' => 'X25 AUT / X25 STD',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 10.2
        ]);

        //BENTLEY

        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'CONTINENTAL GT / GTC / FLYING',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 8.20
        ]);

        //BMW

        car::create([
            'brand' => 'BMW',
            'car_model' => '118i',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.95
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '118iA',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 17.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '220iA COUPÉ',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '320i',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '320iA',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328i',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328iA',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 13.89
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA ACTIVE HYBRID',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 5.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '420iA COUPÉ',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.39
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '428iA CONVERTIBLE',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.93
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '428iA COUPÉ / 428iA GRAN COUPÉ',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA CONVERIBLE',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.99
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA COUPÉ',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 13.51
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA GRAN COUPÉ',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '520iA',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '528iA',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.38
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA ACTIVE HYBRID',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 7
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA GRAN TURISMO',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.2
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '550iA',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650iA CONVERTIBLE',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 10.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650iA COUPÉ / 650iA GRAN COUPÉ',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 11.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '740iA / 740LiA',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.66
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '750iA / 750LiA SEDÁN',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 11.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '760LiA SEDÁN',
            'year' => 2018,
            'cylinders' => 12,
            'performance' => 7.75
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M13Si',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M13SiA',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M23SiA COUPÉ',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3 SEDÁN / M4 COUPÉ',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 12.05
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M4 CONVERTIBLE',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 11.49
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M5 SEDÁN AUT / M6 COUPÉ / M6 GRAN COUPÉ',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M6 CONVERTIBLE',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 9.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 SDRIVE20iA',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 XDRIVE28iA',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE20iA',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.08
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE28iA',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE35iA',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X4 XDRIVE28iA',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 13.51
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X4 XDRIVE35iA',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.04
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 M / X6 M',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 7.19
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE35iA',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA SECURITY',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 8.62
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE35iA',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE50iA',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE18iA',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE35is',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.11
        ]);

        //BUICK

        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCLAVE',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCORE',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 15.4
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'LACROSSE',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'REGAL',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'VERANO',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.7
        ]);

        //CADILLAC

        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ATS',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ATS COUPÉ',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.6
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ESCALADE',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 8.9
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'SRX',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 10.8
        ]);

        //CHEVROLET

        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'AVEO',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 17.72
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.3
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO ZL 1',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 8.7
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAPTIVA',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE CE / CHEYENNE DC',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE CR',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'COLORADO DC',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE CPE',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 9.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE CONVERTIBLE',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE TURBO',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.7
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU TURBO',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MATIZ',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 18.9
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 1500',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CE / SILVERADO 2500 DC',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CR',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC RS',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SPARK',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 20.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SUBURBAN',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TAHOE',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 9.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TORNADO',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAVERSE',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAX',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.9
        ]);

        //CHRYSLER

        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 C',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.69
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 C ADVANCE',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 LIMITED',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 14.69
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '300 C',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 10.85
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => 'TOWN & COUNTRY',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 9.55
        ]);

        //DODGE

        car::create([
            'brand' => 'DODGE',
            'car_model' => 'ATTITUDE',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 23.30
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER SRT',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 8.29
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER POLICE',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 9.86
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'REDLINE / CHARGER SXT',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 11.90
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART GT',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.35
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART SXT',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.68
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO LIMITED / DURANGO SXT',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 9.61
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO RT',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 8.61
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY RT',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY SE / JOURNEY SXT',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.79
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'VISION',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 16.14
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'VIPER GTS COUPÉ',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 7.35
        ]);

        //FIAT

        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 ABARTH',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.04
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 LOUNGE / 500 POP',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.86
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 SPORT',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.30
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 L',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 T SPORT',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.23
        ]);
        car::create([
            'brand' => 'FIAT', 
            'car_model' => 'PALIO ADVENTURE',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.93
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'RALIO',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 12.68
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'UNO',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.59
        ]);

        //FORD

        car::create([
            'brand' => 'FORD',
            'car_model' => 'IKON',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.48
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ESCAPE',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 11.63
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ECOSPORT',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 12.02
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EDGE',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 9.92
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPEDITION',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 8.33
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPLORER',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.17
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.21
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA ST',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.48
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.07
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS ST',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.07
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FUSION',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 11.70
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'F150 / LOBO',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 8.8
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MUSTANG',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 9.27
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MKS / MKX',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 7.79
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MKZ',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 9.62
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'POLICE INTERCEPTOR',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 9.77
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'RANGER',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 7.89
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'TRANSIT',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 9.63
        ]);

        //GMC

        car::create([
            'brand' => 'GMC',
            'car_model' => 'Acadia',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.1
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra Cab Reg',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 10
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra Dob Cab',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 9.8
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra Denali',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 9.1
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Terrain',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.9
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Yukon',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 9.3
        ]);

        //HONDA

        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Accord',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 18.365
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'BRV',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 17.3
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'City',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 20.8
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Civic Coupe/Civic Sedan',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 20.865
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Civic Type R',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.12
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CRV 2WD',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 17.675
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Fit',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 18.545
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'HR-V',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.38
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Odyssey',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.7
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Pilot',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.885
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'ILX',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.771
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'RDX',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.41
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'TLX',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 15.585
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'MDX',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.485
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'NSX',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.515
        ]);

        //HYUNDAI

        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Grand i10',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 18.90
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Accent',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 18.60
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Creta',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.59
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Elantra',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 18.52
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Tucson',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.63
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Sonata',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.43
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Santa Fe Sport',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 12.86
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Santa FE 7 Pasajeros',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.73
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Ioniq',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 28.40
        ]);

        //INFINITI

        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX30 1.6',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.56
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX30 2.0',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.60
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 TT',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.48
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 ST',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.46
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 Hybrid',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 17.21
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX60 4X4/QX60 4X2',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 10.37
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX60 Hybrid',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.59
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q70 3.7',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.08
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q70 5.6',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 10.57
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q70 3.7',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 10.17
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q70 5.0',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 8.66
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q60 20inch',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.82
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q60 19inch',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.80
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX80',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 8.42
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 3.7',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.73
        ]);

        //JAC

        car::create([
            'brand' => 'JAC',
            'car_model' => 'S2',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.79
        ]);
        car::create([
            'brand' => 'JAC',
            'car_model' => 'S3',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 18.77
        ]);
        car::create([
            'brand' => 'JAC',
            'car_model' => 'J4',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 17.51
        ]);

        //JAGUAR

        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'XE',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'XF',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'E Pace/F Pace',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.08
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'F Type',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.88
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'XJ',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 10.42
        ]);

        //JEEP

        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Compas',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.18
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Compas Trailhawk',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.01
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Cherokee',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 11.7
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Cherokee Overland',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 12.52
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Cherokee Trailhawk',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.18
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Renegade',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.29
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler JK Sport',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 9.32
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler JK Sahara',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 9.72
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler JK Rubicon',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 9.4
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler JK Unlimited',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 9.18
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler JK Ultd Rub',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 8.87
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Ultd Sport',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.48
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Ultd Sahara',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.27
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Ultd Rubicon',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 10.25
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 8.54
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee Blin',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 8.57
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 7.44
        ]);

        //KIA

        car::create([
            'brand' => 'KIA',
            'car_model' => 'Rio (Hatchback)',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 18.28
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Rio',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 18.84
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 17.91
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte (Hatchback)',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.42
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sorento',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.15
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sorento AWD',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 11.07
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Soul',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.43
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Optima',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 16.02
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sportage',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.77
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sportage AWD',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.81
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Niro (Híbrido)',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 26.92
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Stinger',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 14.21
        ]);

        //LAND ROVER

        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Evoque Convertible',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 12.2
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Evoque',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Discovery Sport',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Velar',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 12.82
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Discovery',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 9.19
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Range Rover Vogue/Discovery Rover Sport',
            'year' => 2018,
            'cylinders' => 8,
            'performance' => 7.81
        ]);

        //LINCOLN

        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKC',
            'year' => 2018,
            'cylinders' => 4,
            'performance' => 11.7
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKX',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 10.8
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Continental',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKZ',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 10.9
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Navigator L',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 9.1
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Navigator',
            'year' => 2018,
            'cylinders' => 6,
            'performance' => 8.7
        ]);

        //2019

        //nofake
        //ALFA ROMEO

        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'MITO',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 19.01
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'GIULIETTA',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.46
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'GIULIA',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.91
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'GIULIA QV',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'STELVIO',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.02
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'STELVIO QV',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 9.67
        ]);
        
        //AUDI

        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A1 / A1 SPORTBACK',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 19.02
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 18.20
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.50
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A5',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 13.00
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q3',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 18.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q5',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q7',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 13.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'R8',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 8.80
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'RS 5',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S3',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 12.80
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S4',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.10
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 11.40
        ]);

        //BENTLEY

        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'CONTINENTAL GT / GTC / FLYING',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 8.20
        ]);

        //BMW

        car::create([
            'brand' => 'BMW',
            'car_model' => '118i',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 16.95
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '118iA',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 17.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '220iA COUPÉ',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '320i',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '320iA',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328i',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328iA',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 13.89
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA ACTIVE HYBRID',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 5.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '420iA COUPÉ',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 16.39
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '428iA CONVERTIBLE',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.93
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '428iA COUPÉ / 428iA GRAN COUPÉ',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA CONVERIBLE',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.99
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA COUPÉ',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 13.51
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA GRAN COUPÉ',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '520iA',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '528iA',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.38
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA ACTIVE HYBRID',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 7
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA GRAN TURISMO',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.2
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '550iA',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650iA CONVERTIBLE',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 10.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650iA COUPÉ / 650iA GRAN COUPÉ',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 11.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '740iA / 740LiA',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.66
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '750iA / 750LiA SEDÁN',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 11.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '760LiA SEDÁN',
            'year' => 2019,
            'cylinders' => 12,
            'performance' => 7.75
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M13Si',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M13SiA',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M23SiA COUPÉ',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3 SEDÁN / M4 COUPÉ',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 12.05
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M4 CONVERTIBLE',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 11.49
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M5 SEDÁN AUT / M6 COUPÉ / M6 GRAN COUPÉ',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M6 CONVERTIBLE',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 9.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 SDRIVE20iA',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 XDRIVE28iA',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE20iA',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.08
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE28iA',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE35iA',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X4 XDRIVE28iA',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 13.51
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X4 XDRIVE35iA',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.04
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 M / X6 M',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 7.19
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE35iA',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA SECURITY',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 8.62
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE35iA',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE50iA',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE18iA',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE35is',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.11
        ]);

        //BUICK

        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCLAVE',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCORE',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 15.4
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'LACROSSE',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'REGAL',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'VERANO',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.7
        ]);

        //CADILLAC

        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ATS',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ATS COUPÉ',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.6
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ESCALADE',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 8.9
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'SRX',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 10.8
        ]);

        //CHEVROLET

        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'AVEO',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 17.72
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.3
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO ZL 1',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 8.7
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAPTIVA',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE CE / CHEYENNE DC',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE CR',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'COLORADO DC',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE CPE',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 9.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE CONVERTIBLE',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE TURBO',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.7
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU TURBO',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MATIZ',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 18.9
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 1500',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CE / SILVERADO 2500 DC',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CR',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 16.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC RS',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SPARK',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 20.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SUBURBAN',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TAHOE',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 9.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TORNADO',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAVERSE',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAX',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.9
        ]);

        //CHRYSLER

        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 C',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.69
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 C ADVANCE',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 LIMITED',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 14.69
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '300 C',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 10.85
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => 'TOWN & COUNTRY',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 9.55
        ]);

        //DODGE

        car::create([
            'brand' => 'DODGE',
            'car_model' => 'ATTITUDE',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 23.30
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER SRT',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 8.29
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER POLICE',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 9.86
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'REDLINE / CHARGER SXT',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 11.90
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART GT',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.35
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART SXT',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.68
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO LIMITED / DURANGO SXT',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 9.61
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO RT',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 8.61
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY RT',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY SE / JOURNEY SXT',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.79
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'VISION',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 16.14
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'VIPER GTS COUPÉ',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 7.35
        ]);

        //FIAT

        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 ABARTH',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 16.04
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 LOUNGE / 500 POP',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.86
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 SPORT',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 16.30
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 L',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 T SPORT',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 16.23
        ]);
        car::create([
            'brand' => 'FIAT', 
            'car_model' => 'PALIO ADVENTURE',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.93
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'RALIO',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 12.68
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'UNO',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.59
        ]);

        //FORD

        car::create([
            'brand' => 'FORD',
            'car_model' => 'IKON',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.48
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ESCAPE',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 11.63
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ECOSPORT',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 12.02
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EDGE',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 9.92
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPEDITION',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 8.33
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPLORER',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.17
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 16.21
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA ST',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.48
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.07
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS ST',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.07
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FUSION',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 11.70
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'F150 / LOBO',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 8.8
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MUSTANG',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 9.27
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MKS / MKX',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 7.79
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MKZ',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 9.62
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'POLICE INTERCEPTOR',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 9.77
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'RANGER',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 7.89
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'TRANSIT',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 9.63
        ]);

        //GMC

        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra Denali (Doble Cabina)',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 10.23
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra AT4 (Doble Cabina) D',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 9.57
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra SLE (Cabina Regular) F',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 9.10
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Terrain B/Terrain E/ Terrain Denali',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.86
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Acadian A/Acadian E',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.12
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Yukon D/Yukon G',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 9.28
        ]);

        //HONDA

        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Accord EX 1.5T',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 19.9
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Accord Touring 2.0T',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.4
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Accord Sport Plus 1.5T',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 19.9
        ]);

        //HYUNDAI

        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Grand i10 GL/Grand i10 GL MID/Grand i10 GLS',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 18.90
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Accent GL TM/Accent GL MID TM ',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 18.60
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Accent GL TA/Accent GL MID TA/ Accent GLS TA ',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 17.70
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Accent GL Fleet TM',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 19
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Creta GLS TM',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.60
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Creta GLS TA/Creta GLS Premium TA/Creta Limited',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 19.10
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Elantra GLS TMElantra GLS TA/Elantra GLS PremiumTA/Elantra Limited Tech Ta ',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 18.52
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Tucson GLS/Tucson GLS Premium/Tucson Limited/Tucson Limited Tech Navi',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.63
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Sonata Limited Navi',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 16.43
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Santa Sport 2.0T',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.15
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Santa Fe GLS/Santa Fe Limited Tech',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 12.90
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Santa Fe 7 Pasajeros GLS Premium/Santa Fe 7 Pasajeros Limited Tech',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.73
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Ioniq GLS Premium/Ioniq Limited',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 28.40
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Starex Cargo Van/Starex 12 Pasajeros',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 11.50
        ]);

        //INFINITI

        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX30 2.0',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.60
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q70 3.7',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.08
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q70 5.6',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 10.57
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX50 2WD R19',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.67
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX50 2WD R20',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.63
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX50 4WD',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 12.88
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX70 3.7',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX60 4X4/QX60 4X2',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 10.4
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX60 Hybrid',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.6
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX70 5.0',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 8.7
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX80',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 8.42
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 Hybrid',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 17.21
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 HI',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.51
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 LO',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.40
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q60 (20 INCH)',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.96
        ]);

        //JAGUAR

        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'XE',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'XF',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'E Pace/F Pace',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.08
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'F Type',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.88
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'XJ',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 10.42
        ]);

        //JEEP

        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Compas (Latitude)',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.14
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Compas (Limited, Limited Premium)',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.65
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Compas Trailhawk',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 16.7
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Cherokee Limited',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.79
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Cherokee Overland',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.45
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Cherokee Trailhawk',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.47
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Renegade Sport, Latitude, Limited',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.29
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Rubicon',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 10.28
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Unlimited Sport',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.48
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Unlimited Sahara',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.27
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Unlimited Rubicon',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 10.25
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee Laredo',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.14
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee (Limited, Limited Lujo)',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 10.51
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee (Limited, Limited Lujo Advance, Summit Elite Platinum)',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 8.37
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee (Trailhawk)',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 8.25
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee (Trackhawk)',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 7.46
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee (Blindada)',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 8.18
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee SRT',
            'year' => 2019,
            'cylinders' => 8,
            'performance' => 8.21
        ]);

        //KIA

        car::create([
            'brand' => 'KIA',
            'car_model' => 'Rio L, LX, EX',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 18.28
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sorento SXL',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.55
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sorento LX,EX',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.67
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sorento EX,EX Pack',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.88
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Rio LX,EX,EX PACK',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 17.81
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sportage LX,EX,EX PACK',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.77
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sportage SLX AWD',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.81
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sportage SX,SXL',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.50
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Soul LX',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 16.43
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Soul EX,EX PACK',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.12
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Soul SX',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 16.51
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Optima SX,SXL',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.76
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Optima EX, EX PACK',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 16.02
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Stinger GT',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.06
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Stinger EX, GT-LINE',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.21
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Niro (Híbrido) LX,EX',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 26.92
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte L, LX EX, EX PREMIUM, GT-LINE',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 18.53
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte L, LX',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 18.28
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sedona LX,EX,EX PACK,SXL',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.26
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte (Hatchback) EX, GT-LINE',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 18.03
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte (Hatchback) GT',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 15.92
        ]);

        //LAND ROVER

        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Evoque',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Discovery Sport',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Velar',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 12.82
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Discovery',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 9.19
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Range Rover Vogue/Range Rover Sport',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 10.94
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Discovery Sport',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 12.5
        ]);

        //LINCOLN

        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKC 2.0 Ecoboost FWD, AT',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 12.73
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Continental 3.0L FWD AT',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 10.55
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKZ 2.0L GTDI ECOBOOST I-4 AT,6 VEL',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 14.04
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKZ 3.0L V6 GTDI ECOBOOST I-4 AT,6 VEL',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 11.58
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKZ MKZ HEV 2.0L IVCT ATK',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 26.54
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Navigator L 4X4 3.5L V6 ECOBOOST, AT',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 10.42
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Nautilus 2.0L FWD',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 11.55
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Nautilus 2.7L AWD',
            'year' => 2019,
            'cylinders' => 6,
            'performance' => 12.65
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'MKC 2.3L ECOBOOST, AWD',
            'year' => 2019,
            'cylinders' => 4,
            'performance' => 11.33
        ]);

        //2020

        //ALFA ROMEO

        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'GIULIETTA HATCHBACK',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.07
        ]);

        //AUDI

        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A1 / A1 SPORTBACK',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 19.02
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 18.20
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.50
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A5',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 13.00
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q3',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 18.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q5',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q7',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 13.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'R8',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 8.80
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'RS 5',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S3',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 12.80
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S4',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.10
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 11.40
        ]);

        //BENTLEY

        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'CONTINENTAL GT / GTC / FLYING',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 8.20
        ]);

        //BMW

        car::create([
            'brand' => 'BMW',
            'car_model' => '118i',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 16.95
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '118iA',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 17.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '220iA COUPÉ',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '320i',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '320iA',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328i',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328iA',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 13.89
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA ACTIVE HYBRID',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 5.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '420iA COUPÉ',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 16.39
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '428iA CONVERTIBLE',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.93
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '428iA COUPÉ / 428iA GRAN COUPÉ',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA CONVERIBLE',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.99
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA COUPÉ',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 13.51
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA GRAN COUPÉ',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '520iA',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '528iA',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.38
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA ACTIVE HYBRID',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 7
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA GRAN TURISMO',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.2
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '550iA',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650iA CONVERTIBLE',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 10.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650iA COUPÉ / 650iA GRAN COUPÉ',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 11.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '740iA / 740LiA',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.66
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '750iA / 750LiA SEDÁN',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 11.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '760LiA SEDÁN',
            'year' => 2020,
            'cylinders' => 12,
            'performance' => 7.75
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M13Si',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M13SiA',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M23SiA COUPÉ',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3 SEDÁN / M4 COUPÉ',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 12.05
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M4 CONVERTIBLE',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 11.49
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M5 SEDÁN AUT / M6 COUPÉ / M6 GRAN COUPÉ',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M6 CONVERTIBLE',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 9.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 SDRIVE20iA',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 XDRIVE28iA',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE20iA',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.08
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE28iA',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE35iA',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X4 XDRIVE28iA',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 13.51
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X4 XDRIVE35iA',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.04
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 M / X6 M',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 7.19
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE35iA',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA SECURITY',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 8.62
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE35iA',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE50iA',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE18iA',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE35is',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.11
        ]);

        //BUICK

        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCLAVE',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCORE',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 15.4
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'LACROSSE',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'REGAL',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'VERANO',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.7
        ]);

        //CADILLAC

        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ATS',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ATS COUPÉ',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.6
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ESCALADE',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 8.9
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'SRX',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.8
        ]);

        //CHEVROLET

        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'AVEO',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 17.72
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.3
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO ZL 1',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 8.7
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAPTIVA',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE CE / CHEYENNE DC',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE CR',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'COLORADO DC',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE CPE',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 9.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE CONVERTIBLE',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE TURBO',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.7
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU TURBO',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MATIZ',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 18.9
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 1500',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CE / SILVERADO 2500 DC',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CR',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 16.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC RS',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SPARK',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 20.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SUBURBAN',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TAHOE',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 9.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TORNADO',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAVERSE',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAX',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.9
        ]);

        //CHRYSLER

        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 C',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.69
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 C ADVANCE',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 LIMITED',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 14.69
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '300 C',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.85
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => 'TOWN & COUNTRY',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 9.55
        ]);

        //DODGE

        car::create([
            'brand' => 'DODGE',
            'car_model' => 'ATTITUDE',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 23.30
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER SRT',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 8.29
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER POLICE',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 9.86
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'REDLINE / CHARGER SXT',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 11.90
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART GT',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.35
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART SXT',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.68
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO LIMITED / DURANGO SXT',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 9.61
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO RT',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 8.61
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY RT',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY SE / JOURNEY SXT',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.79
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'VISION',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 16.14
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'VIPER GTS COUPÉ',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 7.35
        ]);

        //FIAT

        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 ABARTH',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 16.04
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 LOUNGE / 500 POP',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.86
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 SPORT',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 16.30
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 L',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 T SPORT',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 16.23
        ]);
        car::create([
            'brand' => 'FIAT', 
            'car_model' => 'PALIO ADVENTURE',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.93
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'RALIO',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 12.68
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'UNO',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.59
        ]);

        //FORD

        car::create([
            'brand' => 'FORD',
            'car_model' => 'IKON',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.48
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ESCAPE',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 11.63
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ECOSPORT',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 12.02
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EDGE',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 9.92
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPEDITION',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 8.33
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPLORER',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.17
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 16.21
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA ST',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.48
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.07
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS ST',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.07
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FUSION',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 11.70
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'F150 / LOBO',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 8.8
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MUSTANG',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 9.27
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MKS / MKX',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 7.79
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MKZ',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 9.62
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'POLICE INTERCEPTOR',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 9.77
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'RANGER',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 7.89
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'TRANSIT',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 9.63
        ]);

        //GMC

        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra SLE (Cabina Regular)F',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 9.1
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra AT4 Carbon(Doble Cabina)C',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 10
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra Denali (Doble Cabina) E/Sierra AT4 (Doble Cabina) D',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Acadian A/Acadian E/ Acadian G',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Yukon D/Yukon G',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 9.2
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Terrain B/Terrain E/ Terrain Denali',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.9
        ]);

        //HONDA

        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CRV EX',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 16.3
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CRV Touring/CRV Turbo Plus/CRV Turbo',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 17.7
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Coupe Sport Plus',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 20.9
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Civic Sedan EX',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 18.2
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Type R Type R',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.1
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Civic Sedan Turbo/Civic Sedan Touring/ Civic Sedan I Style ',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 20.1
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'HRV UNIQ/HRV Touring/HRV Epic',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 17.5
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'BRV Prime/BRV Uniq',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 17.3
        ]);

        //HYUNDAI

        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Elantra GLS CVT/Elantra Limited Tech CVT ',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 26.40
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Elantra GLS TM',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 18.52
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Tucson GLS/Tucson GLS Premium/Tucson Limited/Tucson Limited Tech Navi',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.63
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Santa Fe GLS/Santa Fe Limited Tech',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 12.90
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Santa Fe 7 Pasajeros GLS Premium/Santa Fe 7 Pasajeros Limited Tech',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.73
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Ioniq GLS Premium/Ioniq Limited',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 28.40
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Starex Cargo Van/Starex 12 Pasajeros',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 11.50
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Grand I10 GL/Grand I10 GL MID/Grand I10 GLS',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 18.90
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Accent GL TM/Accent GL MID TM ',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 18.60
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Accent GL TA/Accent GL MID TA/Accent GLS TA',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 17.70
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Accent GL Fleet TM',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 19
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Creta GLS TM',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.60
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Creta GLS TA/Creta GLS Premium TA/Creta Limited',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 16
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Elantra GLS Premium IVT',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 20.40
        ]);

        //INFINITI

        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX60 4X4/ QX60 4X2/QX60 JX35 4X2/ QX60 JX35 4X4',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.4
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX60 4X4',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.6
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX70 3.7',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX70 5.0',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 8.7
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 Hybrid',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 17.2
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 HI',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 LO',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.4
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q70 3.7',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.1
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q70 5.6',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 10.6
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX30 2.0/QX30',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.6
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX50 2WD R19/QX50',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.7
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX50 2WD R20',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.6
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX504WD',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 12.9
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q60 (20INCH)',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 13
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX70 3.7 R21',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX70 3.7 R18',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX70 5.0 (FX50)',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 8.7
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX80',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 8.4
        ]);

        //JAGUAR

        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'XE',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'XF',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'E Pace/F Pace',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.08
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'F Type',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.88
        ]);

        //JEEP

        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Compas (Latitude)',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.1
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Compas (Limited)',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.64
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Compas (Limited Premium)',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.53
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Compas Trailhawk',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.4
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Cherokee Limited',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.78
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Cherokee Overland',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.47
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Cherokee Trailhawk',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.49
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Renegade Sport',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.18
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Renegade Latitude',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.63
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Renegade Limited',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.88
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Rubicon Sport Sport s',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.27
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Unlimited Sport, Sport s',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.47
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Unlimited Sahara',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.28
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Unlimited Rubicon',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.25
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Mild-Hybrid 2.0L 2 puertas (Sport y Sport S) y Wrangler Mild-Hybrid Unlimited Sport S 2.0L',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 12.62
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Mild-Hybrid 2.0L (Willy’s) y Wrangler Mild-Hybrid Unlimited 2.0L (Willy’s)',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 11.74
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Mild-Hybrid 2.0L (Rubicon) y Wrangler Mild-Hybrid Unlimited 2.0L (Rubicon)',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 10.89
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Mild-Hybrid 2.0L (Unlimited Sahara)',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 11.81
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Gladiator (Sport, Sport S)',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.72
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Gladiator (Ovarland)',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.32
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Gladiator (Montaje, Rubicon)',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 9.31
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee Laredo',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.91
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee (Limited, Limited Lujo)',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.67
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee (Limited, Limited Lujo Advance, Summit Elite Platinum)',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 8.38
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee (Blindada)',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 8.13
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee (Trailhawk)',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 8.28
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee (Trackhawk)',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 7.46
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee SRT',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 8.21
        ]);

        //KIA

        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte (Hatchback) EX, GT-LINE',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 18.03
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte (Hatchback) GT',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.92
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Soul LX',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 17.06
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Soul EX,EX PACK',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 17.46
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Soul SX',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 16.73
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Rio L, LX, EX',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 18.28
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Rio LX,EX,EX PACK',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 17.809
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte L, LX',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 18.28
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte L, LX EX, EX PREMIUM, GT-LINE',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 18.53
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte GT',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 17.07
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Stinger GT',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.06
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Stinger EX,GT-LINE',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.21
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sportage LX,EX,EX PACK',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.77
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sportage SXL AWD',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.81
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sportage SX,SXL',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.50
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sedona LX,EX,EX PACK,SXL',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.26
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Optima SX,SXL',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.76
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sorento SX',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.88
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sorento LX,EX Pack',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.67
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Niro (Híbrido) LX,EX',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 26.92
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'SELTOS EX',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 16.25
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'SELTOS GT LINE',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 17
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'SELTOS EX,EX PACK',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 15.8
        ]);

        //LAND ROVER

        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Range Rover Sport Mhev',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.67
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Range Rover Sport',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 7.81
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Evoque',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Evoque MHEV',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 12.55
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Discovery Sport',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Discovery Sport Mhev',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 11.62
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Velar',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 12.82
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Discovery',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 9.19
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Range Rover Phev/Range Rover Sport Phev ',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 34.71
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Range Rover Vogue Mhev',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.67
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Range Rover Vogue/Range Rover Sport',
            'year' => 2020,
            'cylinders' => 8,
            'performance' => 7.81
        ]);

        //LINCOLN

        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Aviator 3.0L Phev AWD',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.78
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln Corsair 2.0L',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.90
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln Corsair 2.3L',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.50
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln Continental 3.0L FWD AT',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.55
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln MKZ 2.0L GTDI ECOBOOST I-4 AT,6 VEL',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 14.04
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln MKZ 3.0L V6 GTDI ECOBOOST I-4 AT,6 VEL',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 11.58
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln MKZ MKZ HEV 2.0L IVCT ATK',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 26.54
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Navigator L 4X4 3.5L V6 ECOBOOST, AT',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.42
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Nautilus 2.0L FWD',
            'year' => 2020,
            'cylinders' => 4,
            'performance' => 13.55
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Nautilus 2.7L AWD',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 12.65
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Avitor 3.0L AWD',
            'year' => 2020,
            'cylinders' => 6,
            'performance' => 10.88
        ]);

        //2021
        //nofake
        //ACURA

        car::create([
            'brand' => 'ACURA',
            'car_model' => 'ILX',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'MDX',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'RDX',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 12.8
        ]);
        car::create([
            'brand' => 'ACURA',
            'car_model' => 'TLX',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.3
        ]);

        //ALFA ROMEO

        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'MITO',
            'year' => 2021,
            'cylinders' => 0,
            'performance' => 16.19
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => '4C',
            'year' => 2021,
            'cylinders' => 0,
            'performance' => 15.01
        ]);
        car::create([
            'brand' => 'ALFA ROMEO',
            'car_model' => 'GUILIETTA',
            'year' => 2021,
            'cylinders' => 0,
            'performance' => 16.61
        ]);

        //AUDI

        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A1 / A1 SPORTBACK',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 19.02
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A3',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 18.20
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A4',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.50
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A5',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'A8',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 13.00
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q3',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 18.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q5',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'Q7',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 13.70
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'R8',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 8.80
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'RS 5',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 9.9
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S3',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 12.80
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S4',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.10
        ]);
        car::create([
            'brand' => 'AUDI',
            'car_model' => 'S',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 11.40
        ]);

        //BENTLEY

        car::create([
            'brand' => 'BENTLEY',
            'car_model' => 'CONTINENTAL GT / GTC / FLYING',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 8.20
        ]);

        //BMW

        car::create([
            'brand' => 'BMW',
            'car_model' => '118i',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 16.95
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '118iA',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 17.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '220iA COUPÉ',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '320i',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '320iA',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 16.67
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328i',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '328iA',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 13.89
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '335iA ACTIVE HYBRID',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 5.90
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '420iA COUPÉ',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 16.39
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '428iA CONVERTIBLE',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.93
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '428iA COUPÉ / 428iA GRAN COUPÉ',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA CONVERIBLE',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.99
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA COUPÉ',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 13.51
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '435iA GRAN COUPÉ',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '520iA',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '528iA',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.38
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA ACTIVE HYBRID',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 7
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '535iA GRAN TURISMO',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.2
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '550iA',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650iA CONVERTIBLE',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 10.87
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '650iA COUPÉ / 650iA GRAN COUPÉ',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 11.24
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '740iA / 740LiA',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.66
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '750iA / 750LiA SEDÁN',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 11.63
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => '760LiA SEDÁN',
            'year' => 2021,
            'cylinders' => 12,
            'performance' => 7.75
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M13Si',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M13SiA',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M23SiA COUPÉ',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M3 SEDÁN / M4 COUPÉ',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 12.05
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M4 CONVERTIBLE',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 11.49
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M5 SEDÁN AUT / M6 COUPÉ / M6 GRAN COUPÉ',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'M6 CONVERTIBLE',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 9.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 SDRIVE20iA',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X1 XDRIVE28iA',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE20iA',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.08
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE28iA',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.33
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X3 XDRIVE35iA',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.36
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X4 XDRIVE28iA',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 13.51
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X4 XDRIVE35iA',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.04
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 M / X6 M',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 7.19
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE35iA',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X5 XDRIVE50iA SECURITY',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 8.62
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE35iA',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.76
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'X6 XDRIVE50iA',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 10.3
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE18iA',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'BMW',
            'car_model' => 'Z4 SDRIVE35is',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.11
        ]);

        //BUICK

        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCLAVE',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCORE',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 15.4
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'LACROSSE',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'REGAL',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'VERANO',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.7
        ]);

        //CADILLAC

        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ATS',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.7
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ATS COUPÉ',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.6
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'CTS',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 13.3
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ESCALADE',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 8.9
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'SRX',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.8
        ]);

        //CHEVROLET

        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'AVEO',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 17.72
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.3
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO ZL 1',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 8.7
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAPTIVA',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE CE / CHEYENNE DC',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE CR',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'COLORADO DC',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE CPE',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 9.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE CONVERTIBLE',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 11.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CRUZE TURBO',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.7
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MALIBU TURBO',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'MATIZ',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 18.9
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 1500',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.4
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CE / SILVERADO 2500 DC',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 10.2
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO 2500 CR',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 16.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SONIC RS',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 16.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SPARK',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 20.6
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SUBURBAN',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 10.1
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TAHOE',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 9.8
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TORNADO',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAVERSE',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.5
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAX',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.9
        ]);

        //CHRYSLER

        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 C',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.69
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 C ADVANCE',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '200 LIMITED',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 14.69
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => '300 C',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.85
        ]);
        car::create([
            'brand' => 'CHRYSLER',
            'car_model' => 'TOWN & COUNTRY',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 9.55
        ]);

        //DODGE

        car::create([
            'brand' => 'DODGE',
            'car_model' => 'ATTITUDE',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 23.30
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHALLENGER SRT',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 8.29
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'CHARGER POLICE',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 9.86
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'REDLINE / CHARGER SXT',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 11.90
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART GT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.35
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DART SXT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.68
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO LIMITED / DURANGO SXT',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 9.61
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'DURANGO RT',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 8.61
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY RT',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'JOURNEY SE / JOURNEY SXT',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.79
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'VISION',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 16.14
        ]);
        car::create([
            'brand' => 'DODGE',
            'car_model' => 'VIPER GTS COUPÉ',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 7.35
        ]);

        //FIAT

        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 ABARTH',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 16.04
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 LOUNGE / 500 POP',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.86
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 SPORT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 16.30
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 L',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.16
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => '500 T SPORT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 16.23
        ]);
        car::create([
            'brand' => 'FIAT', 
            'car_model' => 'PALIO ADVENTURE',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.93
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'RALIO',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 12.68
        ]);
        car::create([
            'brand' => 'FIAT',
            'car_model' => 'UNO',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.59
        ]);

        //FORD

        car::create([
            'brand' => 'FORD',
            'car_model' => 'IKON',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.48
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ESCAPE',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 11.63
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'ECOSPORT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 12.02
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EDGE',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 9.92
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPEDITION',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 8.33
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'EXPLORER',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.17
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 16.21
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FIESTA ST',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.48
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.07
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FOCUS ST',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.07
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'FUSION',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 11.70
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'F150 / LOBO',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 8.8
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MUSTANG',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 9.27
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MKS / MKX',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 7.79
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'MKZ',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 9.62
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'POLICE INTERCEPTOR',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 9.77
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'RANGER',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 7.89
        ]);
        car::create([
            'brand' => 'FORD',
            'car_model' => 'TRANSIT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 9.63
        ]);

        //GMC

        car::create([
            'brand' => 'GMC',
            'car_model' => 'Yukon A/Yukon XL B',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 9.04
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Terrain B/Terrain D',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.86
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Acadian D',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.35
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Acadian A/Acadian E',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.83
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra F',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 8.54
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra C',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 10.13
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra E',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 9.71
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Sierra D',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 10.24
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'Yukon A/Yukon XL B',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 8.74
        ]);

        //GML

        car::create([
            'brand' => 'GML',
            'car_model' => 'J7 QUANTUM MT/J7 LIMITED MT/J7 ADVANCED MT/J7 TREND MT/J7 SMART MT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 16.4
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 2 SMART CVT/SEI 2 CONNECT CVT/SEI 2 ACTIVE CVT/SEI 2 QUANTUM CVT/SEI 2LIMITED CVT/GF-1500 [E V]MT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.8
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 2 SMART MT/SEI 2 CONNECT MT/SEI 2 ACTIVE MT/SEI 2 QUANTUM MT/SEI 2 LIMITED MT ',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 24.4
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 3 SMART CVT/SEI 3 CONNECT CVT/SEI 3 ACTIVE CVT/SEI 3 QUANTUM CVT/SEI 3 LIMITED CVT/SEI 3 PRO CVT ',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 18.8
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 3 SMART MT/SEI 3 CONNECT MT/SEI 3 ACTIVE MT/SEI 3 QUANTUM MT/SEI 3 LIMITED MT/SEI 3 PRO MT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 17.5
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 4 SMART CVT/SEI 4 CONNECT CVT/SEI 4 ACTIVE CVT/SEI 4 QUANTUM CVT/SEI 4 LIMITED CVT/FRISON T8 LTD MT/FRISON T6 LTD MT/FRISON T8 MT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'J4 ACTIVE MT/J4 TREND MT/ J4 LIMITED MT/J4 ESSENCE MT/J4 SMART MT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 18.7
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'J7 ADVANCE CVT/J7 TREND CVT/J7 SMART CVT/J7 QUANTUM CVT/J7 LIMITED CVT ',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 16.5
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 4 SMART MT/SEI 4 CONNECT MT/SEI 4 ACTIVE MT/SEI 4 QUANTUM MT/SEI 4 LIMITED MT/GMLX40 MT ',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.9
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 4 PRO COMFORT MT/SEI 4 PRO CONNECT MT/SEI 4 PRO ACTIVE MT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 17.16
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 7 SMART/SEI 7 CONNECT/SEI 7 ACTIVE/SEI 7 QUANTUM/SEI 7 LIMITED',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 12.1
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 7 PRO SMART/SEI 7 PRO CONNECT/SEI 7 PRO ACTIVE/SEI 7 PRO QUANTUM/SEI 7 PRO LIMITED',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.61
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 8 LUXURY/SEI 8 FLAGSHIP/SEI 8 QUANTUM/SEI 8 LIMITED',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.72
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'GF-1500 [E IV]MT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.3
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'GML X200 MT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 12.2
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'GML X40 CVT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.9
        ]);

        //HONDA

        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Accord EX 1.5T/Accord Sport Plus',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 19.9
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Accord Touring',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.4
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'BRV PRIME/BRV UNIQ',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 17.3
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'City LX/City EX',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 20.8
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Civic I Style/Civic Uniq',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 20.1
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Civic Turbo/Civic Touring/Civic Sport',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 20.9
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'CRV Touring/CRV Turbo Plus/CRV Turbo',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 17.7
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'HRV Uniq/HRV Prime/HRV Touring',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 17.5
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Pilot Prime',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 11.9
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Odyssey Prime/Odyssey Touring',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 12.7
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'Pilot Touring',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 12.3
        ]);
        car::create([
            'brand' => 'HONDA',
            'car_model' => 'INSIGHT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 30.4
        ]);

        //HYUNDAI

        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Grand I10 GL/Grand I10 GL MID/Grand I10 GLS',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 17
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Accent GL TM/Accent GL MID TM ',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 18.60
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Accent GL TA/Accent GL MID TA/Accent GLS TA',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 18.50
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Creta GL TM',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.70
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Creta GLS IVT/Creta GLS Premium',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Creta Limited Turbo',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.10
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Elantra GLS TM',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 18.52
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Elantra GLS CVT/Elantra GLS Premium IVT/Elantra Limited Tech CVT ',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 20.40
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Tucson GLS/Tucson GLS Premium/Tucson Limited/Tucson Limited Tech Navi',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.63
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Santa Fe GLS/Santa Fe Limited Tech',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 12.90
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Santa Fe 7 Pasajeros GLS Premium/Santa Fe 7 Pasajeros Limited Tech',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.73
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Ioniq GLS Premium/Ioniq Limited',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 28.40
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Starex Cargo Van/Starex 12 Pasajeros',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 11.50
        ]);
        car::create([
            'brand' => 'HYUNDAI',
            'car_model' => 'Accent GL Fleet TM ',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 19
        ]);

        //INFINITI

        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX80',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 8.24
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX60 4X4/ QX60 4X2',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.37
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX60 Hybrid',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.93
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 Hybrid',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 17.21
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q60 20INCH',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.99
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 HI',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.51
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'Q50 LO',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.4
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX50 4WD',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 12.88
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX50 2WD R19',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.67
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX50 2WD R20',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.63
        ]);

        //JAGUAR

        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'E Pace/F Pace',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.08
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'F Pace Mhev',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.03
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'F TYPE',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.48
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'XE',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.87
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'XF',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.71
        ]);
        car::create([
            'brand' => 'JAGUAR',
            'car_model' => 'E Pace Mhev',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 11.95
        ]);

        //JEEP

        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Gladiator (Monjave, Rubicon)',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 9.31
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee Laredo,Upland,80 TH Anniversary Editon',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.91
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee (Limited, Limited X,Lujo)',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.67
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee (Limited Lujo, Limited Lujo Advance, 80 TH Anniversary Edition, Overland, Summit Elite Platinum)',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 8.38
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee (Blindada)',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 8.13
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Cherokee Trailhawk',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 8.28
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee (Trackhawk)',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 7.46
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Grand Cherokee SRT',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 8.21
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Compas (Latitude)',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.1
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Compas (Limited,80TH Anniversary Edition)',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.64
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Compas (Limited Premium)',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.53
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Compas Trailhawk',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.4
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Renegade Sport',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.18
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Renegade Latitude,80TH Anniversary Edition',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.63
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Renegade Limited',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.88
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Sport 80TH Anniversary Edition(Mild-Hybrid)',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.7
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => ' Wrangler Islander (Mild-Hybrid)/Wrangler Unlimited Sport(Mild-Hybrid)/ Wrangler Unlimited Sport S (Mild-Hybrid)/Wrangler Unlimited Sport 80TH Anniversary Edition(Mild-Hybrid)/ Wrangler Unlimited Islander (Mild-Hybrid)',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.69
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Rubicon Mild-Hybrid/Wrangler Rubicon Deluxe Package Mild-Hybrid ',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.62
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Unlimited Sahara(Mild-Hybrid)/ Wrangler Unlimited Sahara 80TH Anniversary Edition(Mild-Hybrid)',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.49
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler Unlimited Rubicon',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.48
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Wrangler (Willys)',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.95
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Gladiator Sport/Gladiator Sport S/Gladiator Willys',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.72
        ]);
        car::create([
            'brand' => 'JEEP',
            'car_model' => 'Gladiator Overland/Gladiator (80TH Anniversary Edition)',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.32
        ]);

        //KIA

        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sportage EX PACK,SX,SXL',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.5
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sportage LX,EX',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 14.77
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Soul LX',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 17.06
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Soul EX,EX PACK',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 17.46
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte (SEDÁN) L,LX',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 18.28
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte (SEDÁN) GT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 17.07
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte (Hatchback) GT',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.92
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte (SEDÁN) L, LX EX, GT-LINE',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 18.53
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte (Hatchback) EX,GT LINE',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 18.03
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Rio L, LX, EX',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 18.84
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Rio L,LX,EX,S PACK',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 18.28
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Rio LX,EX,EX PACK',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 17.81
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Niro (Híbrido),EX',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 26.92
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'SELTOS EX PACK/SELTOS SX/SELTOS EX',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.8
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'SELTOS GT LINE',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 17
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sorento LX, Sorento SX, Sorento EX Pack',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 15.26
        ]);

        //LAND ROVER

        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Defender 110/Defender 90',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 10.19
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Defender 90 Mhev/Defender 110 Mhev',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 11.57
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Evoque MHEV',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 12.55
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Discovery Sport Mhev',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 11.62
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Velar',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 12.82
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Velar Mhev',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.03
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Discovery Mhev',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.8
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Range Rover Phev/Range Rover Sport Phev',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 34.71
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Range Rover Mhev/ Range Rover SportMhev',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.67
        ]);
        car::create([
            'brand' => 'LAND ROVER',
            'car_model' => 'Range Rover Vogue/Range Rover Sport',
            'year' => 2021,
            'cylinders' => 8,
            'performance' => 7.81
        ]);

        //LINCOLN

        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln Corsair 2.0L',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.90
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Lincoln Corsair 2.3L',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.50
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Corsair 2.5L Phev EAWD',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 50.30
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Navigator L 4X4 3.5L V6 ECOBOOST, AT',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.42
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Nautilus 2.0L FWD',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 13.55
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Nautilus 2.7L AWD',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.65
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Avitor 3.0L AWD',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 10.88
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Avitor 3.0L PHEV AWD',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 26.92
        ]);
        car::create([
            'brand' => 'LINCOLN',
            'car_model' => 'Avitor 3.0L RWD',
            'year' => 2021,
            'cylinders' => 6,
            'performance' => 12.78
        ]);

        //2022

        //BUICK

        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCLAVE L',
            'year' => 2022,
            'cylinders' => 6,
            'performance' => 11.72
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCLAVE P',
            'year' => 2022,
            'cylinders' => 6,
            'performance' => 11.15
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENVISION L / ENVISION U',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 15.17
        ]);
        car::create([
            'brand' => 'BUICK',
            'car_model' => 'ENCORE GX L / ENCORE GX S / ENCORE GX D',
            'year' => 2022,
            'cylinders' => 3,
            'performance' => 18.68
        ]);

        //CADILLAC

        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'XT4 D / XT4 F',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 15.02
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'XT5 C',
            'year' => 2022,
            'cylinders' => 6,
            'performance' => 12.06
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'XT5 F',
            'year' => 2022,
            'cylinders' => 6,
            'performance' => 11.61
        ]);
        car::create([
            'brand' => 'CADILLAC',
            'car_model' => 'ESCALADE SUV B / ESCALADE ESV B',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 8.74
        ]);

        //CHEVROLET

        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAPTIVA A',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 14.97
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAPTIVA B / CAPTIVA C',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 14.48
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'ONIX A / ONIX C',
            'year' => 2022,
            'cylinders' => 3,
            'performance' => 23.36
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'ONIX B',
            'year' => 2022,
            'cylinders' => 3,
            'performance' => 21.05
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'ONIX G',
            'year' => 2022,
            'cylinders' => 3,
            'performance' => 20.30
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'ONIX D',
            'year' => 2022,
            'cylinders' => 3,
            'performance' => 21.06
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAVERSE B',
            'year' => 2022,
            'cylinders' => 6,
            'performance' => 12.03
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRAVERSE C',
            'year' => 2022,
            'cylinders' => 6,
            'performance' => 12.03
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'AVEO A / AVEO C',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 19.74
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'AVEO B',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 19.31
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO C / CAMARO K',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 10.68
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO E',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 8.08
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAMARO F',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 8.10
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'BLAZER B / BLAZER C / BLAZER F',
            'year' => 2022,
            'cylinders' => 6,
            'performance' => 12.68
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRACKER A',
            'year' => 2022,
            'cylinders' => 3,
            'performance' => 20.10
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRACKER B / TRACKER C',
            'year' => 2022,
            'cylinders' => 3,
            'performance' => 18.14
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TRACKER D',
            'year' => 2022,
            'cylinders' => 3,
            'performance' => 18.06
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'COLORADO B',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 11.99
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'COLORADO C / COLORADO D',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 11.07
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'BOLT EUV A',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 69.62
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TORNADO VAN B',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 16.27
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CAVALIER A / CAVALIER B / CAVALIER C',
            'year' => 2022,
            'cylinders' => 3,
            'performance' => 19.12
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'GROOVE A',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 19.83
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'GROOVE B / GROOVE C',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 17.11
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CARVETTE A / CORVETTE C / CORVETTE D',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 10.10
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CORVETTE B',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 9.90
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO E',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 11.75
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO F',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 10.65
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO K / SILVERDAO O',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 9.66
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SILVERADO N',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 9.99
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE B / CHEYENNE S',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 9.66
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE C',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 9.99
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE D',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 9.24
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE G',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 8.96
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'CHEYENNE H',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 9.69
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SUBURBAN B',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 9.00
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SUBURBAN C',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 9.56
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'SUBURBAN G',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 8.74
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TAHOE A / TAHOE C / TAHOE P',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 9.56
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TAHOE B',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 9.42
        ]);
        car::create([
            'brand' => 'CHEVROLET',
            'car_model' => 'TAHOE G',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 8.74
        ]);
        //GMC

        car::create([
            'brand' => 'GMC',
            'car_model' => 'ACADIA A / ACADIA E',
            'year' => 2022,
            'cylinders' => 6,
            'performance' => 11.83
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'ACADIA D',
            'year' => 2022,
            'cylinders' => 6,
            'performance' => 12.35
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'TERRAIN C',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 15.16
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'TERRAIN D / TERRAIN E',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 15.83
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'SIERRA D',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 9.24
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'SIERRA E',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 8.96
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'SIERRA F',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 9.69
        ]);
        car::create([
            'brand' => 'GMC',
            'car_model' => 'YUKON A / YUKON XL B',
            'year' => 2022,
            'cylinders' => 8,
            'performance' => 8.74
        ]);

        //GML

        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 7 SMART/SEI 7 CONNECT/SEI 7 ACTIVE/SEI 7 QUANTUM/SEI 7 LIMITED',
            'year' => 2021,
            'cylinders' => 4,
            'performance' => 12.1
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 7 PRO SMART/SEI 7 PRO CONNECT/SEI 7 PRO ACTIVE/SEI 7 PRO QUANTUM/SEI 7 PRO LIMITED',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 14.72
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 3 SMART MT/SEI 3 CONNECT MT/SEI 3 ACTIVE MT/SEI 3 QUANTUM MT/SEI 3 LIMITED MT/SEI 3 PRO MT',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 17.5
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 4 SMART CVT/SEI 4 CONNECT CVT/SEI 4 ACTIVE CVT/SEI 4 QUANTUM CVT/SEI 4 LIMITED CVT/FRISON T6 MT/FRISON T6 LTD MT/FRISON T8 MT/FRISON T8 LTD MT',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 15
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 4 SMART MT/SEI 4 CONNECT MT/SEI 4 ACTIVE MT/SEI 4 QUANTUM MT/SEI 4 LIMITED MT',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 15.9
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 4 PRO COMFORT MT/SEI 4 PRO CONNECT MT/SEI 4 PRO ACTIVE MT',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 17.16
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'GF-1500 [E IV] MT',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 15.13
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 2 SMART CVT/SEI 2 CONNECT CVT/SEI 2 ACTIVE CVT/SEI 2 QUANTUM CVT/SEI 2LIMITED CVT/GF-1500 [E V]MT',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 14.8
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'JACKX200 MT',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 12.2
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'GML X40 CVT',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 13.9
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'J4 ACTIVE MT/J4 TREND MT/ J4 LIMITED MT/J4 ESSENCE MT/J4 SMART MT',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 18.7
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'J7 QUANTUM CVT/J7 LIMITED CVT/J7 ADVANCED CVT/J7 TREND CVT/J7 SMART CVT',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 16.5
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'J7 QUANTUM MT/J7 LIMITED MT/J7 ADVANCED MT/J7 TREND MT/J7 SMART MT',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 16.4
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => 'SEI 2 SMART CVT/SEI 2 CONNECT CVT/SEI 2 ACTIVE CVT/SEI 2 QUANTUM CVT/SEI 2 LIMITED CVT',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 14.8
        ]);
        car::create([
            'brand' => 'GML',
            'car_model' => ' SEI 2 SMART MT/SEI 2 CONNECT MT/SEI 2 QUANTUM MT/SEI 2 ACTIVE MT/SEI 2 LIMITED MT',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 24.4
        ]);

        //INFINITI

        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX50 4WD',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 12.88
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX50 2WD R19',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 14.67
        ]);
        car::create([
            'brand' => 'INFINITI',
            'car_model' => 'QX50 2WD R20',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 14.63
        ]);

        //KIA

        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte SEDÁN EX,Forte SEDÁN GT-LINE/Forte SEDÁN LX',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 18.53
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Forte (SEDÁN) GT',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 17.07
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Stinger GT',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 12.06
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Stinger GT-LINE',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 15.04
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sportage EX PACK, Sportage SXL',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 14.5
        ]);
        car::create([
            'brand' => 'KIA',
            'car_model' => 'Sportage LX, Sportage EX',
            'year' => 2022,
            'cylinders' => 4,
            'performance' => 14.77
        ]);
    }
}
