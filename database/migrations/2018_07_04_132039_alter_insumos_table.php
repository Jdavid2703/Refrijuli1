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



        });
    }


    public function down()
    {
        Schema::table('insumos', function (Blueprint $table) {
            //
        });
    }
}
