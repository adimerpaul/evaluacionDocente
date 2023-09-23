<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocenteMateria extends Model
{
    use HasFactory;
    protected $table='docente_materia';
    protected $fillable=[
        'docente_id',
        'materia_id',
        'paralelo',
        'gestion',
        'codigo',
        'activo',
    ];
    public function docente(){
        return $this->belongsTo(Docente::class);
    }
    public function materia(){
        return $this->belongsTo(Materia::class);
    }
}
