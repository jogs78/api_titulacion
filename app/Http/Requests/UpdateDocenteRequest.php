<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDocenteRequest extends FormRequest
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
            'nombre' => 'sometimes|string|max:255',
                'apellido_paterno' => 'sometimes|string|max:255',
                'apellido_materno' => 'sometimes|string|max:255',
                'cedula_profesional' => 'sometimes|string|max:20|unique:docentes,cedula_profesional',
                'correo' => 'sometimes|string|email|max:255|unique:docentes,correo',
                'profesion' => 'nullable|string|max:255',
        ];
    }
}
