<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('idventa');
            $table->unsignedBigInteger('idcliente');
            $table->unsignedBigInteger('idpersonal');
            $table->date('fecha_venta');
            $table->integer('total_venta');
            $table->foreign('idcliente')->references('idcliente')->on('clientes');
            $table->foreign('idpersonal')->references('idpersonal')->on('personals');
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
        Schema::dropIfExists('ventas');
    }
}
