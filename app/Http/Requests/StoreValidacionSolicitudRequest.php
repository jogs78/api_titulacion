<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreValidacionSolicitudRequest extends FormRequest
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
            'ruta' => 'required|string|max:255',
            'validacion' => 'required|string|in:pendiente,aceptado,rechazado',
            'documento_solicitud_id' => 'required|integer|exists:documento_solicitudes,id',
            'egresado_id' => 'required|integer|exists:egresados,id',
        ];
    }

    public function messages()
    {
        return [
            'ruta.required' => 'La ruta es requerida',
            'ruta.string' => 'La ruta debe ser una cadena de texto',
            'ruta.max' => 'La ruta no debe exceder los 255 caracteres',

            'validacion.required' => 'El estado de validación es requerido',
            'validacion.string' => 'El estado de validación debe ser una cadena de texto',
            'validacion.in' => 'El estado de validación debe ser uno de los siguientes: pendiente, aceptado, rechazado',

            'documento_solicitud_id.required' => 'El documento de solicitud es requerido',
            'documento_solicitud_id.integer' => 'El documento de solicitud debe ser un número entero',
            'documento_solicitud_id.exists' => 'El documento de solicitud seleccionado no existe',

            'egresado_id.required' => 'El egresado es requerido',
            'egresado_id.integer' => 'El egresado debe ser un número entero',
            'egresado_id.exists' => 'El egresado seleccionado no existe',
    ];
    }

}
