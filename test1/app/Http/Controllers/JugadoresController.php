<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;
use App\Models\Equipo;
use Illuminate\Support\Facades\Storage; // Sirve para el Storage::delete
use App\Http\Requests\JugadoresRequest;

class JugadoresController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $jugadores = Jugador::all();
        $equipos = Equipo::all();
        return view('jugadores.index',compact('jugadores','equipos'));
    }

    public function store(JugadoresRequest $request){
        $jugador = new Jugador();
        $jugador -> nombre = $request->nombre;
        $jugador -> apellido = $request->apellido;
        $jugador -> posicion = $request->posicion;
        $jugador -> numero = $request->numero;
        $jugador -> imagen = $request->imagen->store('public/jugadores');
        $jugador -> equipo_id = $request->equipo;
        $jugador -> save();
        return redirect()->route('jugadores.index');
    }

    public function edit(Jugador $jugador){
        $equipos = Equipo::all();
        return view('jugadores.edit',compact('jugador','equipos'));
    }

    public function update(JUgador $jugador,Request $request){
        $jugador -> nombre = $request->nombre;
        $jugador -> apellido = $request->apellido;
        $jugador -> posicion = $request->posicion;
        $jugador -> numero = $request->numero;
        $jugador -> equipo_id = $request->equipo;
        if(isset($request->imagen)){
            //Borrar la imagen actual
            Storage::delete($jugador->imagen);
            //Subir la nueva imagen
            $jugador -> imagen = $request->imagen->store('public/jugadores');
        }
        $jugador -> save();
        return redirect()->route('jugadores.index');
    }
        

  
}
