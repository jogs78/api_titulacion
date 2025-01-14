<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUsuarioRequest extends FormRequest
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
            'actual_type' => [
                'required',
                Rule::in(['Egresado', 'Docente', 'Administrativo']),
                function ($attribute, $value, $fail) {
                    if ($value === 'Egresado' && !\App\Models\Egresado::find($this->input('actual_id'))) {
                        $fail('The selected actual_id is invalid for Egresado.');
                    } elseif ($value === 'Docente' && !\App\Models\Docente::find($this->input('actual_id'))) {
                        $fail('The selected actual_id is invalid for Docente.');
                    } elseif ($value === 'Administrativo' && !\App\Models\Administrativo::find($this->input('actual_id'))) {
                        $fail('The selected actual_id is invalid for Administrativo.');
                    }
                },
            ],
            'actual_id' => 'required|integer',
            'titulacion_opciones_id' => 'required|exists:titulacion_opciones,id',
            'nombre_proyecto' => 'required|string|max:255',
            'liberacion' => 'required|in:aceptado,rechazado,pendiente',
            'status' => 'required|in:iniciado,rechazado,pendiente',
            'paso' => 'required|in:iniciado,rechazado,pendiente',
            'observaciones' => 'nullable|string',
            'pago' => 'required|in:aceptado,pendiente',
            'comite_id' => 'required|exists:comites,id',
            'acto_id' => 'required|exists:actos,id',
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'actual_type' => $this->input('actual_type', 'Egresado'),
        ]);
    }
}
