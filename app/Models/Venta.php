<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public $timestamps = false;

    public function venta_productos(){
        // Esta venta tiene muchos productos
        return $this->hasMany(VentaProducto::class);
    }
}
