<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'id' => '1',
            'nombre' => 'Diseño Web',
            'url_seo' => 'diseno-web',
        ]);
        DB::table('categorias')->insert([
            'id' => '2',
            'nombre' => 'Frontend',
            'url_seo' => 'frontend',
        ]);
        DB::table('categorias')->insert([
            'id' => '3',
            'nombre' => 'Backend',
            'url_seo' => 'backend',
        ]);
        DB::table('categorias')->insert([
            'id' => '4',
            'nombre' => 'Base de datos',
            'url_seo' => 'base-de-datos',
        ]);
    }
}
