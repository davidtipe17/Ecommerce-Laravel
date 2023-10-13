@extends('layouts.web')

@section('contenido')
<!-- Inicio Título -->
<section class="bg-light">
    <div class="container py-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 px-0">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item"><a href="/pago">Pago</a></li>
                <li class="breadcrumb-item active" aria-current="page">Resumen</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Fin Título -->
<section class="my-5">
    <div class="container">
        <header class="my-5 text-center">
            <h2 class="mb-0">Resumen Pago</h2>
        </header>
        <div class="row">
            <div class="col-12 col-md-7">
                <h5 class="mb-4 fw-bold">Detalle pedido ({{ count(session('carrito')) }})</h5>
                <hr class="my-3 text-muted">
                <div class="table-responsive mb-4">
                    <table class="table">
                        <thead class="bg-light">
                            <tr>
                                <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Producto</strong></th>
                                <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Precio</strong></th>
                                <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Cantidad</strong></th>
                                <th class="p-3 border-0" scope="col"><strong class="text-uppercase">Total</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $total = 0 @endphp
                        @foreach(session('carrito') as $id => $producto)
                            <tr>
                                <td class="p-3 pl-0 border-0" scope="row">
                                    <div class="d-flex align-items-center"><a class="reset-anchor d-block animsition-link" href="#"><img src="https://via.placeholder.com/285x180/?text=Producto" alt="producto" width="70"></a>
                                        <div class="ms-3"><strong class="h6"><a class="reset-anchor animsition-link" href="#">{{$producto['nombre']}}</a></strong></div>
                                    </div>
                                </td>
                                <td class="p-3 align-middle border-0">
                                    <p class="mb-0 small">S/ {{$producto['precio']}}</p>
                                </td>
                                <td class="p-3 align-middle border-0">
                                    {{$producto['cantidad']}}
                                </td>
                                <td class="p-3 align-middle border-0">
                                    <p class="mb-0 small">S/ {{$producto['total']}}</p>
                                </td>
                            </tr>
                            @php $total += $producto['total'] @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- INICIO DETALLE PEDIDO -->
            <div class="col-12 col-md-5 col-lg-4 offset-lg-1">
                <!-- Heading -->
                <h5 class="mb-4 fw-bold">Detalles de Envío</h5>
                <!-- Divider -->
                <hr class="my-3 text-muted">
                <p><strong>Persona de contacto:</strong> {{session('venta')['nombres']}} {{session('venta')['apellidos']}}</p>
                <p><strong>Teléfono de contacto:</strong> {{session('venta')['telefono']}}</p>
                <p><strong>Forma de envío:</strong> {{Util::formaEnvio(session('venta')['envio'])}}</p>
                <p><strong>Dirección de entrega:</strong> {{session('venta')['direccion']}}</p>
                <p><strong>Forma de pago:</strong> {{Util::getFormaPago(session('venta')['pago'])}}</p>
                <hr class="my-3 text-muted">
                <!-- Totales -->
                <div class="card mb-5 bg-light border-0">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-light">
                                <div class="d-flex justify-content-between my-2">
                                <span>Subtotal</span> <span class="ml-auto font-size-sm">S/ {{ number_format($total*0.82,2) }}</span>
                                </div>
                            </li>
                            <li class="list-group-item bg-light">
                                <div class="d-flex justify-content-between my-2">
                                <span>IGV</span> <span class="ml-auto font-size-sm">S/ {{ number_format($total*0.18,2) }}</span>
                                </div>
                            </li>
                            <li class="list-group-item bg-light">
                                <div class="d-flex justify-content-between my-2">
                                <span>Delivery</span> <span class="ml-auto font-size-sm">S/ 0.00</span>
                                </div>
                            </li>
                            <li class="list-group-item bg-light">
                                <div class="d-flex justify-content-between fs-5 fw-bold my-2">
                                <span>Total</span> <span class="ml-auto">S/ {{ number_format($total,2) }}</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-grid gap-2">              
                @if($init_point)
                    <a href="{{ $init_point }}" class="btn btn-danger py-3">Pagar en Línea</a>
                @else
                    <a href="/pago/completado" class="btn btn-danger py-3">Realizar Compra</a>
                @endif
                    <a href="/pago" class="btn btn-secondary py-3">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection