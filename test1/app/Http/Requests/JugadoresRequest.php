<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JugadoresRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre'=> 'required',
            'apellido'=> 'required',
            'posicion'=> 'required',
            'numero'=> 'required',
            'equipo'=> 'required',
            'imagen'=> 'required'
        ];


    }
    public function messages(){
        return [
            'nombre.required'=> 'Indique el nombre',
            'apellido.required'=> 'Indique el apellido',
            'posicion.required'=> 'Indique la posicion',
            'numero.required'=> 'Indique el numero',
            'equipo.required'=> 'Indique el equipo',
            'imagen.required'=> 'Imagen no adjuntada'

        ];
    }
}
