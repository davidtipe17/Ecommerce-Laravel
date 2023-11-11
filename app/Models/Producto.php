<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'url_seo',
        'descripcion',
        'imagen',
        'precio',
        'portada',
        'stock',
        'categoria_id',
    ];

    public function categoria(){
        // Este producto pertenece a una categoría
        return $this->belongsTo(Categoria::class);
    }
}
