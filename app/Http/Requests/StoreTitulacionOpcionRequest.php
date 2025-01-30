<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTitulacionOpcionRequest extends FormRequest
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
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tiempo_maximo' => 'required|integer|min:1',
        ];
    }

    public function messages()
    {
    return [
        'nombre.required' => 'El nombre es requerido',
        'nombre.string' => 'El nombre debe ser una cadena de texto',
        'nombre.max' => 'El nombre no debe exceder los 255 caracteres',

        'descripcion.required' => 'La descripción es requerida',
        'descripcion.string' => 'La descripción debe ser una cadena de texto',

        'tiempo_maximo.required' => 'El tiempo máximo es requerido',
        'tiempo_maximo.integer' => 'El tiempo máximo debe ser un número entero',
        'tiempo_maximo.min' => 'El tiempo máximo debe ser al menos 1',
    ];
    }

}
