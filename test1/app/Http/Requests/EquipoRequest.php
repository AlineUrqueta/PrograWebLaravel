<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoRequest extends FormRequest
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
            'nombre' => 'required|min:3|max:20|unique:equipos,nombre',
            'entrenador'=> 'required|min:3|max:20'
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'Indique el nombre del equipo',
            'nombre.min'=>'Nombre de equipo debe tener como minimo 3 letras',
            'nombre.max'=>'Nombre de equipo debe tener como maximo 20 letras',
            'nombre.unique'=>'Nombre ya registrado con el nombre :input ', // muestra el nombre del campo en pantalla
            
            'entrenador.required'=> 'Indique el entrenador',
            'entrenador.min'=>'Nombre del entrenador debe tener como minimo 3 letras',
            'entreandor.max'=>'Nombre del entrenador debe tener como maximo 20 letras'
        ];
    }


}
