<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\VentaProducto;
use MercadoPago;

class PagoController extends Controller
{
    public function index(){
        return view("web.pago");
    }

    public function resumen(Request $request){
        $init_point = null;
        $datos = [
            'nombres' => $request->nombres, 
            'apellidos' => $request->apellidos, 
            'telefono' => $request->telefono, 
            'email' => $request->email, 
            'envio' => $request->envio, 
            'pago' => $request->pago, 
            'direccion' => $request->envio=='D' ? $request->direccion : 'Recojo en tienda', 
        ];
        $request->session()->put('venta', $datos);
        if($request->pago=='L'){ // Pago en Línea con MercadoPago
            //Procesamos la venta primero
            $venta = $this->procesarVenta($request); //['id'=>1765, 'total'=>1200];
            // Generamos el pago con MercadoPago
            MercadoPago\SDK::setAccessToken(env('MP_ACCESS_TOKEN'));
            $preference = new MercadoPago\Preference();
            $item = new MercadoPago\Item();
            $item->title = 'Compra Tienda';
            $item->quantity = 1;
            $item->unit_price = $venta['total'];
            $preference->items = array($item);
            $preference->back_urls = array(
                "success" => url("/pago/completado"),
                "failure" => url("/pago/completado"),
                "pending" => url("/pago/completado")
            );
            $preference->auto_return = "approved";
            $preference->external_reference = $venta['id'];
            $preference->save();
            $init_point = $preference->init_point;
        }
        return view("web.pago_resumen", compact('init_point'));
    }

    private function procesarVenta(Request $request){
        $respuesta = null;
        if($request->session()->has('venta')){
            $datosVenta = $request->session()->get('venta');
            $carrito = $request->session()->get('carrito');
            $totalVenta = 0;
            foreach($carrito as $producto){
                $totalVenta += $producto['total'];
            }
            // Creamos la cabecera de la venta
            $venta = new Venta;
            $venta->cliente_id = \Auth::user()->id;
            $venta->cliente_nombres = $datosVenta['nombres'];
            $venta->cliente_apellidos = $datosVenta['apellidos'];
            $venta->cliente_email = $datosVenta['email'];
            $venta->cliente_telefono = $datosVenta['telefono'];
            $venta->direccion_entrega = $datosVenta['direccion'];
            $venta->total = $totalVenta;
            $venta->estado = 'P';
            // Si la venta se registra, guardamos los productos de la venta
            if($venta->save()){
                // Obtenemos el id generado del venta
                $idventa = $venta->id;
                foreach($carrito as $idprod => $producto){
                    $detalle = new VentaProducto;
                    $detalle->venta_id = $idventa;
                    $detalle->producto_id = $idprod;
                    $detalle->precio = $producto['precio'];
                    $detalle->cantidad = $producto['cantidad'];
                    $detalle->total = $producto['total'];
                    $detalle->save();
                }
                $respuesta = [
                    'id' => $idventa,
                    'total' => $totalVenta
                ];
            }
        }
        return $respuesta;
    }

    public function completado(Request $request){
        $venta = false;
        // Verifico si me envia la variable status desde MercadoPago
        if(isset($_GET['status'])){
            $status = $_GET['status'];
            $idventa = $_GET['external_reference'];
            $cod_transaccion = $_GET['payment_id'];
            if($status=='approved'){
                $venta = true;
            }
        }else{
            $datos = $this->procesarVenta($request);
            if(!is_null($datos)){
                $venta = true;
            }
        }
        if($venta){
            $respuesta = [
                'titulo' => 'Compra Completada',
                'mensaje' => 'Tu compra se ha realizado satisfactoriamente'
            ];
        }else{
            $respuesta = [
                'titulo' => 'Ocurrió un error',
                'mensaje' => 'Tu compra no se ha podido realizar'
            ];
        }
        // Eliminamos la venta y el carrito de la sesión
        $request->session()->forget('venta');
        $request->session()->forget('carrito');
        return view("web.completado", compact('respuesta'));
    }
}
