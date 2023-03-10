<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentarioJurado extends Model
{
    //
    public $timestamps = false;

    protected $table = 'comentarios_jurado';
    protected $primarykey = 'id';
    protected $fillable = ['libro_id', 'comentario', 'fecha_comentario', 'user_id'];
}
