<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOpcionRequisitoRequest extends FormRequest
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
                'opcion_titulacion_id' => 'required|integer|exists:opciones_titulacion,id',
                'documento_requerido' => 'required|string|max:255',
                'descripcion' => 'nullable|string|max:500',
                'tipo' => 'required|string|in:PDF,Imagen,Fotografia', // Valida los tipos permitidos
        ];
    }
}
