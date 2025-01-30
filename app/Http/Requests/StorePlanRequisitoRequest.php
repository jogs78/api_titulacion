<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlanRequisitoRequest extends FormRequest
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
            'plan_estudio_id' => 'required|integer|exists:plan_estudios,id',
            'documento_requerido' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:500',
            'tipo' => 'required|string|in:PDF,Imagen,Fotografia',
        ];
    }

    public function messages()
    {
    return [
        'plan_estudio_id.required' => 'El plan de estudios es requerido',
        'plan_estudio_id.integer' => 'El plan de estudios debe ser un número entero',
        'plan_estudio_id.exists' => 'El plan de estudios seleccionado no existe',

        'documento_requerido.required' => 'El documento requerido es obligatorio',
        'documento_requerido.string' => 'El documento requerido debe ser una cadena de texto',
        'documento_requerido.max' => 'El documento requerido no debe exceder los 255 caracteres',

        'descripcion.string' => 'La descripción debe ser una cadena de texto',
        'descripcion.max' => 'La descripción no debe exceder los 500 caracteres',

        'tipo.required' => 'El tipo de archivo es requerido',
        'tipo.string' => 'El tipo de archivo debe ser una cadena de texto',
        'tipo.in' => 'El tipo de archivo debe ser uno de los siguientes: PDF, Imagen, Fotografía',
    ];
    }

}
