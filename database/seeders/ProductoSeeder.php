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
            'nombre' => 'Curso de HTML',
            'url_seo' => 'curso-de-html',
            'descripcion' => 'En este curso aprenderás el código HTML.',
            'imagen' => 'curso-html.jpg',
            'precio' => '250',
            'portada' => '1',
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '1',
            'nombre' => 'Curso de CSS',
            'url_seo' => 'curso-de-css',
            'descripcion' => 'En este curso aprenderás aplicar diseño con CSS.',
            'imagen' => 'curso-css.jpg',
            'precio' => '250',
            'portada' => '0',
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '1',
            'nombre' => 'Diseño Web Avanzado',
            'url_seo' => 'diseno-web-avanzado',
            'descripcion' => 'En este curso aprenderás a desarrollar una sitio web completo.',
            'imagen' => 'diseno-web-avanzado.jpg',
            'precio' => '300',
            'portada' => '1',
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '2',
            'nombre' => 'React.js',
            'url_seo' => 'reactjs',
            'descripcion' => 'En este curso aprenderás a desarrollar un app con React.js',
            'imagen' => 'reactjs.jpg',
            'precio' => '800',
            'portada' => '1',
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '2',
            'nombre' => 'Angular',
            'url_seo' => 'angular',
            'descripcion' => 'En este curso aprenderás a desarrollar un app con Angular',
            'imagen' => 'angular.jpg',
            'precio' => '800',
            'portada' => '1',
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '3',
            'nombre' => 'Node.js',
            'url_seo' => 'nodejs',
            'descripcion' => 'En este curso aprenderás a desarrollar un app con Node.js',
            'imagen' => 'nodejs.jpg',
            'precio' => '1200',
            'portada' => '1',
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '3',
            'nombre' => 'PHP con Laravel',
            'url_seo' => 'php-con-laravel',
            'descripcion' => 'En este curso aprenderás a desarrollar un app con Laravel',
            'imagen' => 'laravel.jpg',
            'precio' => '1200',
            'portada' => '1',
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '3',
            'nombre' => 'Python',
            'url_seo' => 'python',
            'descripcion' => 'En este curso aprenderás a desarrollar un app con Python',
            'imagen' => 'python.jpg',
            'precio' => '1200',
            'portada' => '0',
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '4',
            'nombre' => 'MySQL',
            'url_seo' => 'mysql',
            'descripcion' => 'En este curso aprenderás a gestionar la base de datos MySQL',
            'imagen' => 'mysql.jpg',
            'precio' => '900',
            'portada' => '1',
        ]);
        DB::table('productos')->insert([
            'categoria_id' => '4',
            'nombre' => 'MongoDB',
            'url_seo' => 'mongodb',
            'descripcion' => 'En este curso aprenderás a gestionar la base de datos MongoDB',
            'imagen' => 'mongodb.jpg',
            'precio' => '900',
            'portada' => '1',
        ]);
    }
}
