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
}
