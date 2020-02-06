<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineasProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas_productos', function (Blueprint $table) {
            $table->bigIncrements('idLineaProductos');
            $table->bigInteger('IdProducto')->unsigned();
            $table->bigInteger('IdFactura')->unsigned();
            $table->bigInteger('Catidad');
            $table->decimal('PrecioTotal',9,6);               
            $table->timestamps();
        });

        Schema::table('lineas_productos', function($table) {
            $table->foreign('IdProducto')->references('IdProducto')->on('productos')->onDelete('cascade');
            $table->foreign('IdFactura')->references('IdFactura')->on('facturas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineas_productos');
    }
}
