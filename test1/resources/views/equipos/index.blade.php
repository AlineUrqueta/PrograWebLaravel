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
                        <th>Nombre</th>
                        <th>Entrenador</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle">1</td>
                        <td class="align-middle">Lorem Ipsums</td>
                        <td class="align-middle">Jewell Sein</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-danger pb-0" data-bs-toggle="tooltip"
                                data-bs-title="Borrar Equipo">
                                <span class="material-icons">delete</span>
                            </a>
                            <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                data-bs-title="Editar Equipo">
                                <span class="material-icons">edit</span>
                            </a>
                            <a href="#" class="btn btn-sm btn-info pb-0 text-white" data-bs-toggle="tooltip"
                                data-bs-title="Ver Equipo">
                                <span class="material-icons">group</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">2</td>
                        <td class="align-middle">Lorem Ipsums</td>
                        <td class="align-middle">Jewell Sein</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-danger pb-0" data-bs-toggle="tooltip"
                                data-bs-title="Borrar Equipo">
                                <span class="material-icons">delete</span>
                            </a>
                            <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                data-bs-title="Editar Equipo">
                                <span class="material-icons">edit</span>
                            </a>
                            <a href="#" class="btn btn-sm btn-info pb-0 text-white" data-bs-toggle="tooltip"
                                data-bs-title="Ver Equipo">
                                <span class="material-icons">group</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- form agregar equipo -->
        <div class="col-12 col-lg-4 order-first order-lg-last">
            <div class="card">
                <div class="card-header bg-dark text-white">Agregar Equipo</div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" id="nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="entrenador" class="form-label">Entrenador</label>
                            <input type="text" id="entrenador" class="form-control">
                        </div>
                        <div class="mb-3 d-grid gap-2 d-lg-block">
                            <button class="btn btn-warning">Cancelar</button>
                            <button class="btn btn-success">Agregar Equipo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection