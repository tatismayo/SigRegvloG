@extends('layouts.app')

@section('content')
<div class="m-5 px-5">
    <a href="{{ route('register') }}" type="button" class="btn btn-primary m-3">Registrar usuario</a>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Cédula</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Correo</th>
                <th scope="col">Rol</th>
                <th scope="col">Area</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody class="table-striped bg-light">
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->cedula}}</td>
                <td>{{$usuario->telefono}}</td>
                <td>{{$usuario->ciudad}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->rol}}</td>
                <td>{{$usuario->area}}</td>
                <td><a type="button" class="btn btn-warning" href="{{ route('usuarios.edit',$usuario) }}">Editar</a>
                    <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarUsuario{{ $usuario->id }}">
                        Eliminar
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="eliminarUsuario{{ $usuario->id }}" tabindex="-1" aria-labelledby="eliminarUsuario{{ $usuario->id }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="eliminarUsuario{{ $usuario->id }}
                                                Label">Confirmación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Esta seguro de que desea eliminar este usuario?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <form action="{{ route('usuarios.destroy', $usuario) }}" method="post" class="mx-2">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            Confirmar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center">
    {{ $usuarios->links() }}
</div>

@endsection
