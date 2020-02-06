<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('idFactura');
            $table->decimal('importe',9,6);
            $table->decimal('porcentaImpuesto',4,2);
            $table->bigInteger('IdCliente')->unsigned();
            $table->dateTime('FechaFactura');
            $table->timestamps();
        });

        Schema::table('facturas', function($table) {
            $table->foreign('IdCliente')->references('IdCliente')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
