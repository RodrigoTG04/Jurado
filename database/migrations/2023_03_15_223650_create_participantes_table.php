<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->mediumIncrements('id')->unsigned()->comment('Es la llave primaria de la tabla');
            $table->string('folio', 100)->nullable(true)->default('')->comment('Es el folio del participante');
            $table->string('pseudonimo')->nullable(true)->default('')->comment('Es el nombre del participante');
            $table->date('fecha_registro')->comment('Es la fecha de registro del participante');
        });
        DB::statement("ALTER TABLE participantes COMMENT 'Almacena los folios, nombres y fechas relacionando con el ID del participante'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participantes');
    }
}
