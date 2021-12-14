<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes', function (Blueprint $table) {
            $table->bigIncrements('idlote');
            $table->unsignedBigInteger('idproducto');
            $table->unsignedBigInteger('idproveedor');
            $table->integer('stock');
            $table->date('vencimiento');
            $table->integer('precio_compra');
            $table->foreign('idproducto')->references('idproducto')->on('productos');
            $table->foreign('idproveedor')->references('idproveedor')->on('proveedors');
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
        Schema::dropIfExists('lotes');
    }
}
