<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;

    public function productos(){
        // Esta categoría tiene muchos productos
        return $this->hasMany(Producto::class);
    }
}
