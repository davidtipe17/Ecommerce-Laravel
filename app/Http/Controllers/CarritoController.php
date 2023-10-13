<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function index(){
        return view('web.carrito');
    }
    
    public function agregar(Request $request){
        //carrito[idproducto]   = [nombre,      imagen, precio, cantidad,   total]
        //carrito[651]          = [curso php,   php.jpg,   600,        3,   1800];
        //carrito[415]          = [curso.net,   net.jpg,   800,        2,   1600];
        if($request->has('id')){
            //Recupero los articulos del carrito en sesión y los guardo en la variable $carrito
            $carrito = session('carrito');
            $id = $request->id; //Recupero el id del producto a agregar
            // Busco los datos del producto por su id
            $prod = Producto::find($id);
            $contenido = [
                'nombre' => $prod->nombre,
                'imagen' => $prod->imagen,
                'url_seo' => $prod->url_seo,
                'precio' => $prod->precio,
                'cantidad' => $request->cantidad,
                'total' => $prod->precio * $request->cantidad
            ];
            //Le agremos en la posición del id, el contenido al carrito
            $carrito[$id] = $contenido;
            //Asigno el valor de $carrito a la variable en sesión.
            $request->session()->put('carrito',$carrito);
        }
        return redirect('/carrito');
    }

    public function eliminar($idprod){ //<= eliminar .net $idprod=415
        //carrito[idproducto]   = [nombre,      imagen, precio, cantidad,   total]
        //carrito[651]          = [curso php,   php.jpg,   600,        3,   1800];
        //carrito[415]          = [curso.net,   net.jpg,   800,        2,   1600];
        //carrito[612]          = [django,   dajngo.jpg,  1200,        1,   1200];
        $carrito = session('carrito');
        $nCarrito = [];
        // $key toma el valor del indice del elemento del carrito
        foreach($carrito as $key => $producto){
            //Verifico que le indice sea distinto al valor de $idprod
            //Si es distinto lo pasa a $nCarrito
            if($key!=$idprod){
                $nCarrito[$key] = $producto;
            }
        }
        // $nCarrito = [curso php, django]
        // Asignas el nuevo contenido de $nCarrito en la variable de la sesión
        session(['carrito'=>$nCarrito]);
        return redirect('/carrito');
    }
}
