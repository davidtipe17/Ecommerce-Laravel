<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombres' => 'Karen',
            'apellidos' => 'Mendoza',
            'dni' => '11111111',
            'telefono' => '999999999',
            'password' => Hash::make('123456'),
            'email' => 'kmendoza@mail.com',
            'direccion' => 'Calle Las Gaviotas 123 - Pueblo Libre',
        ]);

        DB::table('clientes')->insert([
            'nombres' => 'Carlos',
            'apellidos' => 'Linares',
            'dni' => '22222222',
            'telefono' => '777777777',
            'password' => Hash::make('123456'),
            'email' => 'clinares@mail.com',
            'direccion' => 'Av. Santa Rosa 951 - Los Olivos',
        ]);
    }
}
