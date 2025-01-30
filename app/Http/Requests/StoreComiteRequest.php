<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComiteRequest extends FormRequest
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
            'plan_estudio_id' => ['required', 'exists:plan_estudios,id'],
            'especificacion' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
    return [
        'plan_estudio_id.required' => 'El plan de estudios es requerido',
        'plan_estudio_id.exists' => 'El plan de estudios seleccionado no existe',

        'especificacion.required' => 'La especificación es requerida',
        'especificacion.string' => 'La especificación debe ser una cadena de texto',
        'especificacion.max' => 'La especificación no debe exceder los 255 caracteres',
    ];
    }

}
