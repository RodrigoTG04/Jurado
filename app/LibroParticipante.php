<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LibroParticipante extends Model
{
    //
    public $timestamps = false;

    protected $table = 'libros_participantes';
    protected $primarykey = 'id';
    protected $fillable = ['participante_id', 'nombre_libro', 'ruta_archivo'];
}
