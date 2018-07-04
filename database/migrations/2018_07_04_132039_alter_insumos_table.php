<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('insumos', function (Blueprint $table) {
            $table->unsignedInteger('id_categoria');
            $table->foreign('id_categoria')
                ->references('id')
                ->on('categorias');

            $table->unsignedInteger('id_presentacion');
            $table->foreign('id_presentacion')
                ->references('id')
                ->on('presentaciones');

            $table->unsignedInteger('id_unidad');
            $table->foreign('id_unidad')
                ->references('id')
                ->on('unidades');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('insumos', function (Blueprint $table) {
            //
        });
    }
}
