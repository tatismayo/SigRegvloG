@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header ">
            <h5>Contacta con nosotros.</h5>
        </div>
        <form class="my-3" action="">
            <div class="row mb-3">
                <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                <div class="col-md-6">
                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror"
                        name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre">

                    @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="correo" class="col-md-4 col-form-label text-md-end">{{ __('Correo electronico') }}</label>

                <div class="col-md-6">
                    <input id="correo" type="text" class="form-control @error('correo') is-invalid @enderror"
                        name="correo" value="{{ old('correo') }}" required autocomplete="correo">

                    @error('correo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="telefono" class="col-md-4 col-form-label text-md-end">{{ __('Teléfono') }}</label>

                <div class="col-md-6">
                    <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror"
                        name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono">

                    @error('telefono')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="mensaje" class="col-md-4 col-form-label text-md-end">{{ __('Mensaje') }}</label>

                <div class="col-md-6">
                    <textarea id="mensaje" type="text" class="form-control @error('mensaje') is-invalid @enderror"
                        name="mensaje" value="{{ old('mensaje') }}" required autocomplete="mensaje"></textarea>

                    @error('mensaje')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="evidencia" class="col-md-4 col-form-label text-md-end">{{ __('Adjuntar imagen de error') }}</label>

                <div class="col-md-6">
                    <input id="evidencia" type="file"
                        class="form-control @error('evidencia') is-invalid @enderror" name="evidencia"
                        accept="image/*">

                    @error('evidencia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4 text-center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Enviar') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection