<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEspecialidadPlanEstudioRequest extends FormRequest
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
            'especialidad_id' => 'sometimes|integer|exists:especialidades,id',
            'plan_estudio_id' => 'sometimes|integer|exists:plan_estudios,id',
        ];
    }

    public function messages()
    {
        return [
            'especialidad_id.integer' => 'El ID de la especialidad debe ser un número entero',
            'especialidad_id.exists' => 'La especialidad no existe',

            'plan_estudio_id.integer' => 'El ID del plan de estudios debe ser un número entero',
            'plan_estudio_id.exists' => 'El plan de estudios no existe',
    ];
    }

}
