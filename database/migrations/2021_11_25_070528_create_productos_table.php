<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('idproducto');
            $table->unsignedBigInteger('idpresentacion');
            $table->unsignedBigInteger('idtipoproducto');
            $table->unsignedBigInteger('idlaboratorio');
            $table->string('nombre_producto');
            $table->string('descripcion');
            $table->integer('precio');
            $table->foreign('idpresentacion')->references('idpresentacion')->on('presentacions');
            $table->foreign('idtipoproducto')->references('idtipoproducto')->on('tipoproductos');
            $table->foreign('idlaboratorio')->references('idlaboratorio')->on('laboratorios');
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
        Schema::dropIfExists('productos');
    }
}
