<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComiteDocenteRequest extends FormRequest
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
            'comite_id' => ['required', 'exists:comites,id'],
            'docente_id' => ['required', 'exists:docentes,id'],
            'cargo' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
    return [
        'comite_id.required' => 'El comité es requerido',
        'comite_id.exists' => 'El comité seleccionado no existe',

        'docente_id.required' => 'El docente es requerido',
        'docente_id.exists' => 'El docente seleccionado no existe',

        'cargo.required' => 'El cargo es requerido',
        'cargo.string' => 'El cargo debe ser una cadena de texto',
        'cargo.max' => 'El cargo no debe exceder los 255 caracteres',
    ];
    }

}
