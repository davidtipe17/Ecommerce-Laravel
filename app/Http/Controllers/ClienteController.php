<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class ClienteController extends Controller
{
    public function index(){
        $cliente = auth()->user();
        $pedidos = Venta::where('cliente_id',$cliente->id)->get();
        return view('web.cliente_historial',compact('pedidos'));
    }

    public function pedido($id){
        $cliente = auth()->user();
        //Buscamos el pedido cuyo id es igual a $id,
        //y pertenece al cliente logueado
        $pedido = Venta::where('id',$id)->where('cliente_id',$cliente->id)->first();
        return view('web.cliente_pedido',compact('pedido'));
    }
}
