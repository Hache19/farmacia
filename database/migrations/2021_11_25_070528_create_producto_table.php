<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id('idproducto');
            $table->unsignedBigInteger('idpresentacion');
            $table->unsignedBigInteger('idtipo_producto');
            $table->unsignedBigInteger('idlaboratorio');
            $table->string('nombre_producto');
            $table->string('descripcion');
            $table->integer('precio');
            $table->foreign('idpresentacion')->references('idpresentacion')->on('presentacion');
            $table->foreign('idtipo_producto')->references('idtipo_producto')->on('tipoproducto');
            $table->foreign('idlaboratorio')->references('idlaboratorio')->on('laboratorio');
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
        Schema::dropIfExists('producto');
    }
}
