@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear Noticia') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('noticias.update', $noticia) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="row mb-3">
                            <label for="imagen" class="col-md-4 col-form-label text-md-end">{{ __('Imagen') }}</label>

                            <div class="col-md-6">
                                <input id="imagen" type="file"
                                    class="form-control @error('imagen') is-invalid @enderror" name="imagen"
                                    accept="image/*">
                                <img src="/imagenes/{{ $noticia->ImagenNoticia }}" alt="imagen" id="imagen"
                                    onerror="this.style.display = 'none'" class="mw-100 my-3">

                                @error('imagen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="titulo" class="col-md-4 col-form-label text-md-end">{{ __('Titulo') }}</label>

                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ $noticia->Titulo }}" required autocomplete="titulo">

                                @error('titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="noticia" class="col-md-4 col-form-label text-md-end">{{ __('Contenido') }}</label>

                            <div class="col-md-6">
                                <textarea id="noticia" type="text" class="form-control @error('noticia') is-invalid @enderror" name="noticia" value="{{ old('noticia') }}" required autocomplete="noticia">{{ $noticia->Noticia }}</textarea>

                                @error('noticia')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="enlace" class="col-md-4 col-form-label text-md-end">{{ __('Enlace') }}</label>

                            <div class="col-md-6">
                                <input id="enlace" type="text" class="form-control @error('enlace') is-invalid @enderror" name="enlace" value="{{ $noticia->Enlace }}" autocomplete="enlace" placeholder="Opcional">

                                @error('enlace')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4 text-center">
                                <a href="/" type="submit" class="btn btn-secondary">
                                    {{ __('Volver') }}
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
