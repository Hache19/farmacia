<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productoventas', function (Blueprint $table) {
            $table->bigIncrements('idproductoventa');
            $table->unsignedBigInteger('idproducto');
            $table->unsignedBigInteger('idventa');
            $table->integer('cantidad');
            $table->integer('subtotal');
            $table->foreign('idproducto')->references('idproducto')->on('productos');
            $table->foreign('idventa')->references('idventa')->on('ventas');
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
        Schema::dropIfExists('productoventas');
    }
}
