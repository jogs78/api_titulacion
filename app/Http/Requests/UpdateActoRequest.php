<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateActoRequest extends FormRequest
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
            'modalidad' => 'sometimes|string|max:256',
            'fecha' => 'sometimes|date',
            'hora' => 'sometimes|date_format:H:i',
            'lugar' => 'sometimes|string|max:256',
        ];
    }

    public function messages()
    {
        return [
            'modalidad.string' => 'La modalidad debe ser una cadena de texto',
            'modalidad.max' => 'La modalidad no debe exceder los 256 caracteres',

            'fecha.date' => 'La fecha debe ser una fecha válida',

            'hora.date_format' => 'La hora debe tener el formato HH:mm',

            'lugar.string' => 'El lugar debe ser una cadena de texto',
            'lugar.max' => 'El lugar no debe exceder los 256 caracteres',
    ];
    }

}
