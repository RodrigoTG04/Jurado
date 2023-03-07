<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    // Propiedades del modelo
    public $timestamps = false;
    
    protected $table = 'participantes';
    protected $primarykey = 'id';
    protected $fillable = ['folio', 'pseudonimo', 'fecha_registro'];

    public function libro(){
        return $this->hasOne(LibroParticipante::class, 'participante_id', 'id');
    }
}
