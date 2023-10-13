<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>Detalle Pedido</title>
    <style>
    body {
        font-family: sans-serif;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    table, th, td {
        border: 1px solid #5c636a;
    }
    th, td {
        padding: 5px;
    }
    th {
        background-color: #5c636a;
        color: #FFF;
    }
    </style>
</head>
<body>
    <h1>Detalle del Pedido</h1>
    <table>
        <thead>
            <tr>
                <th style="text-align:left">Nro Pedido:</th>
                <th style="text-align:left">Fecha de envío:</th>
                <th style="text-align:left">Estado:</th>
                <th style="text-align:left">Monto del pedido:</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ sprintf('%08d', $pedido->id) }}</td>
                <td>{{ Util::formatoFecha($pedido->fecha_venta) }}</td>
                <td>{{ Util::formatoEstado($pedido->estado) }}</td>
                <td>S/ {{ number_format($pedido->total,2) }}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedido->venta_productos as $detalle)
            <tr>
                <td>{{ $detalle->producto->nombre }}</td>
                <td style="text-align:right">S/ {{ number_format($detalle->precio,2) }}</td>
                <td style="text-align:center">{{ $detalle->cantidad }}</td>
                <td style="text-align:right">S/ {{ number_format($detalle->total,2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>