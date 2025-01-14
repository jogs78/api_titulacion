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
}
