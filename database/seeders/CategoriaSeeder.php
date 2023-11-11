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
            'nombre' => 'pants',
            'url_seo' => 'pants',
        ]);
        DB::table('categorias')->insert([
            'id' => '2',
            'nombre' => 'poles',
            'url_seo' => 'poles',
        ]);
        DB::table('categorias')->insert([
            'id' => '3',
            'nombre' => 'sneakers',
            'url_seo' => 'sneakers',
        ]);
        DB::table('categorias')->insert([
            'id' => '4',
            'nombre' => 'underwear',
            'url_seo' => 'underwear',
        ]);
    }
}
