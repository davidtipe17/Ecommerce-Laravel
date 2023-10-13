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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->references('id')->on('categorias');
            $table->string('nombre',100);
            $table->string('url_seo',200);
            $table->text('descripcion');
            $table->string('imagen',45)->nullable()->default('default.jpg');
            $table->float('precio');
            $table->char('portada',1)->comment('1:activo | 0:inactivo');
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
        Schema::dropIfExists('productos');
    }
};
