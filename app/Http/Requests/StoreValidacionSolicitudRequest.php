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
}
