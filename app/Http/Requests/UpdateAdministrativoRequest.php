<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdministrativoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
            'apellido_paterno' => 'sometimes|string|max:255',
            'apellido_materno' => 'sometimes|string|max:255',
            'correo' => 'sometimes|email|max:255|unique:administrativos,correo',
            'puesto' => 'sometimes|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'nombre.string' => 'El nombre debe ser una cadena de texto',
            'nombre.max' => 'El nombre no debe exceder los 255 caracteres',

            'apellido_paterno.string' => 'El apellido paterno debe ser una cadena de texto',
            'apellido_paterno.max' => 'El apellido paterno no debe exceder los 255 caracteres',

            'apellido_materno.string' => 'El apellido materno debe ser una cadena de texto',
            'apellido_materno.max' => 'El apellido materno no debe exceder los 255 caracteres',

            'correo.email' => 'El correo debe ser una dirección de correo válida',
            'correo.max' => 'El correo no debe exceder los 255 caracteres',
            'correo.unique' => 'Este correo ya está registrado en el sistema',

            'puesto.string' => 'El puesto debe ser una cadena de texto',
            'puesto.max' => 'El puesto no debe exceder los 255 caracteres',
    ];
    }

}
