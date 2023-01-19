<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductosRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'codigo' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'moneda' => 'required',
            'maximo' => 'required',
            'minimo' => 'required',
            'sat' => 'required',
            'categoria' => 'required',
            'observaciones' => 'required',
            'filtro1' => 'required',
            'filtro2' => 'required',
        ];
        return $rules;
    }
}