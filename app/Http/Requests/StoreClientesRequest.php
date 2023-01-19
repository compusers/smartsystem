<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'nombre' => 'required',
            'telefono' => 'required|max:10',
            'encargado' => 'required',
            'tel_encargado' => 'required|max:10',
            'ejecutivo' => 'required',
            'unidades' => 'required',
        ];

        return $rules;
    }
}
