<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->id('nPerCodigo');
            $table->char('cPerApellido', 50);
            $table->char('cPerNombre', 50);
            $table->string('cPerDireccion', 100);
            $table->date('dPerFecNac');
            $table->integer('nPerEdad');
            $table->decimal('nPerSueldo', 6, 2);
            $table->string('cPerRnd', 50);
            $table->char('nPerEstado', 1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('persona');
    }
}