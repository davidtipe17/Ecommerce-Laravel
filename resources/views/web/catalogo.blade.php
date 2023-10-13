@extends('layouts.web')

@section('contenido')
<section class="bg-light">
    <div class="container py-4">
      <h1 class="mb-1 hero-heading">{{$categoria->nombre}}</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 px-0">
          <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$categoria->nombre}}</li>
        </ol>
      </nav>
    </div>
</section>

<section class="my-5">
    <div class="container">
      <div class="row">
      @foreach($categoria->productos as $prod)
        <div class="col-md-3">
          <div class="card">
            <img src="https://via.placeholder.com/285x180/?text={{$prod->imagen}}" class="card-img-top" alt="producto">
            <div class="card-body">
              <h5 class="card-title text-center">{{$prod->nombre}}</h5>
              <p class="card-text text-center text-danger">S/ {{$prod->precio}}</p>
              <div class="d-grid gap-2">
                <a class="btn btn-primary" href="{{route('producto',['url'=>$prod->url_seo])}}">Ver detalle</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
</section>
@endsection