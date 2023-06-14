<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Http\Requests\EquipoRequest;

class EquiposController extends Controller
{
    public function index(){
        $equipos = Equipo::all();
        return view('equipos.index',compact('equipos'));
    }

    //public function store(){
        //dd('store'); //Muestra un mensaje en el localhost8000
    //}

    public function store(EquipoRequest $request){
        //dd($request->nombre);
        $equipo = new Equipo();
        $equipo ->nombre = $request->nombre;
        $equipo ->entrenador = $request->entrenador;
        $equipo ->save(); // Guarda en la BD
        return redirect()->route('equipos.index'); // Redirige a equipos.
    }

    public function destroy(Equipo $equipo){
        $equipo->delete();
        return redirect()->route('equipos.index');
    }

    public function show(Equipo $equipo){
        return view('equipos.show',compact('equipo'));
    }



    
}
