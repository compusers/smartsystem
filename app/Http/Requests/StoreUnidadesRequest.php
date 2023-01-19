<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUnidadesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'nombre_cliente' => 'required',
            'telefono_cliente' => 'required|max:10',
            'encargado_cliente' => 'required',
            'tel_enc_cliente' => 'required|max:10',
            'ejecutivo_cliente' => 'required',
            'empresa' => 'required',
            'ruta_empresa' => 'required',
            'estado_empresa' => 'required',
            'municipio_empresa' => 'required',
            'unidad' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'observaciones' => 'required',
        ];
        return $rules;
    }
}