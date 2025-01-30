<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlanEstudiosTitulacionOpcionRequest extends FormRequest
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
            'plan_estudios_id' => 'required|integer|exists:plan_estudios,id',
            'titulacion_opcion_id' => 'required|integer|exists:titulacion_opciones,id',
        ];
    }

    public function messages()
    {
    return [
        'plan_estudios_id.required' => 'El plan de estudios es requerido',
        'plan_estudios_id.integer' => 'El plan de estudios debe ser un número entero',
        'plan_estudios_id.exists' => 'El plan de estudios seleccionado no existe',

        'titulacion_opcion_id.required' => 'La opción de titulación es requerida',
        'titulacion_opcion_id.integer' => 'La opción de titulación debe ser un número entero',
        'titulacion_opcion_id.exists' => 'La opción de titulación seleccionada no existe',
    ];
    }

}
