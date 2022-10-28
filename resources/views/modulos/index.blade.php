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
        <button type="button" class="dropdown-item boton-modulos my-1" data-bs-toggle="modal" data-bs-target="#imagen-ge">Caracterización</button>
        <li>
          <a type="button" class="dropdown-item boton-modulos" href="#">
            Subprocesos
          </a>
          <ul class="dropdown-menu dropdown-submenu-left menu-oculto w-100">
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/planeacion-estrategica') }}">Planeación Estratégica</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/seguimiento-estrategia-bsc')}} ">Seguimiento Estrategia BSC</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/planeacion-financiera-e-inversiones') }}">Planeación Financiera e Inversiones</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/desarrollo-humano-&-organizacional')}} ">Desarrollo Humano & Organizacional</a>
            </li>
          </ul>
        </li>
      </ul>
  </div>

  <div class="dropend">
    <button type="button" class="btn hexagono mx-2" data-bs-toggle="dropdown" aria-expanded="false">Gobierno
      Corporativo</button>

      <ul class="dropdown-menu menu-oculto">
        <button type="button" class="dropdown-item boton-modulos my-1" data-bs-toggle="modal" data-bs-target="#imagen-gcorpo">Caracterización</button>
        <li>
          <a type="button" class="dropdown-item boton-modulos" href="#">
            Subprocesos
          </a>
          <ul class="dropdown-menu dropdown-submenu menu-oculto">
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/protocolos-de-familia') }}">Protocolos de Familia</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/comites-mecanismos-de-integracion')}} ">Comités / Mecanismos de integración</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/estrategia-de-sostenibilidad') }}">Estrategia de Sostenibilidad</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/lineamientos-grupos-de-interes')}} ">Lineamientos Grupos de Interés</a>
            </li>
          </ul>
        </li>
      </ul>
  </div>
</div>

<div class="d-flex justify-content-center">
  <div class="dropstart">
    <button type="button" class="btn hexagono mx-2" data-bs-toggle="dropdown" aria-expanded="false">Gestión Proyectos
      Operaciones</button>

      <ul class="dropdown-menu menu-oculto">
        <button type="button" class="dropdown-item boton-modulos my-1" data-bs-toggle="modal" data-bs-target="#imagen-gpo">Caracterización</button>
        <li>
          <a type="button" class="dropdown-item boton-modulos" href="#">
            Subprocesos
          </a>
          <ul class="dropdown-menu dropdown-submenu-left menu-oculto w-100">
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/implementacion-de-proyectos') }}">Implementación de Proyectos</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/ejecucion-y-seguimiento')}} ">Ejecución y Seguimiento</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/servicio-al-cliente-post') }}">Servicio al Cliente POST</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/administrar-proveedores-y-aliados-de-la-operacion')}} ">Administrar Proveedores y Aliados de la Operación</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/mantenimiento-e-infraestructura')}} ">Mantenimiento e Infraestructura</a>
            </li>
          </ul>
        </li>
      </ul>
  </div>

  <div class="dropend">
    <button type="button" class="btn hexagono mx-2" data-bs-toggle="modal" data-bs-target="#proposito">Propósito</button>
  </div>

  <div class="dropend">
    <button type="button" class="btn hexagono mx-2" data-bs-toggle="dropdown" aria-expanded="false">Gestión
      Comercial</button>

      <ul class="dropdown-menu menu-oculto">
        <button type="button" class="dropdown-item boton-modulos my-1" data-bs-toggle="modal" data-bs-target="#imagen-gc">Caracterización</button>
        <li>
          <a type="button" class="dropdown-item boton-modulos" href="#">
            Subprocesos
          </a>
          <ul class="dropdown-menu dropdown-submenu menu-oculto">
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/investigacion-de-mercado') }}">Investigación de Mercado</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/relacionamiento-clientes')}} ">Relacionamiento Clientes</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/consultoria') }}">Consultoria</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/diseño-de-proyectos')}} ">Diseño de Proyectos</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/propuesta-y-negociacion') }}">Propuesta y Negociación</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/pricing-de-servicios-front')}} ">Pricing de Servicios Front</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/servicio-al-cliente') }}">Servicio al Cliente</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/gestion-de-cartera-y-cobro')}} ">Gestión de Cartera y Cobro</a>
            </li>
          </ul>
        </li>
      </ul>
  </div>
</div>

