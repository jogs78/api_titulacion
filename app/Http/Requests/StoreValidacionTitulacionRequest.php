<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreValidacionTitulacionRequest extends FormRequest
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
            'documento_titulacion_id' => 'required|integer|exists:documento_titulaciones,id',
            'motivo' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [

            'documento_solicitud_id.required' => 'El documento de solicitud es requerido',
            'documento_solicitud_id.integer' => 'El documento de solicitud debe ser un número entero',
            'documento_titulacion_id.exists' => 'El documento de titulación seleccionado no existe',

            'motivo.required' => 'El motivo es requerido',
            'motivo.string' => 'El motivo debe ser una cadena de texto',
            'motivo.max' => 'El motivo no debe exceder los 255 caracteres',

    ];
    }

}
