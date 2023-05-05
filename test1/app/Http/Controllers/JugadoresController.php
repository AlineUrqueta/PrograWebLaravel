<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;

class JugadoresController extends Controller
{
    public function index(){
        $jugadores = Jugador::all();
        return view('jugadores.index',compact('jugadores'));
    }
}
