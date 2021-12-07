<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->id('idpersonal');
            $table->unsignedBigInteger('idrol');
            $table->string('nombre_personal');
            $table->string('apellido_personal');
            $table->integer('ci');
            $table->date('fecha_nac');
            $table->integer('celular');
            $table->string('genero');
            $table->foreign('idrol')->references('id')->on('rols');
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
        Schema::dropIfExists('personal');
    }
}
