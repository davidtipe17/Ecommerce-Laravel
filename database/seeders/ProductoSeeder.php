<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'categoria_id' => '1',
            'nombre' => 'pantalon1',
            'url_seo' => 'pantalon1',
            'descripcion' => 'Pantalon 1 para salir',
            'imagen' => 'pantalon1.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '1',
            'nombre' => 'pantalon2',
            'url_seo' => 'pantalon2',
            'descripcion' => 'Pantalon 3 para salir',
            'imagen' => 'pantalon3.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '1',
            'nombre' => 'pantalon4',
            'url_seo' => 'pantalon4',
            'descripcion' => 'Pantalon 4 para salir',
            'imagen' => 'pantalon4.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '1',
            'nombre' => 'pantalon4',
            'url_seo' => 'pantalon4',
            'descripcion' => 'Pantalon 4 para salir',
            'imagen' => 'pantalon4.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '2',
            'nombre' => 'polo1',
            'url_seo' => 'polo1',
            'descripcion' => ' polo 1 para salir',
            'imagen' => 'polo1.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '2',
            'nombre' => 'polo2',
            'url_seo' => 'polo2',
            'descripcion' => 'polo 2 para salir',
            'imagen' => 'polo2.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '2',
            'nombre' => 'polo3',
            'url_seo' => 'polo3',
            'descripcion' => 'polo 3 para salir',
            'imagen' => 'polo3.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '2',
            'nombre' => 'polo4',
            'url_seo' => 'polo4',
            'descripcion' => 'polo 4 para salir',
            'imagen' => 'polo4.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '2',
            'nombre' => 'polo5',
            'url_seo' => 'polo5',
            'descripcion' => 'polo 5 para salir',
            'imagen' => 'polo5.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '3',
            'nombre' => 'zapatillas1',
            'url_seo' => 'zapatillas1',
            'descripcion' => 'zapatillas 1 para salir',
            'imagen' => 'zapatillas1.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '3',
            'nombre' => 'zapatillas2',
            'url_seo' => 'zapatillas2',
            'descripcion' => 'zapatillas 2 para salir',
            'imagen' => 'zapatillas2.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '3',
            'nombre' => 'zapatillas3',
            'url_seo' => 'zapatillas3',
            'descripcion' => 'zapatillas 3 para salir',
            'imagen' => 'zapatillas3.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '3',
            'nombre' => 'zapatillas4',
            'url_seo' => 'zapatillas4',
            'descripcion' => 'zapatillas 4 para salir',
            'imagen' => 'zapatillas4.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '4',
            'nombre' => 'ropa_interior1',
            'url_seo' => 'ropa_interior1',
            'descripcion' => 'ropa_interior 1 para salir',
            'imagen' => 'ropa_interior1.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '4',
            'nombre' => 'ropa_interior2',
            'url_seo' => 'ropa_interior2',
            'descripcion' => 'ropa_interior 2 para salir',
            'imagen' => 'ropa_interior2.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '4',
            'nombre' => 'ropa_interior3',
            'url_seo' => 'ropa_interior3',
            'descripcion' => 'ropa_interior 3 para salir',
            'imagen' => 'ropa_interior3.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '4',
            'nombre' => 'ropa_interior4',
            'url_seo' => 'ropa_interior4',
            'descripcion' => 'ropa_interior 4 para salir',
            'imagen' => 'ropa_interior4.jpg',
            'precio' => '250',
            'portada' => '1',
            'stock' => '10'
        ]);
    }
}
