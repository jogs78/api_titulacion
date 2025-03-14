<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
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
                //Egresado
                'nombre' => 'required|string|max:255',
                'apellido_paterno' => 'required|string|max:255',
                'apellido_materno' => 'nullable|string|max:255',
                'numero_control' => 'required|string|max:20|unique:egresados,numero_control',
                'correo' => 'required|email|max:255|unique:egresados,correo',
                'telefono' => 'nullable|string|max:15',
                'carrera_id' => 'required|integer|exists:carreras,id',
                'plan_estudio_id' => 'required|integer|exists:plan_estudios,id',

                //Usuario

                //'actual_type' => 'required|string|max:255',
                //'actual_id' => 'required|integer|exists:egresados,id',
                'nombre_usuario' => 'required|string|max:255|unique:usuarios,nombre_usuario',
                'contraseña' => 'required|string|min:8',

                //Tramite
                //'egresado_id' => 'required|exists:egresados,id',
                //'titulacion_opciones_id' => 'required|exists:titulacion_opciones,id',
                //'nombre_proyecto' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
    return [
        //Egresado
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

        'plan_estudios_id.required' => 'El plan de estudios es requerido',
        'plan_estudios_id.integer' => 'El plan de estudios debe ser un número entero',
        'plan_estudios_id.exists' => 'El plan de estudios seleccionado no existe',

        //Usuario
        //'actual_type.required' => 'El campo tipo de usuario es obligatorio.',
        //'actual_type.string' => 'El campo tipo de usuario debe ser una cadena de texto.',
        //'actual_type.max' => 'El campo tipo de usuario no debe exceder los 255 caracteres.',

        //'actual_id.required' => 'El campo ID de usuario es obligatorio.',
        //'actual_id.integer' => 'El campo ID de usuario debe ser un número entero.',
        //'actual_id.exists' => 'El ID de usuario proporcionado no existe en la base de datos.',

        'nombre_usuario.required' => 'El campo nombre de usuario es obligatorio.',
        'nombre_usuario.string' => 'El campo nombre de usuario debe ser una cadena de texto.',
        'nombre_usuario.max' => 'El campo nombre de usuario no debe exceder los 255 caracteres.',
        'nombre_usuario.unique' => 'El nombre de usuario ya está en uso.',

        'contraseña.required' => 'El campo contraseña es obligatorio.',
        'contraseña.string' => 'El campo contraseña debe ser una cadena de texto.',
        'contraseña.min' => 'El campo contraseña debe tener al menos 8 caracteres.',

        //Tramite
        //'egresado_id.required' => 'El egresado es requerido',
        //'egresado_id.exists' => 'El egresado seleccionado no existe',

        //'titulacion_opciones_id.required' => 'La opción de titulación es requerida',
        //'titulacion_opciones_id.exists' => 'La opción de titulación seleccionada no existe',

        //'nombre_proyecto.required' => 'El nombre del proyecto es requerido',
        //'nombre_proyecto.string' => 'El nombre del proyecto debe ser una cadena de texto',
        //'nombre_proyecto.max' => 'El nombre del proyecto no debe exceder los 255 caracteres',
    ];
    }
}
