<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInventarioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'fecha' => 'required',
            'movimiento' => 'required',
            'concepto' => 'required',
            'proveedor' => 'required',
            'almacen' => 'required',
            'cod_producto' => 'required',
            'des_producto' => 'required',
            'cat_producto' => 'required',
            'stock' => 'required',
            'ubicacion' => 'required',
            'observaciones' => 'required',
        ];

        return $rules;
    }
}