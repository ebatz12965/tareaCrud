@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
    <div class="card">
        <h5 class="card-header">Actualizar nuevo camion</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{route('camion.update', $camions->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">ID</label>
                <input type="text" name="id" class="form-control" required value="{{$camions->id}}">
                <label for="">Placa Camion</label>
                <input type="text" name="placa_camion" class="form-control" required value="{{$camions->placa_camion}}">
                <label for="">Marca</label>
                <input type="text" name="marca" class="form-control" required{{$camions->marca}}>
                <label for="">Color</label>
                <input type="text" name="color" class="form-control" required{{$camions->color}}>
                <label for="">Modelo</label>
                <input type="text" name="modelo" class="form-control" required{{$camions->modelo}}>
                <label for="">Capacidad Toneladas</label>
                <input type="text" name="capacidad_toneladas" class="form-control" required{{$camions->capacidad_toneladas}}>
                <label for="">Transporte ID</label>
                <input type="text" name="transporte_id" class="form-control" required{{$camions->transporte_id}}>
                <br>
                <a href="{{route("camion.index")}}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span> Actualizar
                </button>

            </form>
            </p>

        </div>
    </div>
@endsection
