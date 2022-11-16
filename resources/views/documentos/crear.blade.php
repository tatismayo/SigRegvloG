@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Adjuntar documento') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('documentos.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="documento" class="col-md-4 col-form-label text-md-end">{{ __('Documento') }}</label>

                            <div class="col-md-6">
                                <input id="documento" type="file"
                                    class="form-control @error('documento') is-invalid @enderror" name="documento"
                                    required>

                                @error('documento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre">

                                @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <input id="modulo" type="text" name="modulo" value="{{ $modulo }}" hidden>
                        <input id="submodulo" type="text" name="submodulo" value="{{ $submodulo }}" hidden>
                        <input id="tipo" type="text" name="tipo" value="{{ $tipo }}" hidden>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4 text-center">
                                <a href="{{ url('/modulos/'.$modulo.'/'.$submodulo.'/'.$tipo) }}" class="btn btn-secondary">Volver</a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Adjuntar') }}
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