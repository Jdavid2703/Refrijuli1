<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_entrega');
            $table->date('fecha_pedido');
            $table->string('direccion_entrega');
            $table->time('hora_entrega');
            $table->integer('total_monto');
            //foranea
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuarios');
            //termina
            $table->unsignedInteger('id_estado');
            $table->foreign('id_estado')
                ->references('id')
                ->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
