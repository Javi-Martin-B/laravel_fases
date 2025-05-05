<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspacioGrupoTable extends Migration
{
    public function up()
    {
        Schema::create('espacio_grupo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grupo_id');
            $table->unsignedBigInteger('espacio_id');
            $table->timestamps();

            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
            $table->foreign('espacio_id')->references('id')->on('espacios')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('espacio_grupo');
    }
}
