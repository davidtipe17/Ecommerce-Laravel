@extends('layouts.admin');

@section('contenido')
<!-- Inicio Título -->
<section class="bg-light">
    <div class="container py-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 px-0">
          <li class="breadcrumb-item active"><a href="{{route('admin.producto')}}">Inicio</a></li>
        </ol>
      </nav>
    </div>
  </section>
<!-- Fin Título -->

<!-- Inicio Contenido -->
<section class="my-5">
<h1>Productos</h1>
<div class="text-end">
	<a href="{{route('producto.nuevo')}}" class="btn btn-primary">Nuevo</a>
</div>
<form action="{{ route('producto.guardar.masive') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 text-start">
        <div class="col-sm-5">
            <input type="file" name="importexcel" class="form-control" id="importexcel" required  />
        </div>
    </div>
    <div class="mb-3 text-start">
        <div class="col-sm-5">
            <button type="submit" class="btn btn-primary">Importar Productos</button>
        </div>
    </div>
</form>
@if(session('mensaje'))
<div class="alert alert-{{session('estado','success')}} alert-dismissible fade show mt-3" role="alert">
	<i class="bi bi-{{session('icon','check-circle-fill')}}"></i> {{session('mensaje')}}
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<table class="table">
	<thead>
    	<tr>
        	<th>nombre</th>
        	<th>url_seo</th>
        	<th>imagen</th>
        	<th>Precio</th>
        	<th>Stock</th>
        	<th>Estado</th>
        	<th>Fecha Creación</th>
        	<th>Acciones</th>
    	</tr>
	</thead>
	<tbody>
	@forelse ($productos as $fila)
    	<tr>
        	<td>{{$fila->nombre}}</td>
        	<td>{{$fila-> url_seo}}</td>
        	<td>{{$fila-> imagen}}</td>
        	<td>S/. {{$fila-> precio}}</td>
        	<td>{{$fila-> stock}}</td>
        	<td>
            	<span class="badge bg-{{Util::bagde($fila->estado)}}">
              {{ Util::EstadoProducto($fila->estado) }}
            	</span>
        	</td>
        	<td>{{ Util::formatoFecha($fila->fecha_venta) }}</td>
        	<td>
            	<a href="/libros/mostrar/{{$fila->id}}" title="Editar" class="btn btn-info">
                	<i class="bi bi-pencil-square"></i>
            	</a>
            	<a href="/libros/eliminar/{{$fila->id}}" title="Eliminar" class="btn btn-danger">
                	<i class="bi bi-trash"></i>
            	</a>
        	</td>
    	</tr>
	@empty
    	<tr>
        	<td class="text-center" colspan="8">No hay registros</td>
    	</tr>
	@endforelse
	</tbody>
</table>
</section>
<!-- Fin Contenido -->
@endsection