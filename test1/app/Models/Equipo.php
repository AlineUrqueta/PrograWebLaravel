<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipo extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'equipos';

    public function jugadores(){
        return $this->hasMany('App\Models\Jugador');
    }
}
