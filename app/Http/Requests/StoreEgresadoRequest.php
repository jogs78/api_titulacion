<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEgresadoRequest extends FormRequest
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

                'nombre' => 'required|string|max:255',
                'apellido_paterno' => 'required|string|max:255',
                'apellido_materno' => 'nullable|string|max:255',
                'numero_control' => 'required|string|max:20|unique:egresados,numero_control',
                'correo' => 'required|email|max:255|unique:egresados,correo',
                'telefono' => 'nullable|string|max:15',
                'carrera_id' => 'required|integer|exists:carreras,id',
                'plan_estudio_id' => 'required|integer|exists:planes_estudio,id',
        ];
    }
}
