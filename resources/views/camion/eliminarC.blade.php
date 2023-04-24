@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
    <div class="card">
        <h5 class="card-header">Eliminar un camion</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bodered" style="background-color: white">
                    <thead>
                    <th>ID</th>
                    <th>Placa Camion</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Modelo</th>
                    <th>Capacidad Toneladas</th>
                    <th>Transporte ID</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $camions->id}}</td>
                        <td>{{ $camions->placa_camion}}</td>
                        <td>{{ $camions->marca}}</td>
                        <td>{{ $camions->color}}</td>
                        <td>{{ $camions->modelo}}</td>
                        <td>{{ $camions->capacidad_toneladas}}</td>
                        <td>{{ $camions->transporte_id}}</td>
                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{route('camion.destroy', $camions->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("camion.index") }}" class="btn btn-info">
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span> Eliminar
                    </button>
                </form>
            </div>
            </p>

        </div>
    </div>
@endsection
