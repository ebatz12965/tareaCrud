@extends('layout/plantilla2')

@section('tituloPagina', 'Crud con Laravel 8')

@section('contenido')

    <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="text-white h4">Menu</h5>
            <a class="btn btn-secondary d-block mb-3" href="#">Transportes</a>
            <a class="btn btn-secondary d-block mb-3" href="#">Camiones</a>
            <a class="btn btn-secondary d-block mb-3" href="/">Personas</a>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>


@endsection
