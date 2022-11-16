@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <form action="{{ url('/modulos/'.$submodulo.'/'.$tipo.'/revisar') }}" method="get" class="d-flex">
        <label for="busqueda" class="col-form-label fs-5">Filtro</label>
        <input type="text" class="form-control mx-3" name="busqueda" value="{{ $busqueda }}"
            placeholder="Nombre Documento">
        <input type="submit" class="btn btn-success" value="Buscar">
    </form>
    <form action="{{ url('/modulos/'.$submodulo.'/'.$tipo.'/revisar') }}" method="get" class="d-flex">
        <input type="submit" class="btn btn-secondary mx-3" value="Limpiar">
    </form>
</div>

@include('alert')
<div class="row mt-5">
    <div class="row col-11 mx-auto">
        <div class="col-3 enlace-documentos">
            @foreach ($documentos as $documento)
            @if ($loop->index < 10) <div class="d-flex">
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
                <form method="POST" action="{{ route('documentos.update', $documento)}}">
                    @method('PUT')
                    @csrf
                    <button class="btn text-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg>
                    </button>
                </form>

                <!-- Button trigger modal -->
                <button type="button" class="btn text-danger" data-bs-toggle="modal"
                    data-bs-target="#documento{{ $documento->id}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="documento{{ $documento->id}}" tabindex="-1"
                    aria-labelledby="documento{{ $documento->id}}Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="documento{{ $documento->id}}Label">Indique el motivo
                                    del rechazo</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('documentos.destroy', $documento)}}">
                                @method('DELETE')
                                @csrf
                                <div class="modal-body">
                                    <textarea name="rechazo" id="rechazo" class="w-100" required></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        @endif
        @endforeach
    </div>
    <div class="col-3 enlace-documentos">
        @foreach ($documentos as $documento)
        @if ($loop->index > 9 && $loop->index < 20) <div class="d-flex">
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
            <form method="POST" action="{{ route('documentos.update', $documento)}}">
                @method('PUT')
                @csrf
                <button class="btn text-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                    </svg>
                </button>
            </form>
            <!-- Button trigger modal -->
            <button type="button" class="btn text-danger" data-bs-toggle="modal"
                data-bs-target="#documento{{ $documento->id}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-x-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="documento{{ $documento->id}}" tabindex="-1"
                aria-labelledby="documento{{ $documento->id}}Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="documento{{ $documento->id}}Label">Indique el motivo
                                del rechazo</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="{{ route('documentos.destroy', $documento)}}">
                            @method('DELETE')
                            @csrf
                            <div class="modal-body">
                                <textarea name="rechazo" id="rechazo" class="w-100" required></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    @endif
    @endforeach
</div>
<div class="col-3 enlace-documentos">
    @foreach ($documentos as $documento)
    @if ($loop->index > 19 && $loop->index < 30) <div class="d-flex">
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
        <form method="POST" action="{{ route('documentos.update', $documento)}}">
            @method('PUT')
            @csrf
            <button class="btn text-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                </svg>
            </button>
        </form>
        <!-- Button trigger modal -->
        <button type="button" class="btn text-danger" data-bs-toggle="modal"
            data-bs-target="#documento{{ $documento->id}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle"
                viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="documento{{ $documento->id}}" tabindex="-1"
            aria-labelledby="documento{{ $documento->id}}Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="documento{{ $documento->id}}Label">Indique el motivo
                            del rechazo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ route('documentos.destroy', $documento)}}">
                        @method('DELETE')
                        @csrf
                        <div class="modal-body">
                            <textarea name="rechazo" id="rechazo" class="w-100" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endif
@endforeach
</div>
<div class="col-3 enlace-documentos">
    @foreach ($documentos as $documento)
    @if ($loop->index > 29 && $loop->index < 40) <div class="d-flex">
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
        <form method="POST" action="{{ route('documentos.update', $documento)}}">
            @method('PUT')
            @csrf
            <button class="btn text-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                </svg>
            </button>
        </form>
        <!-- Button trigger modal -->
        <button type="button" class="btn text-danger" data-bs-toggle="modal"
            data-bs-target="#documento{{ $documento->id}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle"
                viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="documento{{ $documento->id}}" tabindex="-1"
            aria-labelledby="documento{{ $documento->id}}Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="documento{{ $documento->id}}Label">Indique el motivo
                            del rechazo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ route('documentos.destroy', $documento)}}">
                        @method('DELETE')
                        @csrf
                        <div class="modal-body">
                            <textarea name="rechazo" id="rechazo" class="w-100" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
    <a type="button" href="{{ url('/modulos/'.$modulo.'/'.$submodulo.'/'.$tipo) }}" class="btn btn-primary">Volver</a>
</div>
@endsection