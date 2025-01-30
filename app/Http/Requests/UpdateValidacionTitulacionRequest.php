<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateValidacionTitulacionRequest extends FormRequest
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
            'documento_titulacion_id' => 'sometimes|integer|exists:documento_titulaciones,id',
            'motivo' => 'sometimes|string|max:255',
        ];
    }

    public function messages()
    {
     return [
            'documento_titulacion_id.sometimes' => 'El documento de titulación es opcional',
            'documento_titulacion_id.integer' => 'El documento de titulación debe ser un número entero',
            'documento_titulacion_id.exists' => 'El documento de titulación no existe',

            'motivo.sometimes' => 'El motivo es opcional',
            'motivo.string' => 'El motivo debe ser una cadena de texto',
            'motivo.max' => 'El motivo no puede exceder los 255 caracteres',
    ];
    }

}
