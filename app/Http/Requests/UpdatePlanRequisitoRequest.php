<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlanRequisitoRequest extends FormRequest
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
            'plan_estudio_id' => 'sometimes|integer|exists:plan_estudios,id',
            'documento_requerido' => 'sometimes|string|max:255',
            'descripcion' => 'sometimes|nullable|string|max:500',
            'tipo' => 'sometimes|string|in:PDF,Imagen,Fotografia',
        ];
    }
}
