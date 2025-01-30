<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateValidacionSolicitudRequest extends FormRequest
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
            'ruta' => 'sometimes|string|max:255',
            'validacion' => 'sometimes|string|in:pendiente,aceptado,rechazado',
            'documento_solicitud_id' => 'sometimes|integer|exists:documento_solicitudes,id',
            'egresado_id' => 'sometimes|integer|exists:egresados,id',
        ];
    }

    public function messages()
    {
        return [
            'ruta.sometimes' => 'La ruta es opcional',
            'ruta.string' => 'La ruta debe ser una cadena de texto',
            'ruta.max' => 'La ruta no puede exceder los 255 caracteres',

            'validacion.sometimes' => 'La validación es opcional',
            'validacion.string' => 'La validación debe ser una cadena de texto',
            'validacion.in' => 'La validación debe ser uno de los siguientes valores: pendiente, aceptado, rechazado',

            'documento_solicitud_id.sometimes' => 'El documento solicitud ID es opcional',
            'documento_solicitud_id.integer' => 'El documento solicitud ID debe ser un número entero',
            'documento_solicitud_id.exists' => 'El documento solicitud no existe',

            'egresado_id.sometimes' => 'El egresado ID es opcional',
            'egresado_id.integer' => 'El egresado ID debe ser un número entero',
            'egresado_id.exists' => 'El egresado no existe',
    ];
    }

}
