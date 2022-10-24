@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
  <div class="dropend">
    <button type="button" class="btn hexagono mx-2" data-bs-toggle="dropdown" aria-expanded="false">Evaluación y
      Control</button>

    <ul class="dropdown-menu menu-oculto">
      <button type="button" class="dropdown-item boton-modulos my-1" data-bs-toggle="modal" data-bs-target="#imagen-eyc">Caracterización</button>
      <li>
        <a type="button" class="dropdown-item boton-modulos" href="#">
          Subprocesos
        </a>
        <ul class="dropdown-menu dropdown-submenu menu-oculto">
          <li>
            <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/control-interno-y-riesgos') }}">Control interno y riesgos</a>
          </li>
          <li>
            <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/auditoria-sistemas-de-gestion')}} ">Auditoria sistemas de gestión</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>

<div class="d-flex justify-content-center">
  <div class="dropstart">
    <button type="button" class="btn hexagono mx-2" data-bs-toggle="dropdown" aria-expanded="false">Gestión
      Estratégica</button>

      <ul class="dropdown-menu menu-oculto">
        <button class="dropdown-item boton-modulos my-1">Caracterización</button>
        <li>
          <a type="button" class="dropdown-item boton-modulos" href="#">
            Subprocesos
          </a>
          <ul class="dropdown-menu dropdown-submenu-left">
            <li>
              <a class="dropdown-item" href="#">Submenu item 1</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Submenu item 2</a>
            </li>
          </ul>
        </li>
      </ul>
  </div>

  <div class="dropend">
    <button type="button" class="btn hexagono mx-2" data-bs-toggle="dropdown" aria-expanded="false">Gobierno
      Corporativo</button>

    <ul class="dropdown-menu menu-oculto">
      <!-- Dropdown menu links -->
    </ul>
  </div>
</div>

<div class="d-flex justify-content-center">
  <div class="dropend">
    <button type="button" class="btn hexagono mx-2" data-bs-toggle="dropdown" aria-expanded="false">Gestión Proyectos
      Operaciones</button>

    <ul class="dropdown-menu menu-oculto">
      <!-- Dropdown menu links -->
    </ul>
  </div>

  <div class="dropend">
    <button type="button" class="btn hexagono mx-2" data-bs-toggle="dropdown" aria-expanded="false">Propósito</button>

    <ul class="dropdown-menu menu-oculto">
      <!-- Dropdown menu links -->
    </ul>
  </div>

  <div class="dropend">
    <button type="button" class="btn hexagono mx-2" data-bs-toggle="dropdown" aria-expanded="false">Gestión
      Comercial</button>

    <ul class="dropdown-menu menu-oculto">
      <!-- Dropdown menu links -->
    </ul>
  </div>
</div>

<div class="d-flex justify-content-center">
  <div class="dropend">
    <button type="button" class="btn hexagono mx-2" data-bs-toggle="dropdown" aria-expanded="false">Gestión
      Administrativa y financiera</button>

    <ul class="dropdown-menu menu-oculto">
      <!-- Dropdown menu links -->
    </ul>
  </div>

  <div class="dropend">
    <button type="button" class="btn hexagono mx-2" data-bs-toggle="dropdown" aria-expanded="false">Innovación &
      Tecnologia</button>

    <ul class="dropdown-menu menu-oculto">
      <!-- Dropdown menu links -->
    </ul>
  </div>
</div>




<!-- Modal eyc -->
<div class="modal fade" id="imagen-eyc" tabindex="-1" aria-labelledby="imagen-eycLabel" aria-hidden="true">
  <div class="modal-dialog modal-caracterizacion">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="imagen-eycLabel">Caracterización</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="w-100" src="/imagenes/caracterizacion/EYC.png" alt="caracterizacion_eyc">
      </div>
    </div>
  </div>
</div>
@endsection