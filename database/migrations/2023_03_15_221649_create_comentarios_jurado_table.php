<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosJuradoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios_jurado', function (Blueprint $table) {
            $table->mediumIncrements('id')->unsigned();
            $table->unsignedmediumInteger('libro_id');
            $table->text('comentario');
            $table->dateTime('fecha_comentario', 0);
            $table->foreignId('user_id')->references('id')->on('users');


            $table->foreign('libro_id')->references('id')->on('libros_participantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios_jurado');
    }
}
