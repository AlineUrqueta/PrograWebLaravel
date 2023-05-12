@extends('layouts.master')
@section('contenido-principal')
<!-- datos -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3>Equipos</h3>
        </div>
    </div>

    <div class="row">
        <!-- tabla -->
        <div class="col-12 col-lg-8 order-last order-lg-first">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th class = "text-center">Nombre</th>
                        <th class = "text-center">Entrenador</th>
                        <th colspan = "3" class = "text-center">Acciones</th>
                        
                    </tr>

                </thead>
                <tbody>
                    @foreach ( $equipos as $equipo )
                    <tr>
                        <td class="align-middle">{{$equipo->id}}</td>
                        <td class="align-middle">{{$equipo->nombre}}</td>
                        <td class="align-middle">{{$equipo->entrenador}}</td>
                        <td class ="text-center" style = "width:1rem;">
                            <!-- Borrar -->
                            <span data-bs-toggle="tooltip" data-bs-title="Borrar {{$equipo->nombre}}">
                                <button type="button" class="btn btn-sm btn-danger pb-0" data-bs-toggle="modal" data-bs-target="#equipoBorrarModel{{$equipo->id}}">
                                    <span class="material-icons">delete</span>
                                </button>
                            </span>

                            <div class="modal fade" id="equipoBorrarModel{{$equipo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Equipo</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      ¿Desea eliminar el equipo {{$equipo->nombre}}?
                                    </div>
                                    <div class="modal-footer">
                            
                                        <form method="POST" action = "{{route('equipos.destroy',$equipo->id)}}" >
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-danger">Borrar Equipo</button>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            {{--<form method="POST" action = "{{route('equipos.destroy',$equipo->id)}}" >
                                @csrf
                                @method('delete')
                                <button type = "submit" class="btn btn-sm btn-danger pb-0" data-bs-toggle="tooltip"
                                data-bs-title="Borrar {{$equipo->nombre}}">
                                <span class="material-icons">delete</span></button>
                            </form>--}}
                            
                        </td>
                        <td class ="text-center" style = "width:1rem;">
                            <!-- Editar-->
                            <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                data-bs-title="Editar {{$equipo->nombre}}">
                                <span class="material-icons">edit</span>
                            </a>
                        </td>
                        <td class ="text-center" style = "width:1rem;">
                            <!--Group?-->
                            <a href="{{route('equipos.show',$equipo->id)}}" class="btn btn-sm btn-info pb-0 text-white" data-bs-toggle="tooltip"
                                data-bs-title="Ver {{$equipo->nombre}}">
                                <span class="material-icons">group</span>
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
                <div class="card-header bg-dark text-white">Agregar Equipo</div>
                <div class="card-body">
                    <form action = "{{route('equipos.store')}}" method="POST">
                        @csrf
                        <!-- for, id y name deben tener el mismo nombre. -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>  
                            <input type="text" name ="nombre" id="nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="entrenador" class="form-label">Entrenador</label>
                            <input type="text" name = "entrenador" id="entrenador" class="form-control">
                        </div>
                        <div class="mb-3 d-grid gap-2 d-lg-block">
                            <button type = "reset" class="btn btn-warning">Cancelar</button>
                            <button type = "submit" class="btn btn-success">Agregar Equipo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection