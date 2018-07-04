<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nombre');
            $table->multiLineString('descripcion');
            $table->integer('cantidad');
            $table->integer('stock_min');
            $table->integer('stock_max');
            $table->integer('precio_unitario');
            $table->integer('disponibilidad');
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insumos');
    }
}
