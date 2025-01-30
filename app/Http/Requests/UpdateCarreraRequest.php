<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarreraRequest extends FormRequest
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
            'nombre' => 'sometimes|string|max:255|unique:carreras,nombre,',
            'clave' => 'sometimes|string|max:20|unique:carreras,clave,',
        ];
    }

    public function messages()
    {
        return [
            'nombre.string' => 'El nombre debe ser una cadena de texto',
            'nombre.max' => 'El nombre no debe exceder los 255 caracteres',
            'nombre.unique' => 'Este nombre ya está registrado en las carreras',

            'clave.string' => 'La clave debe ser una cadena de texto',
            'clave.max' => 'La clave no debe exceder los 20 caracteres',
            'clave.unique' => 'Esta clave ya está registrada en las carreras',
    ];
    }

}
