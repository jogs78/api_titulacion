<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTitulacionOpcionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'sometimes|string|max:255',
            'descripcion' => 'sometimes|string',
            'tiempo_maximo' => 'sometimes|integer|min:1',
        ];
    }

    public function messages()
    {
        return [
            'nombre.sometimes' => 'El nombre es opcional',
            'nombre.string' => 'El nombre debe ser una cadena de texto',
            'nombre.max' => 'El nombre no puede exceder los 255 caracteres',

            'descripcion.sometimes' => 'La descripción es opcional',
            'descripcion.string' => 'La descripción debe ser una cadena de texto',

            'tiempo_maximo.sometimes' => 'El tiempo máximo es opcional',
            'tiempo_maximo.integer' => 'El tiempo máximo debe ser un número entero',
            'tiempo_maximo.min' => 'El tiempo máximo debe ser al menos 1',
    ];
    }

}
