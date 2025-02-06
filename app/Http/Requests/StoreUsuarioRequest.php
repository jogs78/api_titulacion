<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUsuarioRequest extends FormRequest
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
                'actual_type' => 'required|string|max:255',
                'actual_id' => 'required|integer|exists:egresados,id',
                'nombre_usuario' => 'required|string|max:255|unique:usuarios,nombre_usuario',
                'contraseña' => 'required|string|min:8',
        ];
    }

    public function messages()
    {
    return [
            'actual_type.required' => 'El campo tipo de usuario es obligatorio.',
            'actual_type.string' => 'El campo tipo de usuario debe ser una cadena de texto.',
            'actual_type.max' => 'El campo tipo de usuario no debe exceder los 255 caracteres.',

            'actual_id.required' => 'El campo ID de usuario es obligatorio.',
            'actual_id.integer' => 'El campo ID de usuario debe ser un número entero.',
            'actual_id.exists' => 'El ID de usuario proporcionado no existe en la base de datos.',

            'nombre_usuario.required' => 'El campo nombre de usuario es obligatorio.',
            'nombre_usuario.string' => 'El campo nombre de usuario debe ser una cadena de texto.',
            'nombre_usuario.max' => 'El campo nombre de usuario no debe exceder los 255 caracteres.',
            'nombre_usuario.unique' => 'El nombre de usuario ya está en uso.',

            'contraseña.required' => 'El campo contraseña es obligatorio.',
            'contraseña.string' => 'El campo contraseña debe ser una cadena de texto.',
            'contraseña.min' => 'El campo contraseña debe tener al menos 8 caracteres.',
    ];
    }

}
