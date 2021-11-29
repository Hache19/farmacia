<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->id('idventa');
            $table->unsignedBigInteger('idclientes');
            $table->unsignedBigInteger('idpersonal');
            $table->date('fecha_venta');
            $table->integer('total_venta');
            $table->foreign('idclientes')->references('idclientes')->on('clientes');
            $table->foreign('idpersonal')->references('idpersonal')->on('personal');
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
        Schema::dropIfExists('venta');
    }
}
