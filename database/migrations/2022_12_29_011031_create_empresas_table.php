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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa');
            $table->string('nombre_ruta');
            $table->string('estado');
            $table->string('municipio');
            $table->text('observaciones');
            $table->unsignedBigInteger('encargado');
            $table->unsignedBigInteger('tel_encargado');

            $table->foreign('encargado')->references('nombre')->on('clientes');
            $table->foreign('tel_encargado')->references('telefono')->on('clientes');
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
        Schema::dropIfExists('empresas');
    }
};
