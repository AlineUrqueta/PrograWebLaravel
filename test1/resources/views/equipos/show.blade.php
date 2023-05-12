@extends('layouts.master')
@section('contenido-principal')
<h3>Jugadores {{$equipo->nombre}}</h3>

<div class ="row">
    @if(count($equipo->jugadores)==0)
    <div class="col">
        <div class="alert alert-info">
            Este equipo no tiene jugadores registrados.
        </div>
    </div>
    @endif
    
</div>
<div class ="row">
    <div class="col">
        <a href="{{route('equipos.index')}}" class = "btn btn-info"> Volver a Equipos</a>
    </div>
</div>


@endsection