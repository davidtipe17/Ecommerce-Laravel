@extends('layouts.web');

@section('contenido')
<!-- Inicio Título -->
<section class="bg-light">
    <div class="container py-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 px-0">
          <li class="breadcrumb-item"><a href="/">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Completado</li>
        </ol>
      </nav>
    </div>
  </section>
<!-- Fin Título -->
<!-- Inicio Contenido -->
<section class="my-5">
    <div class="container">
      <header class="my-5 text-center">
        <h2 class="mb-0">{{$respuesta['titulo']}}</h2>
      </header>
      <div class="text-center">
        <i class="fas fa-truck text-primary fa-5x mb-4"></i>
        <h1>Gracias</h1>
        <div class="row">
          <div class="col-lg-7 mx-auto">
            <p class="text-muted mb-4">{{$respuesta['mensaje']}}</p>
          </div>
        </div><a class="btn btn-primary" href="/"> <i class="fas fa-shopping-bag me-2"></i>Seguir comprando</a>
      </div>
    </div>
  </section>
<!-- Fin Contenido -->
@endsection