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
            $table->foreingId('libro_id')->references('id')->on('libros_participantes');
            $table->char('comentario', 250);
            $table->
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
        Schema::dropIfExists('comentarios_jurado');
    }
}
