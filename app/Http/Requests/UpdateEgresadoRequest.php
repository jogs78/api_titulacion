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
                'numero_control' => 'sometimes|string|max:20|',
                'correo' => 'sometimes|email|max:255|',
                'telefono' => 'sometimes|nullable|string|max:10',
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

            'numero_control.string' => 'El numero de control debe ser una cadena de texto',
            'numero_control.max' => 'El numero de control no debe exceder los 20 caracteres',
            //'numero_control.unique' => 'El numero de control ya está registrada',

            'correo.string' => 'El correo debe ser una cadena de texto',
            'correo.email' => 'El correo debe ser una dirección de correo electrónico válida',
            'correo.max' => 'El correo no debe exceder los 255 caracteres',
            //'correo.unique' => 'El correo ya está registrado',
            'telefono.string' => 'El teléfono debe ser una cadena de texto',
            'telefono.max' => 'El teléfono no debe exceder los 10 caracteres',

            'carrera_id.integer' => 'La carrera debe ser un número entero',
            'carrera_id.exists' => 'La carrera seleccionada no es válida',

            'plan_estudio_id.integer' => 'El plan de estudio debe ser un número entero',
            'plan_estudio_id.exists' => 'El plan de estudio seleccionado no es válido',

    ];
    }

}
