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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('telefono');
            $table->string('encargado');
            $table->string('tel_encargado');
            $table->unsignedBigInteger('ejecutivo');
            $table->unsignedBigInteger('unidades');
            $table->text('observaciones');
            $table->timestamps();

            $table->foreign('ejecutivo')->references('name')->on('users');
            $table->foreign('unidades')->references('unidad')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
