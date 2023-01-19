<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlmacenesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'nombre' => 'required',
            'observaciones' => 'required',
            'filtro1' => 'required',
            'filtro2' => 'required',
        ];

        return $rules;
    }
}