<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEgresadoRequest extends FormRequest
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
                'apellido_materno' => 'sometimes|nullable|string|max:255',
                'numero_control' => 'sometimes|string|max:20|unique:egresados,numero_control',
                'correo' => 'sometimes|email|max:255|unique:egresados,correo',
                'telefono' => 'sometimes|nullable|string|max:15',
                'carrera_id' => 'sometimes|integer|exists:carreras,id',
                'plan_estudio_id' => 'sometimes|integer|exists:planes_estudio,id',
        ];
    }
}
