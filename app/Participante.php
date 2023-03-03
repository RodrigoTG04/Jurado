<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    // Propiedades del modelo
    public $timestamps = false;
    
    protected $table = 'participante';
    protected $fillable = ['nombre', 'correo'];
    protected $primarykey = 'id';
}
