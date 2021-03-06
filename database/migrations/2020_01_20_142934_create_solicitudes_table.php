<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_oferta_trabajo');
            $table->string('estado');
            $table->index(['id_usuario', 'id_oferta_trabajo']);
            $table->boolean('visible_usuario');
            $table->boolean('visible_empresa');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_oferta_trabajo')->references('id')->on('oferta_trabajos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
