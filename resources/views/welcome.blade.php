@extends('layouts.app')

@section('content')
@can('view-noticias')
  <div class="d-flex justify-content-center">
    <a class="btn btn-primary" href="{{ route('noticias.create') }}">Crear Noticia</a>
  </div>
@endcan

<div class="row justify-content-center">
  @foreach ($noticias as $noticia)
    <div class="card m-5" style="width: 18rem;">
      <div class="mt-2" style=" width:260px; height:200px">
        <img src="/imagenes/{{ $noticia->ImagenNoticia }}" class="card-img-top h-100" style="object-fit: cover" alt="...">
      </div>
      <div class="card-body">
        <h3>{{ $noticia->Titulo }}</h3>
        <p class="limiteTexto">{{ $noticia->Noticia }}</p>
        <button type="submit" class="btn btn-light float-end" data-bs-toggle="modal" data-bs-target="#masinformacion{{ $noticia->id }}">
          Ver más
      </button>
      <!-- Modal -->
      <div class="modal fade" id="masinformacion{{ $noticia->id }}" tabindex="-1" aria-labelledby="masinformacion{{ $noticia->id }}Label" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-body">
                    <img src="/imagenes/{{ $noticia->ImagenNoticia }}" class="card-img-top h-100" style="object-fit: cover" alt="...">
                    <h3>{{ $noticia->Titulo }}</h3>
                    <p>{{ $noticia->Noticia }}</p>
                  </div>
                  <div class="modal-footer">
                      @if ($noticia->Enlace != null)
                          <a href="{{ $noticia->Enlace }}" class="btn">Más información</a>
                      @endif
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  </div>
              </div>
          </div>
      </div>
      </div>
      <div class="card-footer text-secondary">
        <p style="font-size: 10px">
        Autor: @foreach ($usuarios as $usuario)
            @if ($usuario->id == $noticia->User_id)
                {{ $usuario->name }}
            @endif
        @endforeach
        <br/>Fecha: {{ $noticia->Fecha }}</p>
        <div class="text-center">
          @can('view-noticias')
          <a class="btn btn-warning" href="{{ route('noticias.edit', $noticia) }}">Editar</a>
          <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarnoticia{{ $noticia->id }}">
            Eliminar
        </button>
        <!-- Modal -->
        <div class="modal fade" id="eliminarnoticia{{ $noticia->id }}" tabindex="-1" aria-labelledby="eliminarnoticia{{ $noticia->id }}Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="eliminarnoticia{{ $noticia->id }}
                                    Label">Confirmación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Esta seguro de que desea eliminar este noticia?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <form action="{{ route('noticias.destroy', $noticia) }}" method="post" class="mx-2">
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
          @endcan
      </div>
      </div>
    </div>
  @endforeach

</div>

@endsection

