@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar datos del empleado') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('usuarios.update', $usuario) }}">
                        @method('PUT') 
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $usuario->name }}" required autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cedula" class="col-md-4 col-form-label text-md-end">{{ __('Cédula') }}</label>

                            <div class="col-md-6">
                                <input id="cedula" type="cedula" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ $usuario->cedula }}" required autocomplete="cedula">

                                @error('cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telefono" class="col-md-4 col-form-label text-md-end">{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="telefono" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ $usuario->telefono }}" required autocomplete="telefono">

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ciudad" class="col-md-4 col-form-label text-md-end">{{ __('Ciudad') }}</label>

                            <div class="col-md-6">
                                <input id="ciudad" type="text" class="form-control @error('ciudad') is-invalid @enderror" name="ciudad" value="{{ $usuario->ciudad }}" required autocomplete="ciudad">

                                @error('ciudad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $usuario->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="rol" class="col-md-4 col-form-label text-md-end">{{ __('Rol') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" id="rol" class="form-control @error('rol') is-invalid @enderror" name="rol" required>
                                    <option value="Empleado">Empleado</option>
                                    <option value="Gestor">Gestor</option>
                                    <option value="Administrador">Administrador</option>
                                </select>

                                @error('rol')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="procesos" class="col-md-4 col-form-label text-md-end">{{ __('Procesos') }}</label>

                            <div class="col-md-6">
                                <div>
                                    <input type="checkbox" id="Evaluacion y control" name="procesos[]" value="Evaluacion y control" />
                                    <label for="Evaluacion y control">Evaluación & control</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="Gestion estrategica" name="procesos[]" value="Gestion estrategica" />
                                    <label for="Gestion estrategica">Gestión estratégica</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="Gobierno corporativo" name="procesos[]" value="Gobierno corporativo" />
                                    <label for="Gobierno corporativo">Gobierno corporativo</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="Gestion proyectos operaciones" name="procesos[]" value="Gestion proyectos operaciones" />
                                    <label for="Gestion proyectos operaciones">Gestión proyectos operaciones</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="Gestion comercial" name="procesos[]" value="Gestion comercial" />
                                    <label for="Gestion comercial">Gestión comercial</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="Gestion administrativa y financiera" name="procesos[]" value="Gestion administrativa y financiera" />
                                    <label for="Gestion administrativa y financiera">Gestión administrativa & financiera</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="Innovacion y tecnologia" name="procesos[]" value="Innovacion y tecnologia" />
                                    <label for="Innovacion y tecnologia">Innovación & tecnologia</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
                                </button>
                                <a type="button" class="btn btn-secondary" href="{{ route('usuarios.index') }}">Volver</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection