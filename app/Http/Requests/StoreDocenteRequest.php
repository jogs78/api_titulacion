<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDocenteRequest extends FormRequest
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
                'apellido_paterno' => 'required|string|max:255',
                'apellido_materno' => 'required|string|max:255',
                'cedula_profesional' => 'required|string|max:20|unique:docentes,cedula_profesional',
                'correo' => 'required|string|email|max:255|unique:docentes,correo',
                'profesion' => 'nullable|string|max:255',

        ];
    }

    public function messages()
    {
    return [
        'nombre.required' => 'El nombre es requerido',
        'nombre.string' => 'El nombre debe ser una cadena de texto',
        'nombre.max' => 'El nombre no debe exceder los 255 caracteres',

        'apellido_paterno.required' => 'El apellido paterno es requerido',
        'apellido_paterno.string' => 'El apellido paterno debe ser una cadena de texto',
        'apellido_paterno.max' => 'El apellido paterno no debe exceder los 255 caracteres',

        'apellido_materno.required' => 'El apellido materno es requerido',
        'apellido_materno.string' => 'El apellido materno debe ser una cadena de texto',
        'apellido_materno.max' => 'El apellido materno no debe exceder los 255 caracteres',

        'cedula_profesional.required' => 'La cédula profesional es requerida',
        'cedula_profesional.string' => 'La cédula profesional debe ser una cadena de texto',
        'cedula_profesional.max' => 'La cédula profesional no debe exceder los 20 caracteres',
        'cedula_profesional.unique' => 'La cédula profesional ya existe en el sistema',

        'correo.required' => 'El correo es requerido',
        'correo.string' => 'El correo debe ser una cadena de texto',
        'correo.email' => 'El correo debe ser una dirección de correo válida',
        'correo.max' => 'El correo no debe exceder los 255 caracteres',
        'correo.unique' => 'El correo ya existe en el sistema',

        'profesion.string' => 'La profesión debe ser una cadena de texto',
        'profesion.max' => 'La profesión no debe exceder los 255 caracteres',
    ];
    }

}
