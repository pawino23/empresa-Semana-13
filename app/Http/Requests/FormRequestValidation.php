<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Cambiar a true para permitir la validación
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'cperApellido' => 'required|string|max:255',
            'cPerNombre' => 'required|string|max:255',
            'cPerDireccion' => 'required|string|max:255',
            'dPerFechaNac' => 'required|date',
            'nPerEdad' => 'required|integer',
            'nPerSueldo' => 'required|numeric',
            'nPerEstado' => 'required|in:0,1',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'cperApellido.required' => 'Se necesita llenar los Apellidos',
            'cPerNombre.required' => 'Se necesita llenar los Nombres',
            'cPerDireccion.required' => 'Se necesita llenar la Dirección',
            'dPerFechaNac.required' => 'Se necesita llenar la Fecha de Nacimiento',
            'nPerEdad.required' => 'Por favor, llene su edad',
            'nPerSueldo.required' => 'Llene su sueldo, por favor',
            'nPerEstado.required' => 'Seleccione el estado'
        ];
    }
}