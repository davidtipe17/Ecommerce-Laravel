<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VentaProducto extends Model
{
    public $timestamps = false;

    public function producto(){
        // Este registro pertenece a un producto
        return $this->belongsTo(Producto::class);
    }
}
