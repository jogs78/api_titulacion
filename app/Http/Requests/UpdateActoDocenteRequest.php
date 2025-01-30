<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateActoDocenteRequest extends FormRequest
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
            'acto_id' => ['sometimes', 'exists:actos,id'],
            'docente_id' => ['sometimes', 'exists:docentes,id'],
            'sinodal' => ['sometimes', 'in:presidente,secretario,suplente'],
        ];
    }

    public function messages()
    {
        return [
            'acto_id.exists' => 'El acto seleccionado no existe',

            'docente_id.exists' => 'El docente seleccionado no existe',

            'sinodal.in' => 'El sinodal debe ser uno de los siguientes valores: presidente, secretario, suplente',
    ];
    }

}
