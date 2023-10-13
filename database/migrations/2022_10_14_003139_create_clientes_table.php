<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',45);
            $table->string('apellidos',45);
            $table->string('dni',10);
            $table->string('telefono',25);
            $table->string('email',45);
            $table->string('password',150);
            $table->string('direccion',100);
            $table->timestamp('fecha_registro')->useCurrent();
            $table->char('estado',1)->default('A')->comment('A:activo | I:inactivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
