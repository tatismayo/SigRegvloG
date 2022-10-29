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
                {{ $documento->nombreDoc}}{{$loop->index}}</a>
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
                {{ $documento->nombreDoc}}{{$loop->index}}</a>
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
                {{ $documento->nombreDoc}}{{$loop->index}}</a>
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
                {{ $documento->nombreDoc}}{{$loop->index}}</a>
            </div>
            @endif
            @endforeach
        </div>
        
    </div>
</div>

<div class="d-flex justify-content-center">
    {{ $documentos->links() }}
</div>

<div class="text-center my-5">
    <button type="button" class="btn btn-primary" onclick="window.history.back();">Volver</button>
</div>
@endsection