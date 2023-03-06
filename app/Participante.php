<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    // Propiedades del modelo
    public $timestamps = false;
    
    protected $table = 'participantes';
    protected $fillable = ['nombre', 'correo'];
    protected $primarykey = 'id';
}
