<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAlterPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuarios');

            $table->unsignedInteger('id_estado');
            $table->foreign('id_estado')
                ->references('id')
                ->on('estados');

            $table->unsignedInteger('id_producto');
            $table->foreign('id_producto')
                ->references('id')
                ->on('productos');

            $table->unsignedInteger('id_insumo');
            $table->foreign('id_insumo')
                ->references('id')
                ->on('insumos');

        });
    }

    /**
     * PPP
     */
    public function down()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            //
        });
    }
}
