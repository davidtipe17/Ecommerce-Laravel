@extends('layouts.web')

@section('contenido');
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://via.placeholder.com/1500x450/0b5ed7/FFFFFF/?text=Banner1" class="d-block w-100" alt="banner">
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1500x450/0b5ed7/FFFFFF/?text=Banner2" class="d-block w-100" alt="banner">
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1500x450/0b5ed7/FFFFFF/?text=Banner3" class="d-block w-100" alt="banner">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
</div>

<section class="my-5">
    <div class="container">
      <header class="my-5 text-center">
        <h2 class="mb-0">Novedades</h2>
        <p class="text-muted">Explora los productos más nuevos</p>
      </header>
      <div class="row">
      @foreach($lista as $prod)
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="https://via.placeholder.com/285x180/?text={{ $prod->imagen }}" class="card-img-top" alt="producto">
            <div class="card-body">
              <h5 class="card-title text-center">{{ $prod->nombre }}</h5>
              <p class="card-text text-center text-danger">S/ {{ $prod->precio }}</p>
              <div class="d-grid gap-2">
                <a class="btn btn-primary" href="/producto/{{ $prod->url_seo }}">Ver detalle</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endsection