<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;
    protected $fillable = [
        'docente_materia_id',
        'pregunta_id',
        'formulario_id',
        'respuesta',
        'valor'
    ];
}
