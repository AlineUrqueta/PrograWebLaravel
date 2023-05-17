@extends('layouts.master')
@section('contenido-principal')
    <h3>Editar Jugador {{$jugador->equipo != null? $jugador->equipo->nombre:'Sin Equipo'}}</h3>
    <div class="row">
        <div class="col-2">
            <!-- Datos Jugador -->
            <div class="card" style = "width: 14rem;">
                <div class="card-header">Jugador</div>
                <img src="{{Storage::url($jugador->imagen)}}" alt="{{$jugador->nombre}} {{$jugador->apellido}}" class="card-img-top" >
                <ul class="list-group list-group-flush">
                    <li class="list-group-items"><b>Nombre:</b> {{$jugador->nombre}} {{$jugador->apellido}}</li>
                    <li class="list-group-items"><b>Posicion:</b>{{$jugador->posicion}}</li>
                    <li class="list-group-items"><b>Número:</b> {{$jugador->numero}}</li>
                </ul>
            </div>
        </div>
        <!-- Datos Jugador -->

        <!-- Form Edicion -->        
        <div class="col-6">
            
        </div>
        <!-- Datos Jugador -->        
        <div class="col-2">
            <!-- Datos Jugador -->        
        </div>
    </div>


@endsection