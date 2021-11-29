<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoventaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productoventa', function (Blueprint $table) {
            $table->id('idproducto_venta');
            $table->unsignedBigInteger('idproducto');
            $table->unsignedBigInteger('idventa');
            $table->integer('cantidad');
            $table->integer('sub_total');
            $table->foreign('idproducto')->references('idproducto')->on('producto');
            $table->foreign('idventa')->references('idventa')->on('venta');
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
        Schema::dropIfExists('productoventa');
    }
}
