<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class CatalogoController extends Controller
{
    public function index($url){
        //Obtengo la categoria cuyo campo url_seo es el valor del parametro de la $ruta
        $categoria  = Categoria::where('url_seo',$url)->where('estado','A')->first();
        return view('web.catalogo',compact('categoria'));
    }

    public function detalle($url){
        //Obtengo el producto cuyo campo url_seo es el valor del parametro de la $ruta
        //y cuyo estado es activo.
        $producto  = Producto::where('url_seo',$url)->where('estado','A')->first();
        return view('web.detalle',compact('producto'));
    }
}
