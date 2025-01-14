<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlanEstudiosTitulacionOpcionRequest extends FormRequest
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
            'plan_estudios_id' => 'sometimes|integer|exists:plan_estudios,id',
            'titulacion_opcion_id' => 'sometimes|integer|exists:titulacion_opciones,id',
        ];
    }
}
