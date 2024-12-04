<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTramiteRequest extends FormRequest
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
            'egresado_id' => 'sometimes|exists:egresados,id',
            'titulacion_opciones_id' => 'sometimes|exists:titulacion_opciones,id',
            'nombre_proyecto' => 'sometimes|string|max:255',
            'liberacion' => 'sometimes|in:aceptado,rechazado,pendiente',
            'status' => 'sometimes|in:iniciado,rechazado,pendiente',
            'paso' => 'sometimes|in:iniciado,rechazado,pendiente',
            'observaciones' => 'nullable|string',
            'pago' => 'sometimes|in:aceptado,pendiente',
            'comite_id' => 'sometimes|exists:comites,id',
            'acto_id' => 'sometimes|exists:actos,id',
        ];
    }
}
