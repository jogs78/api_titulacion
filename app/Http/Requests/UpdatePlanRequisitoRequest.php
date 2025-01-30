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

    public function messages()
    {
        return [
            'plan_estudio_id.sometimes' => 'El plan de estudio es opcional',
            'plan_estudio_id.integer' => 'El plan de estudio debe ser un número entero',
            'plan_estudio_id.exists' => 'El plan de estudio no existe',

            'documento_requerido.sometimes' => 'El documento requerido es opcional',
            'documento_requerido.string' => 'El documento requerido debe ser una cadena de texto',
            'documento_requerido.max' => 'El documento requerido no puede exceder los 255 caracteres',

            'descripcion.sometimes' => 'La descripción es opcional',
            'descripcion.string' => 'La descripción debe ser una cadena de texto',
            'descripcion.max' => 'La descripción no puede exceder los 500 caracteres',

            'tipo.sometimes' => 'El tipo es opcional',
            'tipo.string' => 'El tipo debe ser una cadena de texto',
            'tipo.in' => 'El tipo debe ser uno de los siguientes: PDF, Imagen, Fotografía',
    ];
    }

}
