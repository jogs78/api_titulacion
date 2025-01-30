<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEspecialidadRequest extends FormRequest
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
            'nombre' => 'required|string|max:255|unique:especialidades,nombre',
        ];
    }

    public function messages()
    {
    return [
        'nombre.required' => 'El nombre es requerido',
        'nombre.string' => 'El nombre debe ser una cadena de texto',
        'nombre.max' => 'El nombre no debe exceder los 255 caracteres',
        'nombre.unique' => 'El nombre ya existe en el sistema',
    ];
    }

}
