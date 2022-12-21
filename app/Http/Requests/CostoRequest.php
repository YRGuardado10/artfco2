<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CostoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            //
            'numkm' => 'numeric | between:0 , 5000000',
            'numkmv'  => 'numeric | between:0 , 5000000',
            'precioiva'  => 'numeric | between:0 , 50000000',
            'precioten'  => 'numeric | between:0 , 50000000',
            'preciover'  => 'numeric | between:0 , 50000000',
            'precioper'  => 'numeric | between:0 , 50000000',
            'preciopla'  => 'numeric | between:0 , 50000000',
            'preciocir'  => 'numeric | between:0 , 50000000',
            'preciolic'  => 'numeric | between:0 , 50000000',
            'precioseg'  => 'numeric | between:0 , 50000000',
            'preciogas'  => 'numeric | between:0 , 50000000',
            'precioman'  => 'numeric | between:0 , 50000000'
        ];
    }

    public function messages(){
        
        return [
            'numkm.between' => 'La cantidad de kilometros anuales debe estar entre 0 y 5000000',
            'numkm.numeric' => 'La cantidad de kilometros anuales es un dato requerido',
            'numkmv.between'  => 'La cantidad de kilometros por viaje debe estar entre 0 y 5000000',
            'numkmv.numeric' => 'La cantidad de kilometros por viaje es dato un requerido',
            'precioiva.between'  => 'La cantidad del precio del vehiculo(+iva) debe estar entre 0 y 50000000',
            'precioiva.numeric'  => 'La cantidad del precio del vehiculo(+iva) es un dato requerido',
            'precioten.between'  => 'La cantidad del precio de la tenencia debe estar entre 0 y 500000',
            'precioten.numeric'  => 'La cantidad del precio de la tenencia es un dato requerido',
            'preciover.between'  => 'La cantidad del precio de la verificación debe estar entre 0 y 500000',
            'preciover.numeric'  => 'La cantidad del precio de la verificación es un dato requerido',
            'precioper.between'  => 'La cantidad del precio del permiso para circular sin placas debe estar entre 0 y 500000',
            'precioper.numeric'  => 'La cantidad del precio del permiso para circular sin placas es un dato requerido',
            'preciopla.between'  => 'La cantidad del precio del alta de placas debe estar entre 0 y 500000',
            'preciopla.numeric'  => 'La cantidad del precio del alta de placas es un dato requerido',
            'preciocir.between'  => 'La cantidad del precio de la tarjeta de circulación debe estar entre 0 y 500000',
            'preciocir.numeric'  => 'La cantidad del precio de la tarjeta de circulación es un dato requerido',
            'preciolic.between'  => 'La cantidad del precio de la licencia debe estar entre 0 y 500000',
            'preciolic.numeric'  => 'La cantidad del precio de la licencia es un dato requerido',
            'precioseg.between'  => 'La cantidad del precio del seguro del vehiculo debe estar entre 0 y 500000',
            'precioseg.numeric'  => 'La cantidad del precio del seguro del vehiculo es un dato requerido',
            'preciogas.between'  => 'La cantidad del precio de la gasolina por litro debe estar entre 0 y 500000',
            'preciogas.numeric'  => 'La cantidad del precio de la gasolina por litro es un dato requerido',
            'precioman.between'  => 'La cantidad del precio del mantenimiento del vehiculo debe estar entre 0 y 500000',
            'precioman.numeric'  => 'La cantidad del precio del mantenimiento del vehiculo es un dato requerido'
        ];
    }
}
