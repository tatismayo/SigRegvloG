@extends('layouts.app')

@section('content')

    <div class="row text-center my-5 fs-5 fw-bold">
        <a class="col-4" href="{{ url('/modulos/'.$submodulo.'/procedimientos') }}">
            <img class="w-25" src="/imagenes/carpeta.png" alt="icono">
            <p>Procedimientos</p>
        </a>
        <a class="col-4" href="{{ url('/modulos/'.$submodulo.'/instructivos') }}">
            <img class="w-25" src="/imagenes/carpeta.png" alt="icono">
            <p>Instructivos</p>
        </a>
        <a class="col-4" href="{{ url('/modulos/'.$submodulo.'/documentos-externos') }}">
            <img class="w-25" src="/imagenes/carpeta.png" alt="icono">
            <p>Documentos externos</p>
        </a>
    </div>
    <div class="row text-center fs-5 fw-bold">
        <a class="col-4" href="{{ url('/modulos/'.$submodulo.'/formatos') }}">
            <img class="w-25" src="/imagenes/carpeta.png" alt="icono">
            <p>Formatos</p>
        </a>
        <a class="col-4" href="{{ url('/modulos/'.$submodulo.'/registros') }}">
            <img class="w-25" src="/imagenes/carpeta.png" alt="icono">
            <p>Registros</p>
        </a>
        <a class="col-4" href="{{ url('/modulos/'.$submodulo.'/documentos-obsoletos') }}">
            <img class="w-25" src="/imagenes/carpeta.png" alt="icono">
            <p>Documentos obsoletos</p>
        </a>
    </div>

    <div class="text-center my-5">
        <a type="button" class="btn btn-primary" href="{{ url('/modulos') }}">Atras</a>
    </div>
@endsection