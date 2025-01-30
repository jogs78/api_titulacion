<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOpcionRequisitoRequest extends FormRequest
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
            'opcion_titulacion_id' => 'sometimes|integer|exists:opciones_titulacion,id',
            'documento_requerido' => 'sometimes|string|max:255',
            'descripcion' => 'sometimes|nullable|string|max:500',
            'tipo' => 'sometimes|string|in:PDF,Imagen,Fotografia', // Valida los tipos permitidos
        ];
    }

    public function messages()
    {
        return [
            'opcion_titulacion_id.integer' => 'El ID de la opción de titulación debe ser un número entero',
            'opcion_titulacion_id.exists' => 'La opción de titulación no existe',

            'documento_requerido.string' => 'El documento requerido debe ser una cadena de texto',
            'documento_requerido.max' => 'El documento requerido no debe exceder los 255 caracteres',

            'descripcion.string' => 'La descripción debe ser una cadena de texto',
            'descripcion.max' => 'La descripción no debe exceder los 500 caracteres',

            'tipo.string' => 'El tipo debe ser una cadena de texto',
            'tipo.in' => 'El tipo debe ser uno de los siguientes valores: PDF, Imagen, Fotografía',
    ];
    }

}
