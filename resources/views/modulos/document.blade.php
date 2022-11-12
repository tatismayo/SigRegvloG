@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
    <form action="{{ url('/modulos/'.$submodulo.'/'.$tipo) }}" method="get" class="d-flex">
        <label for="busqueda" class="col-form-label fs-5">Filtro</label>
        <input type="text" class="form-control mx-3" name="busqueda" value="{{ $busqueda }}"
            placeholder="Nombre Documento">
        <input type="submit" class="btn btn-success" value="Buscar">
    </form>
    <form action="{{ url('/modulos/'.$submodulo.'/'.$tipo) }}" method="get" class="d-flex">
        <input type="submit" class="btn btn-secondary mx-3" value="Limpiar">
    </form>
    @can('view-gestor')
    <a type="button" class="btn btn-primary" href="{{ url('/modulos/'.$submodulo.'/'.$tipo.'/create') }}">Añadir</a>
    @endcan
    @can('view-admin')
    <a type="button" class="btn btn-warning mx-3" href="{{ url('/modulos/'.$submodulo.'/'.$tipo.'/revisar') }}">Doc. Pendientes</a>
    @endcan
</div>

@include('alert')
<div class="row mt-5">
    <div class="row col-11 mx-auto">
        <div class="col-3 enlace-documentos">
            @foreach ($documentos as $documento)
            @if ($loop->index < 10)
            <div class="d-flex">
                <a href="/documents/{{$documento->rutaDoc}}">
                @if (explode('.',$documento->rutaDoc)[1] == 'pdf')
                <img src="/imagenes/logos_archivos/pdf.png" height="40px" width="40">
                @elseif (explode('.',$documento->rutaDoc)[1] == 'xlsx')
                <img src="/imagenes/logos_archivos/excel.png" height="40px" width="40">
                @elseif (explode('.',$documento->rutaDoc)[1] == 'pptx')
                <img src="/imagenes/logos_archivos/point.png" height="40px" width="40">
                @elseif (explode('.',$documento->rutaDoc)[1] == 'docx')
                <img src="/imagenes/logos_archivos/word.png" height="40px" width="40">
                @endif
                {{ $documento->nombreDoc}}</a>
                @can('view-admin')
                <form method="POST" action="{{ route('obsoleto', $documento)}}">
                    @method('PUT')
                    @csrf
                    <button class="btn text-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                        </svg>
                    </button>
                </form>
                @endcan
            </div>
            @endif
            @endforeach
        </div>
        <div class="col-3 enlace-documentos">
            @foreach ($documentos as $documento)
            @if ($loop->index > 9 && $loop->index < 20)
            <div class="d-flex">
                <a href="/documents/{{$documento->rutaDoc}}">
                @if (explode('.',$documento->rutaDoc)[1] == 'pdf')
                <img src="/imagenes/logos_archivos/pdf.png" height="40px" width="40">
                @elseif (explode('.',$documento->rutaDoc)[1] == 'xlsx')
                <img src="/imagenes/logos_archivos/excel.png" height="40px" width="40">
                @elseif (explode('.',$documento->rutaDoc)[1] == 'pptx')
                <img src="/imagenes/logos_archivos/point.png" height="40px" width="40">
                @elseif (explode('.',$documento->rutaDoc)[1] == 'docx')
                <img src="/imagenes/logos_archivos/word.png" height="40px" width="40">
                @endif
                {{ $documento->nombreDoc}}</a>
            </div>
            @endif
            @endforeach
        </div>
        <div class="col-3 enlace-documentos">
            @foreach ($documentos as $documento)
            @if ($loop->index > 19 && $loop->index < 30)
            <div class="d-flex">
                <a href="/documents/{{$documento->rutaDoc}}">
                @if (explode('.',$documento->rutaDoc)[1] == 'pdf')
                <img src="/imagenes/logos_archivos/pdf.png" height="40px" width="40">
                @elseif (explode('.',$documento->rutaDoc)[1] == 'xlsx')
                <img src="/imagenes/logos_archivos/excel.png" height="40px" width="40">
                @elseif (explode('.',$documento->rutaDoc)[1] == 'pptx')
                <img src="/imagenes/logos_archivos/point.png" height="40px" width="40">
                @elseif (explode('.',$documento->rutaDoc)[1] == 'docx')
                <img src="/imagenes/logos_archivos/word.png" height="40px" width="40">
                @endif
                {{ $documento->nombreDoc}}/a>
            </div>
            @endif
            @endforeach
        </div>
        <div class="col-3 enlace-documentos">
            @foreach ($documentos as $documento)
            @if ($loop->index > 29 && $loop->index < 40)
            <div class="d-flex">
                <a href="/documents/{{$documento->rutaDoc}}">
                @if (explode('.',$documento->rutaDoc)[1] == 'pdf')
                <img src="/imagenes/logos_archivos/pdf.png" height="40px" width="40">
                @elseif (explode('.',$documento->rutaDoc)[1] == 'xlsx')
                <img src="/imagenes/logos_archivos/excel.png" height="40px" width="40">
                @elseif (explode('.',$documento->rutaDoc)[1] == 'pptx')
                <img src="/imagenes/logos_archivos/point.png" height="40px" width="40">
                @elseif (explode('.',$documento->rutaDoc)[1] == 'docx')
                <img src="/imagenes/logos_archivos/word.png" height="40px" width="40">
                @endif
                {{ $documento->nombreDoc}}</a>
            </div>
            @endif
            @endforeach
        </div>
        
    </div>
</div>

<div class="d-flex justify-content-center mt-3">
    {{ $documentos->links() }}
</div>

<div class="text-center my-5">
    <a type="button" href="{{ url('/modulos/'.$submodulo) }}" class="btn btn-primary">Volver</a>
</div>
@endsection