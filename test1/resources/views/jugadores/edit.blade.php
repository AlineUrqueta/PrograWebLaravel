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
            <div class="card">
                <div class="card-header">Formulario</div>
                <div class="card-body">
                    <form action="{{route('jugadores.update',$jugador->id)}}" method="POST" enctype = "multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>  
                            <input type="text" name ="nombre" id="nombre" class="form-control" value ="{{$jugador->nombre}}">
                        </div>

                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>  
                            <input type="text" name ="apellido" id="apellido" class="form-control" value="{{$jugador->apellido}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="posicion">Posición</label>
                            <div>
                                <div class="form-check form-check-inline" >
                                    <input type="radio" class = "form-check-input" id="pos-arquero" name="posicion" value="Arquero" @if($jugador->posicion=='Arquero') checked @endif> <!--Value va a la base de datos-->
                                    <label class ="form-check-label"for="pos-arquero">Arquero</label>
                                </div>
                                <div class="form-check form-check-inline" >
                                    <input type="radio" class = "form-check-input" id="pos-defensa" name="posicion" value="Defensa" @if($jugador->posicion=='Defensa') checked @endif> <!--Value va a la base de datos-->
                                    <label class ="form-check-label"for="pos-defensa">Defensa</label>
                                </div>
                                <div class="form-check form-check-inline" >
                                    <input type="radio" class = "form-check-input" id="pos-delantero" name="posicion" value="Delantero" @if($jugador->posicion=='Delantero') checked @endif> <!--Value va a la base de datos-->
                                    <label class ="form-check-label"for="pos-delantero">Delantero</label>
                                </div>
                                <div class="form-check form-check-inline" >
                                    <input type="radio" class = "form-check-input" id="pos-volante" name="posicion" value="Volante" @if($jugador->posicion=='Volante') checked @endif> <!--Value va a la base de datos-->
                                    <label class ="form-check-label"for="pos-volante">Volante</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="numero" class="form-label">Número de Camiseta: </label>
                            <input type="number" name = "numero" id="numero" class="form-control" min = "1" max = "99" value="{{$jugador->numero}}" >
                        </div>

                        <div class="form-group mb-3">
                            <label for="equipo" class="form-label">Equipo</label>
                            <select name="equipo" id="equipo" class = "form-control">
                                @foreach ($equipos as $equipo)
                                    <option value="{{$equipo->id}}" @if ($jugador->equipo_id==$equipo->id) selected = "selected" @endif>{{$equipo->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="imagen"> Imagen: </label>
                            <input type="file" id= "imagen" name = "imagen" class = "form-control">
                        </div>

                        <div class="mb-3 d-grid gap-2 d-lg-block">
                            <button type = "reset" class="btn btn-warning">Cancelar</button>
                            <button type = "submit" class="btn btn-success">Editar Jugador</button>
                        </div>

                        

                    </form>
                </div>
            </div>
        </div>
        <!-- Datos Jugador -->        
        <div class="col-2">
            <!-- Datos Jugador -->        
        </div>
    </div>


@endsection