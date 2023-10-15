<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'time',
        'carrera',
        'departamento',
        'mension',
        'docente_materia_id'
    ];
    public function respuestas(){
        return $this->hasMany(Respuesta::class);
    }
}
