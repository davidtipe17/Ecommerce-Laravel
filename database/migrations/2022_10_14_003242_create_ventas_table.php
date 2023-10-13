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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->references('id')->on('clientes');
            $table->string('cliente_nombres',45);
            $table->string('cliente_apellidos',45);
            $table->string('cliente_email',45);
            $table->string('cliente_telefono',45);
            $table->string('direccion_entrega',150);
            $table->float('total');
            $table->string('transaccion',45)->nullable();
            $table->timestamp('fecha_registro')->useCurrent();
            $table->char('estado',1)->comment('P:pendiente | E:entregado | N:anulado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
};
