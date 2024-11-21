<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlanEstudioRequest extends FormRequest
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

            'fecha_inicio' => ['required', 'date', 'date_format:Y-m-d'],
            'numero_creditos' => ['required', 'integer'],
            'especialidad_id' => ['required', 'integer', 'exists:especialidades,id'],
        ];
    }

    public function messages()
    {
        return [
            'fecha_inicio.required' => 'La fecha de inicio es requerida',
            'fecha_inicio.date' => 'La fecha de inicio debe ser una fecha',
            'fecha_inicio.date_format' => 'La fecha de inicio debe tener el formato YYYY-MM-DD',
            'numero_creditos.required' => 'El número de créditos es requerido',
            'numero_creditos.integer' => 'El número de créditos debe ser un número entero',
            'especialidad_id.required' => 'La especialidad es requerida',
            'especialidad_id.integer' => 'La especialidad debe ser un número entero',
            'especialidad_id.exists' => 'La especialidad no existe',
        ];
    }
}
