<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreActoRequest extends FormRequest
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
            'modalidad' => 'required|string|max:256',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'lugar' => 'required|string|max:256',
        ];
    }

    public function messages()
    {
    return [
        'modalidad.required' => 'La modalidad es requerida',
        'modalidad.string' => 'La modalidad debe ser una cadena de texto',
        'modalidad.max' => 'La modalidad no debe exceder los 256 caracteres',

        'fecha.required' => 'La fecha es requerida',
        'fecha.date' => 'La fecha debe ser una fecha válida',

        'hora.required' => 'La hora es requerida',
        'hora.date_format' => 'La hora debe tener el formato HH:MM',

        'lugar.required' => 'El lugar es requerido',
        'lugar.string' => 'El lugar debe ser una cadena de texto',
        'lugar.max' => 'El lugar no debe exceder los 256 caracteres',
    ];
    }
}
