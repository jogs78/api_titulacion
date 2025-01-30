<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'actual_type' => 'required|exists:egresados,id',
            'titulacion_opciones_id' => 'required|exists:titulacion_opciones,id',
            'nombre_proyecto' => 'required|string|max:255',
            #'liberacion' => 'required|in:aceptado,rechazado,pendiente',
            #'status' => 'required|in:iniciado,rechazado,pendiente',
            #'paso' => 'required|in:iniciado,rechazado,pendiente',
            #'observaciones' => 'nullable|string',
            #'pago' => 'required|in:aceptado,pendiente',
            #'comite_id' => 'required|exists:comites,id',
            #'acto_id' => 'required|exists:actos,id',
        ];
    }

    public function messages()
    {
    return [
        'actual_type.required' => 'El tipo actual es requerido',
        'actual_type.exists' => 'El tipo actual seleccionado no existe',

        'titulacion_opciones_id.required' => 'La opción de titulación es requerida',
        'titulacion_opciones_id.exists' => 'La opción de titulación seleccionada no existe',

        'nombre_proyecto.required' => 'El nombre del proyecto es requerido',
        'nombre_proyecto.string' => 'El nombre del proyecto debe ser una cadena de texto',
        'nombre_proyecto.max' => 'El nombre del proyecto no debe exceder los 255 caracteres',

        // Descomentando las reglas si son necesarias
        // 'liberacion.required' => 'El estado de liberación es requerido',
        // 'liberacion.in' => 'El estado de liberación debe ser uno de los siguientes: aceptado, rechazado, pendiente',

        // 'status.required' => 'El estado es requerido',
        // 'status.in' => 'El estado debe ser uno de los siguientes: iniciado, rechazado, pendiente',

        // 'paso.required' => 'El paso es requerido',
        // 'paso.in' => 'El paso debe ser uno de los siguientes: iniciado, rechazado, pendiente',

        // 'observaciones.string' => 'Las observaciones deben ser una cadena de texto',

        // 'pago.required' => 'El estado del pago es requerido',
        // 'pago.in' => 'El estado del pago debe ser uno de los siguientes: aceptado, pendiente',

        // 'comite_id.required' => 'El comité es requerido',
        // 'comite_id.exists' => 'El comité seleccionado no existe',

        // 'acto_id.required' => 'El acto es requerido',
        // 'acto_id.exists' => 'El acto seleccionado no existe',
    ];
    }

}
