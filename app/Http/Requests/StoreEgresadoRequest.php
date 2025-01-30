<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEgresadoRequest extends FormRequest
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
                'apellido_materno' => 'nullable|string|max:255',
                'numero_control' => 'required|string|max:20|unique:egresados,numero_control',
                'correo' => 'required|email|max:255|unique:egresados,correo',
                'telefono' => 'nullable|string|max:15',
                'carrera_id' => 'required|integer|exists:carreras,id',
                'plan_estudio_id' => 'required|integer|exists:planes_estudio,id',
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

        'apellido_materno.string' => 'El apellido materno debe ser una cadena de texto',
        'apellido_materno.max' => 'El apellido materno no debe exceder los 255 caracteres',

        'numero_control.required' => 'El número de control es requerido',
        'numero_control.string' => 'El número de control debe ser una cadena de texto',
        'numero_control.max' => 'El número de control no debe exceder los 20 caracteres',
        'numero_control.unique' => 'El número de control ya existe en el sistema',

        'correo.required' => 'El correo es requerido',
        'correo.email' => 'El correo debe ser una dirección de correo válida',
        'correo.max' => 'El correo no debe exceder los 255 caracteres',
        'correo.unique' => 'El correo ya existe en el sistema',

        'telefono.string' => 'El teléfono debe ser una cadena de texto',
        'telefono.max' => 'El teléfono no debe exceder los 15 caracteres',

        'carrera_id.required' => 'La carrera es requerida',
        'carrera_id.integer' => 'La carrera debe ser un número entero',
        'carrera_id.exists' => 'La carrera seleccionada no existe',

        'plan_estudio_id.required' => 'El plan de estudios es requerido',
        'plan_estudio_id.integer' => 'El plan de estudios debe ser un número entero',
        'plan_estudio_id.exists' => 'El plan de estudios seleccionado no existe',
    ];
    }

}
