<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class InicioController extends Controller
{
    public function index(){
        //Obtenetenos todos los productos en portada
        $lista = Producto::where('portada','1')->get();
        $data = [
            'lista' => $lista
        ];
        return view('web.inicio',$data);
    }
}
