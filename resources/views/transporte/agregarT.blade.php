@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
    <div class="card">
        <h5 class="card-header">Agregar nuevo transporte</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{route('transporte.store')}}" method="POST">
                @csrf
                <label for="">ID</label>
                <input type="text" name="id" class="form-control" required>
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Razón Social </label>
                <input type="text" name="razon_social" class="form-control" required>
                <br>
                <a href="{{route("transporte.index")}}" class="btn btn-info">
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
