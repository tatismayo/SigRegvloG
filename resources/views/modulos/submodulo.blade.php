@extends('layouts.app')

@section('content')

    <div class="row text-center my-5 fs-5 fw-bold">
        <a class="col-4" href="{{ url('/modulos/'.$submodulo.'/procedimientos') }}">
            <img class="w-25" src="/imagenes/carpeta.png" alt="icono">
            <p>Procedimientos</p>
        </a>
        <div class="col-4">
            <img class="w-25" src="/imagenes/carpeta.png" alt="icono">
            <p>Instructivos</p>
        </div>
        <div class="col-4">
            <img class="w-25" src="/imagenes/carpeta.png" alt="icono">
            <p>Documentos externos</p>
        </div>
    </div>
    <div class="row text-center fs-5 fw-bold">
        <div class="col-4">
            <img class="w-25" src="/imagenes/carpeta.png" alt="icono">
            <p>Formatos</p>
        </div>
        <div class="col-4">
            <img class="w-25" src="/imagenes/carpeta.png" alt="icono">
            <p>Registros</p>
        </div>
        <div class="col-4">
            <img class="w-25" src="/imagenes/carpeta.png" alt="icono">
            <p>Documentos obsoletos</p>
        </div>
    </div>

    <div class="text-center my-5">
        <a type="button" class="btn btn-primary" href="{{ url('/modulos') }}">Atras</a>
    </div>
@endsection