<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDocumentoSolicitudRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // dd($request->all()); // Ver qué datos recibe Laravel
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
             'archivo' => 'required|file|mimes:pdf|max:5120', // 5mb
        ];
    }

    public function messages()
    {
        return [
            'archivo.required' => 'El archivo es obligatorio.',
            'archivo.file' => 'El archivo debe ser un archivo válido.',
            'archivo.mimes' => 'El archivo debe ser de tipo PDF.',
            'archivo.max' => 'El archivo no debe ser mayor a 5 MB.',
        ];
    }

}
