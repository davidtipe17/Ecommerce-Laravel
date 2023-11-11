<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Admin\CategoriaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/catalogo/{url}', [CatalogoController::class, 'index'])->name('catalogo');
Route::get('/producto/{url}', [CatalogoController::class, 'detalle'])->name('producto');
Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');
Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::get('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');

Route::get('/registro', [RegistroController::class, 'index'])->name('login');
Route::post('/registro/login', [RegistroController::class, 'login'])->name('registro.login');
Route::get('/registro/logout', [RegistroController::class, 'logout'])->name('registro.logout');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/pago', [PagoController::class, 'index'])->name('pago.index');
    Route::post('/pago/resumen', [PagoController::class, 'resumen'])->name('pago.resumen');
    Route::get('/pago/completado', [PagoController::class, 'completado'])->name('pago.completado');
});
Route::group(['prefix'=>'/cliente','middleware'=>'auth'], function(){
    Route::get('/historial', [ClienteController::class, 'index'])->name('cliente.historial');
    Route::get('/pedido/{id}', [ClienteController::class, 'pedido'])->name('cliente.pedido');
});//descargar excel
Route::get('/libros/exportar/excel', [ClienteController::class, 'exportarExcel'])->name('historial.exportar.excel');
// Rutas de acceso para el BackOffice
Route::prefix('/admin')->group(function(){
    Route::get('', [LoginController::class, 'index'])->name('admin.index'); //-> /admin
    Route::post('/ingresar', [LoginController::class, 'ingresar'])->name('admin.ingresar'); //-> /admin/ingresar
    Route::get('/salir', [LoginController::class, 'salir'])->name('admin.salir'); //-> /admin/salir
    // Aplicamos la regla de autenticaión para el guard "admin"
    Route::middleware(['auth:admin'])->group(function(){
        Route::get('/dash', [DashController::class, 'index'])->name('admin.producto'); //-> /admin/ingresar
        Route::get('/productos/nuevo', [DashController::class, 'nuevo'])->name('producto.nuevo'); //-> /admin/nuevo
        Route::post('/productos/guardar', [DashController::class, 'guardar'])->name('producto.guardar');
        Route::post('clients/upload-masive', [DashController::class, 'saveMasive'])->name('producto.guardar.masive');

    });
});
