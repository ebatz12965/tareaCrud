@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')

    <div class="card">
        <h5 class="card-header">Agregar nuevo camion</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{ route('camion.store')}}" method="POST">
                @csrf
                <label for="">ID</label>
                <input type="text" name="id" class="form-control" required>
                <label for="">Placa Camión</label>
                <input type="text" name="placa_camion" class="form-control" required>
                <label for="">Marca</label>
                <input type="text" name="marca" class="form-control" required>
                <label for="">Color</label>
                <input type="text" name="color" class="form-control" required>
                <label for="">Modelo</label>
                <input type="text" name="modelo" class="form-control" required>
                <label for="">Capacidad Toneladas</label>
                <input type="text" name="capacidad_toneladas" class="form-control" required>
                <label for="">Transporte ID</label>
                <input type="text" name="transporte_id" class="form-control" required>
                <!--<label for="">Transporte ID</label>
                { Form::select('transporte_id', $transportes, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un transporte']) }}-->

                <br>
                <a href="{{route("camion.index")}}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar
                </button>

            </form>
            </p>

        </div>
    </div>
@endsection
