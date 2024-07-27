<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestValidation extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cperApellido' => 'required|string|max:255',
            'cPerNombre' => 'required|string|max:255',
            'cPerDireccion' => 'required|string|max:255',
            'dPerFechaNac' => 'required|date',
            'nPerEdad' => 'required|integer',
            'nPerSueldo' => 'required|numeric',
            'nPerEstado' => 'required|boolean',
            'foto' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'foto.image' => 'El archivo debe ser una imagen',
        ];
    }
}