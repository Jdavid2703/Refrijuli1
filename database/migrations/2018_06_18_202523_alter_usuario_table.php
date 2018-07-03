<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->unsignedInteger('tipo_documentos_id');
            $table->foreign('tipo_documentos_id')
                ->references('id')
                ->on('tipo_documentos');

            $table->unsignedInteger('rols_id')->default('2');
            $table->foreign('rols_id')
                ->references('id')
                ->on('rols');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            //
        });
    }
}
