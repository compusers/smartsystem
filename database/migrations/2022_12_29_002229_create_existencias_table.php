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
        Schema::create('existencias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('movimiento');
            $table->string('concepto');
            $table->string('proveedor');
            $table->unsignedBigInteger('almacen');
            $table->unsignedBigInteger('codigo_pro');
            $table->unsignedBigInteger('desc_pro');
            $table->unsignedBigInteger('cat_pro');
            $table->string('stock');
            $table->string('ubicacion');
            $table->text('observaciones');

            $table->foreign('almacen')->references('nombre')->on('almacens');
            $table->foreign('codigo_pro')->references('codigo')->on('productos');
            $table->foreign('desc_pro')->references('descripcion')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('existencias');
    }
};
