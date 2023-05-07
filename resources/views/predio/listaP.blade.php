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
            <h5 class="card-title text-center">Listado de Predios</h5>
            <p>
                <a href="{{route("predio.create")}}" class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar nuevo predio
                </a>
            </p>
            <hr>
            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-border">
                    <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>

                    </thead>
                    <tbody>
                    @foreach($predios as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td> {{$item->nombre_predio}}</td>
                            <td> {{$item->direccion}}</td>

                            <td>
                                <form action="{{route("predio.edit", $item->id)}}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route("predio.show", $item->id)}}" method="GET">
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
                    {{ $predios->links() }}
                </div>
            </div>
            </p>

        </div>
    </div>
    <a href="{{route("inicio.index")}}" class="btn btn-info">
        <span class="fas fa-undo-alt"></span> Regresar
    </a>

@endsection


