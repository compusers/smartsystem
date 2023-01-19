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
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nombre_cliente');
            $table->string('telefono_cliente');
            $table->string('encargado_cliente');
            $table->string('tel_enc_cliente');
            $table->string('ejecutivo_cliente');
            $table->string('empresa');
            $table->string('ruta_empresa');
            $table->string('estado_empresa');
            $table->string('municipio_empresa');
            $table->string('unidad');
            $table->string('marca');
            $table->string('modelo');
            $table->text('observaciones');

            $table->foreign('nombre_cliente')->references('nombre')->on('clientes');
            $table->foreign('telefono_cliente')->references('telefono')->on('clientes');
            $table->foreign('encargado_cliente')->references('encargado')->on('clientes');
            $table->foreign('tel_enc_cliente')->references('tel_encargado')->on('clientes');
            $table->foreign('ejecutivo_cliente')->references('ejecutivo')->on('clientes');
            $table->foreign('empresa')->references('nombre_empresa')->on('empresas');
            $table->foreign('ruta_empresa')->references('nombre_ruta')->on('empresas');
            $table->foreign('estado_empresa')->references('estado')->on('empresas');
            $table->foreign('municipio_empresa')->references('municipio')->on('empresas');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidades');
    }
};
