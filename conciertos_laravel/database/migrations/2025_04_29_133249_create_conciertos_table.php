<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConciertosTable extends Migration
{
    public function up()
    {
        Schema::create('conciertos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            // Relaciones: cada concierto se asocia a un grupo, un espacio y un manager
            $table->unsignedBigInteger('grupo_id');
            $table->unsignedBigInteger('espacio_id');
            $table->unsignedBigInteger('manager_id');
            // Ejemplo de campo para la fecha del concierto
            $table->date('fecha')->nullable();
            $table->timestamps();

            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
            $table->foreign('espacio_id')->references('id')->on('espacios')->onDelete('cascade');
            $table->foreign('manager_id')->references('id')->on('managers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('conciertos');
    }
}
