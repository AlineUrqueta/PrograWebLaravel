<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;
use App\Models\Equipo;

class JugadoresController extends Controller
{
    public function index(){
        $jugadores = Jugador::all();
        $equipos = Equipo::all();
        return view('jugadores.index',compact('jugadores','equipos'));
    }

    public function store(Request $request){
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
        return view('jugadores.edit',compact('jugador'));
    }


  
}