<div class="d-flex justify-content-center">
  <div class="dropstart">
    <button type="button" class="btn hexagono mx-2" data-bs-toggle="dropdown" aria-expanded="false">Gestión
      Administrativa y financiera</button>

      <ul class="dropdown-menu menu-oculto">
        <button type="button" class="dropdown-item boton-modulos my-1" data-bs-toggle="modal" data-bs-target="#imagen-gayf">Caracterización</button>
        <li>
          <a type="button" class="dropdown-item boton-modulos" href="#">
            Subprocesos
          </a>
          <ul class="dropdown-menu dropdown-submenu-left menu-oculto w-100">
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/contabilidad') }}">Contabilidad</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/tesoreria')}} ">Tesorería</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/facturacion') }}">Facturación</a></a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/gestion-de-compras')}} ">Gestión de Compras</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/administracion-personal')}} ">Administración Personal</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/gestion-juridica')}} ">Gestión jurídica</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/gestion-administrativa')}} ">Gestión Administrativa</a>
            </li>
          </ul>
        </li>
      </ul>
  </div>

  <div class="dropend">
    <button type="button" class="btn hexagono mx-2" data-bs-toggle="dropdown" aria-expanded="false">Innovación &
      Tecnologia</button>

      <ul class="dropdown-menu menu-oculto">
        <button type="button" class="dropdown-item boton-modulos my-1" data-bs-toggle="modal" data-bs-target="#imagen-iyt">Caracterización</button>
        <li>
          <a type="button" class="dropdown-item boton-modulos" href="#">
            Subprocesos
          </a>
          <ul class="dropdown-menu dropdown-submenu menu-oculto">
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/vigilancia-estrategica') }}">Vigilancia Estratégica</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/desarrollo-e-implementacion-de-servicios-y-portafolio')}} ">Desarrollo e Implementación de Servicios y Portafolio</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/gestion-de-tecnologia-y-ciencia-de-datos') }}">Gestión de Tecgología y ciencia de datos</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos text-wrap" href="{{ url('/modulos/gestion-de-alianzas-i&ti')}} ">Gestión de Alianzas para I&TI</a>
            </li>
            <li>
              <a class="dropdown-item boton-modulos my-1 text-wrap" href="{{ url('/modulos/gestion-de-conocimiento') }}">Gestión de Conocimiento</a>
            </li>
          </ul>
        </li>
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

<!-- Modal ge -->
<div class="modal fade" id="imagen-ge" tabindex="-1" aria-labelledby="imagen-geLabel" aria-hidden="true">
  <div class="modal-dialog modal-caracterizacion">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="imagen-geLabel">Caracterización</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="w-100" src="/imagenes/caracterizacion/ge.png" alt="caracterizacion_ge">
      </div>
    </div>
  </div>
</div>

<!-- Modal gcorpo -->
<div class="modal fade" id="imagen-gcorpo" tabindex="-1" aria-labelledby="imagen-gcorpoLabel" aria-hidden="true">
  <div class="modal-dialog modal-caracterizacion">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="imagen-gcorpoLabel">Caracterización</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="w-100" src="/imagenes/caracterizacion/gcorpo.png" alt="caracterizacion_gcorpo">
      </div>
    </div>
  </div>
</div>

<!-- Modal gpo -->
<div class="modal fade" id="imagen-gpo" tabindex="-1" aria-labelledby="imagen-gpoLabel" aria-hidden="true">
  <div class="modal-dialog modal-caracterizacion">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="imagen-gpoLabel">Caracterización</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="w-100" src="/imagenes/caracterizacion/gpo.png" alt="caracterizacion_gpo">
      </div>
    </div>
  </div>
</div>

<!-- Modal proposito -->
<div class="modal fade" id="proposito" tabindex="-1" aria-labelledby="propositoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-3" id="propositoLabel">Nuestro Propósito Superior</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-5">
        En RevloG S.A.S estamos comprometidos con aumentar la competitividad de nuestros grupos de interés por medio de la investigación, innovación y desarrollo en la cadena de suministro.
      </div>
    </div>
  </div>
</div>

<!-- Modal gc -->
<div class="modal fade" id="imagen-gc" tabindex="-1" aria-labelledby="imagen-gcLabel" aria-hidden="true">
  <div class="modal-dialog modal-caracterizacion">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="imagen-gcLabel">Caracterización</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="w-100" src="/imagenes/caracterizacion/gc.png" alt="caracterizacion_gc">
      </div>
    </div>
  </div>
</div>

<!-- Modal gayf -->
<div class="modal fade" id="imagen-gayf" tabindex="-1" aria-labelledby="imagen-gayfLabel" aria-hidden="true">
  <div class="modal-dialog modal-caracterizacion">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="imagen-gayfLabel">Caracterización</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="w-100" src="/imagenes/caracterizacion/gayf.png" alt="caracterizacion_gayf">
      </div>
    </div>
  </div>
</div>

<!-- Modal iyt -->
<div class="modal fade" id="imagen-iyt" tabindex="-1" aria-labelledby="imagen-iytLabel" aria-hidden="true">
  <div class="modal-dialog modal-caracterizacion">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="imagen-iytLabel">Caracterización</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="w-100" src="/imagenes/caracterizacion/iyt.png" alt="caracterizacion_iyt">
      </div>
    </div>
  </div>
</div>

@endsection