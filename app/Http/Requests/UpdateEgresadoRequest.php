<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEgresadoRequest extends FormRequest
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
                'apellido_paterno' => 'sometimes|string|max:255',
                'apellido_materno' => 'sometimes|nullable|string|max:255',
                'numero_control' => 'sometimes|string|max:20|unique:egresados,numero_control',
                'correo' => 'sometimes|email|max:255|unique:egresados,correo',
                'telefono' => 'sometimes|nullable|string|max:15',
                'carrera_id' => 'sometimes|integer|exists:carreras,id',
                'plan_estudio_id' => 'sometimes|integer|exists:plan_estudios,id',
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

            'cedula_profesional.string' => 'La cédula profesional debe ser una cadena de texto',
            'cedula_profesional.max' => 'La cédula profesional no debe exceder los 20 caracteres',
            'cedula_profesional.unique' => 'La cédula profesional ya está registrada',

            'correo.string' => 'El correo debe ser una cadena de texto',
            'correo.email' => 'El correo debe ser una dirección de correo electrónico válida',
            'correo.max' => 'El correo no debe exceder los 255 caracteres',
            'correo.unique' => 'El correo ya está registrado',

            'profesion.string' => 'La profesión debe ser una cadena de texto',
            'profesion.max' => 'La profesión no debe exceder los 255 caracteres',
    ];
    }

}
