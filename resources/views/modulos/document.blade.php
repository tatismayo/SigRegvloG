@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <form action="{{ url('/modulos/'.$submodulo.'/'.$tipo) }}" method="get" class="d-flex">
        <label for="busqueda" class="col-form-label fs-5">Filtro</label>
        <input type="text" class="form-control mx-3" name="busqueda" value="{{ $busqueda }}"
            placeholder="Nombre o Documento">
        <input type="submit" class="btn btn-success" value="Buscar">
    </form>
    <form action="{{ url('/modulos/'.$submodulo.'/'.$tipo) }}" method="get" class="d-flex">
        <input type="submit" class="btn btn-secondary mx-3" value="Limpiar">
    </form>
    <a type="button" class="btn btn-primary" href="{{ url('/modulos/'.$submodulo.'/'.$tipo.'/create') }}">Añadir</a>
</div>
@foreach ($documentos as $documento)
   <a href="/documents/{{$documento->rutaDoc}}">{{ $documento->nombreDoc}}</a>
@endforeach

<div class="text-center my-5">
    <button type="button" class="btn btn-primary" onclick="window.history.back();">Volver</button>
</div>
@endsection