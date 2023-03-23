<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->mediumIncrements('id')->unsigned()->comment('Es la llave primaria de la tabla');
            $table->foreignId('libro_id')->constrained('libros_participantes')->comment('Almacena la FK del ID de los libros_partipantes');
            $table->text('comentario')->comment('Es el comentario sobre el libro del participante');
            $table->dateTime('fecha_comentario', 0)->comment('Es la fecha de cuando hace el comentario sobre el libro del participante');
            $table->foreignId('user_id')->constrained('users')->comment('Almacena la FK del ID de los users');
        });
        DB::statement("ALTER TABLE libros_participantes COMMENT 'Almacena los comentarios y las fechas relacionando con el ID del participante'");
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
