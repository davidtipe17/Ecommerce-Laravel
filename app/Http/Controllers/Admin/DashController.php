<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Imports\ProductoImport;
use Maatwebsite\Excel\Facades\Excel;

class DashController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('admin.dash', compact('productos'));
    }
	public function nuevo(){
    	$productos = Producto::all();
    	$categorias = Categoria::all();
    	return view('admin.nuevo', compact('productos','categorias'));
	}
	public function guardar(Request $request){
    	$producto = new Producto;
    	$producto->nombre = $request->nombre;
    	$producto->categoria_id = $request->categoria;
    	$producto->url_seo = $request->url_seo;
    	$producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->portada = $request->portada;
        $producto->stock = $request->stock;
    	// Recuperamos el archivo adjunto llamado imagen
    	$archivo = $request->file('imagen');
    	if($archivo){ // Enviaron el archivo
        	// Obtenemos el nombre original del achivo
        	$nombreArchivo = 'book_'.$archivo->getClientOriginalName();
        	$libro->imagen = $nombreArchivo;
        	// Guardamos el archivo en el disco public
        	$archivo->storeAs('libros', $nombreArchivo);
    	}
    	$producto->save();
    	return redirect()->route('admin.producto')->with('mensaje','Registro creado');
	}
    public function saveMasive(Request $request)
    {
       
        Excel::import(new ProductoImport(), $request->file('importexcel'));
        return redirect()->route('admin.producto')->with('mensaje','Importacion correcta');
        // return response()->json(['status' => 'ok']);
    }

    
}
