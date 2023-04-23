@extends('layout/plantilla')

@section('tituloPagina', 'Crud con Laravel 8')

@section('contenido')

    <div class="card">
        <h5 class="card-header">CRUD con Laravel 8 y MySQL</h5>
        <div class="card-body">
            <div>
                <div class="col-sm-12">
                    @if($mensaje = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>
                    @endif

                </div>
            </div>
            <h5 class="card-title text-center">Listado de Camiones en el Sistema</h5>
            <p>
                <a href="{route("camions.index")}}" class="btn btn-primary">
                <span class="fas fa-user-plus"></span> Agregar nuevo camión
                </a>
            </p>
            <hr>
            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-border">
                    <thead>
                    <th>ID</th>
                    <th>Placa Camion</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Modelo</th>
                    <th>Capacidad Toneladas</th>
                    <th>Transporte ID</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach($camions as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>C {{$item->placa_camion}}</td>
                            <td>{{$item->marca}}</td>
                            <td>{{$item->color}}</td>
                            <td>{{$item->modelo}}</td>
                            <td>{{$item->capacidad_toneladas}}</td>
                            <td>{{$item->transporte_id}}</td>
                            <td>
                                <form action="#" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="#" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    {{ $camions->links() }}
                </div>
            </div>
            </p>

        </div>
    </div>
    <a href="{{route("inicio.index")}}" class="btn btn-info">
        <span class="fas fa-undo-alt"></span> Regresar
    </a>

@endsection


