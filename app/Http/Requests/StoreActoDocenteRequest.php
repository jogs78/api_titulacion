<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreActoDocenteRequest extends FormRequest
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
            'acto_id' => ['required', 'exists:actos,id'],
            'docente_id' => ['required', 'exists:docentes,id'],
            'sinodal' => ['required', 'in:presidente,secretario,suplente'],
        ];
    }

    public function messages()
    {
    return [
        'acto_id.required' => 'El acto es requerido',
        'acto_id.exists' => 'El acto seleccionado no existe',

        'docente_id.required' => 'El docente es requerido',
        'docente_id.exists' => 'El docente seleccionado no existe',

        'sinodal.required' => 'El rol de sinodal es requerido',
        'sinodal.in' => 'El rol de sinodal debe ser presidente, secretario o suplente',
    ];
    }
}
