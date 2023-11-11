@extends('layouts.admin');


@section('contenido')
<h1>Nuevo Producto</h1>
<form method="post" action="{{route('producto.guardar')}}" enctype="multipart/form-data">
	@csrf
	<div class="mb-3 row">
    	<label for="titulo" class="col-sm-2 col-form-label">Nombre del Producto</label>
    	<div class="col-sm-10">
        	<input type="text" name="nombre" class="form-control" id="nombre" autofocus required />
    	</div>
	</div>
	<div class="mb-3 row">
    	<label for="editorial" class="col-sm-2 col-form-label">Categoria de Producto</label>
    	<div class="col-sm-10">
        	<select name="categoria" class="form-select" id="categoria" required>
            	<option value="">Seleccione una opción</option>
            	@foreach($categorias as $categoria)
            	<option value="{{$categoria->id}}"> {{$categoria->nombre}}</option>
            	@endforeach
        	</select>
    	</div>
	</div>
	<div class="mb-3 row">
    	<label for="precio" class="col-sm-2 col-form-label">Url_Seo</label>
    	<div class="col-sm-10">
        	<input type="text" name="url_seo" class="form-control" id="url_seo" />
    	</div>
	</div>
	<div class="mb-3 row">
    	<label for="precio" class="col-sm-2 col-form-label">Descripcion</label>
    	<div class="col-sm-10">
        	<input type="text" name="descripcion" class="form-control" id="descripcion" />
    	</div>
	</div>
	<div class="mb-3 row">
    	<label for="precio" class="col-sm-2 col-form-label">Precio</label>
    	<div class="col-sm-10">
        	<input type="number" name="precio" class="form-control" id="precio" />
    	</div>
	</div>
    <div class="mb-3 row">
    	<label for="editorial" class="col-sm-2 col-form-label">Portada</label>
    	<div class="col-sm-10">
        	<select name="portada" class="form-select" id="portada" required>
            	<option value="">Seleccione una opción</option>
            	@foreach($productos as $producto)
            	<option value="{{$producto->id}}"> {{$producto->portada}}</option>
            	@endforeach
        	</select>
    	</div>
	</div>
    <div class="mb-3 row">
    	<label for="pagina" class="col-sm-2 col-form-label">Stock</label>
    	<div class="col-sm-10">
        	<input type="number" name="stock" class="form-control" id="stock" />
    	</div>
	</div>
	<div class="mb-3 row">
    	<label for="imagen" class="col-sm-2 col-form-label">Imagen</label>
    	<div class="col-sm-10">
        	<input type="file" name="imagen" class="form-control" id="imagen" />
    	</div>
	</div>
	<div class="mb-3 row">
    	<div class="col-sm-2"></div>
    	<div class="col-sm-10">
        	<button class="btn btn-primary">Guardar</button>
    	</div>
	</div>
</form>
@endsection