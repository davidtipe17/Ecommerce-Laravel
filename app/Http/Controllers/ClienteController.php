<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Exports\ProductosExport;
use Maatwebsite\Excel\Facades\Excel;



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

    public function exportarExcel(){
        $cliente = auth()->user();
        return (new ProductosExport($cliente->id))->download('reporte_producto.xlsx');
	}

}
