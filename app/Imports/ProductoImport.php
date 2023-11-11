<?php

namespace App\Imports;

use App\Models\Producto;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductoImport implements ToModel, WithHeadingRow
{
    // /**
    // * @param array $row
    // *
    // * @return \Illuminate\Database\Eloquent\Model|null
    // */
    public function model(array $row)
    {
        if (!empty($row['nombre'])){

            $productsCarga = session()->get('productsCarga');
            $existingClient = Producto::where('nombre', $row['nombre'])->first();

            if($existingClient){
                $productsCarga[] = $existingClient->id;
                Producto::where('id', $existingClient->id)->update([
                    'nombre' => $row['nombre'],
                    'url_seo' => $row['url_seo'],
                    'descripcion' => $row['descripcion'],
                    'imagen' => $row['imagen'],
                    'precio' => $row['precio'],
                    'portada' => $row['portada'],
                    'stock' => $row['stock'],
                    'categoria_id' => $row['categoria_id'],
                ]);
            }else {

                return new Producto([
                    'nombre' => $row['nombre'],
                    'url_seo' => $row['url_seo'],
                    'descripcion' => $row['descripcion'],
                    'imagen' => $row['imagen'],
                    'precio' => $row['precio'],
                    'portada' => $row['portada'],
                    'stock' => $row['stock'],
                    'categoria_id' => $row['categoria_id'],
                ]);
            }
        }
       
    }
}
