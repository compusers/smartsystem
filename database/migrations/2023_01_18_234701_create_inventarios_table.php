<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->date('fecha');
            $table->string('movimiento');
            $table->string('concepto');
            $table->string('proveedor');
            $table->string('almacen');
            $table->string('cod_producto');
            $table->string('des_producto');
            $table->string('cat_producto');
            $table->string('stock');
            $table->string('ubicacion');
            $table->text('observaciones');

            $table->foreign('proveedor')->references('nombre')->on('proveedores');
            $table->foreign('almacen')->references('nombre')->on('almacens');
            $table->foreign('cod_producto')->references('codigo')->on('productos');
            $table->foreign('des_producto')->references('descripcion')->on('productos');
            $table->foreign('cat_producto')->references('categoria')->on('productos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
};
