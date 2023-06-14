@extends('layouts.master')
@section('contenido-principal')
<!-- datos -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3>Jugadores </h3>
        </div>
    </div>

    <div class="row">
        <!-- tabla -->
        <div class="col-12 col-lg-8 order-last order-lg-first">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Posicion</th>
                        <th>Numero</th>
                        <th>Equipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $jugadores as $num=>$jugador )
                    <tr>
                        <td class="align-middle">{{$num+1}}</td>
                        <td class="align-middle">{{$jugador->nombre}}</td>
                        <td class="align-middle">{{$jugador->apellido}}</td>
                        <td class="align-middle">{{$jugador->posicion}}</td>
                        <td class="align-middle">{{$jugador->numero}}</td>
                        <td class="align-middle">
                            {{$jugador->equipo!=null?$jugador->equipo->nombre:'Sin Equipo'}}</td>
                            <!-- Condicion verdad ? si es verdadero: si es falso (Operacion Ternaria) -->
                        <td>
                            <a href="#" class="btn btn-sm btn-danger pb-0" data-bs-toggle="tooltip"
                                data-bs-title="Borrar {{$jugador->nombre}}">
                                <span class="material-icons">delete</span>
                            </a>
                            <a href="{{route('jugadores.edit',$jugador->id)}}" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                data-bs-title="Editar {{$jugador->nombre}}">
                                <span class="material-icons">edit</span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/ -->
        
        <div class="col-12 col-lg-4 order-first order-lg-last">
            <div class="card">
                <div class="card-header bg-dark text-white">Agregar Jugadores</div>
                <div class="card-body">
                    <!-- errores -->
                    @if ($errors->any())
                    {{--{{dd($errors->all())}}--}}
                        
                        <div class="alert alert-danger">
                            <p>Por favor solucione los siguientes errores:</p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!--errores-->
                    <form action = "{{route('jugadores.store')}}" method="POST" enctype = "multipart/form-data">
                        @csrf
                        <!-- for, id y name deben tener el mismo nombre. -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>  
                            <input type="text" name ="nombre" id="nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>  
                            <input type="text" name ="apellido" id="apellido" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="posicion">Posición</label>
                            <div>
                                <div class="form-check form-check-inline" >
                                    <input type="radio" class = "form-check-input" id="pos-arquero" name="posicion" value="Arquero" checked> <!--Value va a la base de datos-->
                                    <label class ="form-check-label"for="pos-arquero">Arquero</label>
                                </div>
                                <div class="form-check form-check-inline" >
                                    <input type="radio" class = "form-check-input" id="pos-defensa" name="posicion" value="Defensa"> <!--Value va a la base de datos-->
                                    <label class ="form-check-label"for="pos-defensa">Defensa</label>
                                </div>
                                <div class="form-check form-check-inline" >
                                    <input type="radio" class = "form-check-input" id="pos-delantero" name="posicion" value="Delantero"> <!--Value va a la base de datos-->
                                    <label class ="form-check-label"for="pos-delantero">Delantero</label>
                                </div>
                                <div class="form-check form-check-inline" >
                                    <input type="radio" class = "form-check-input" id="pos-volante" name="posicion" value="Volante"> <!--Value va a la base de datos-->
                                    <label class ="form-check-label"for="pos-volante">Volante</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="numero" class="form-label">Número de Camiseta: </label>
                            <input type="number" name = "numero" id="numero" class="form-control" min = "1" max = "99">
                        </div>

                        <div class="form-group mb-3">
                            <label for="equipo" class="form-label">Equipo</label>
                            <select name="equipo" id="equipo" class = "form-control">
                                @foreach ($equipos as $equipo)
                                    <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="imagen"> Imagen: </label>
                            <input type="file" id= "imagen" name = "imagen" class = "form-control-file">
                        </div>



                        <div class="mb-3 d-grid gap-2 d-lg-block">
                            <button type = "reset" class="btn btn-warning">Cancelar</button>
                            <button type = "submit" class="btn btn-success">Agregar Jugador</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

