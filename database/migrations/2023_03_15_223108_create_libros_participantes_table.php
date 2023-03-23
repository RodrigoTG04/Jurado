<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->mediumIncrements('id')->unsigned()->comment('Es la llave primaria de la tabla');
            $table->foreignId('participante_id')->constrained('participantes')->comment('Almacena la FK del ID del participante');
            $table->string('nombre_libro')->nullable(true)->default('')->comment('Es el nombre del archivo subido por el participante');
            $table->string('ruta_archivo')->nullable(true)->default('')->comment('Es la ruta donde se almacena el archivo en el servidor');
        });
        DB::statement("ALTER TABLE libros_participantes COMMENT 'Almacena los nombres y las rutas de archivos relacionando con el ID del participante'");
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
