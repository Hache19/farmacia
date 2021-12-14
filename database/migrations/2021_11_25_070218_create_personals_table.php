<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->bigIncrements('idpersonal');
            $table->unsignedBigInteger('idrol');
            $table->string('nombre_personal');
            $table->string('apellido_personal');
            $table->integer('ci');
            $table->date('fecha_nac');
            $table->integer('celular');
            $table->string('genero');
            $table->timestamps();
            
            $table->foreign('idrol')->references('idrol')->on('rols');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personals');
    }
}
