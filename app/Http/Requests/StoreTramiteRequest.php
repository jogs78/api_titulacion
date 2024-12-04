<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTramiteRequest extends FormRequest
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
            'egresado_id' => 'required|exists:egresados,id',
            'titulacion_opciones_id' => 'required|exists:titulacion_opciones,id',
            'nombre_proyecto' => 'required|string|max:255',
            'liberacion' => 'required|in:aceptado,rechazado,pendiente',
            'status' => 'required|in:iniciado,rechazado,pendiente',
            'paso' => 'required|in:iniciado,rechazado,pendiente',
            'observaciones' => 'nullable|string',
            'pago' => 'required|in:aceptado,pendiente',
            'comite_id' => 'required|exists:comites,id',
            'acto_id' => 'required|exists:actos,id',
        ];
    }
}
