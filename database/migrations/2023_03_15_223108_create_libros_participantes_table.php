<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros_participantes', function (Blueprint $table) {
            $table->mediumIncrements('id')->unsigned();
            $table->foreingId('participantes_id')->references('id')->on('paeticipantes');
            $table->string('nombre_libro');
            $table->string('ruta_archivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros_participantes');
    }
}
