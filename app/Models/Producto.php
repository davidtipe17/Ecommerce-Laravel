<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps = false;

    public function categoria(){
        // Este producto pertenece a una categoría
        return $this->belongsTo(Categoria::class);
    }
}
