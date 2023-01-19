<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpresasRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'nombre_empresa' => 'required',
            'nombre_ruta' => 'required',
            'estado' => 'required',
            'municipio' => 'required',
            'encargado' => 'required',
            'tel_encargado' => 'required|max:10',
        ];
        return $rules;
    }
}
