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

    @foreach ( $equipo->jugadores as $jugador )
    <div class="col-12 col-md-4 col-lg-2">
        <div class="card" style = "width: 14rem;">
            <img src="{{Storage::url($jugador->imagen)}}" alt="{{$jugador->nombre}} {{$jugador->apellido}}" class ="card-img-top">
            <div class="card-body">
                <h5 class ="card-title">{{$jugador->nombre}} {{$jugador->apellido}}</h5>
                <ul class = "list-group list-group-flush">
                    <li class = "list-group-item">
                        <b>Posicion</b> {{$jugador->posicion}}
                    </li>

                    <li class = "list-group-item">
                        <b>Número</b> {{$jugador->numero}}
                    </li>
                    
                </ul>
            </div>
            
        </div>
    </div>
        
    @endforeach
    
</div>
<div class ="row mt-2">
    <div class="col">
        <a href="{{route('equipos.index')}}" class = "btn btn-info"> Volver a Equipos</a>
    </div>
</div>


@endsection