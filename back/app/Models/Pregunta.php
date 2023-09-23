<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'uso_id'];
    public function uso()
    {
        return $this->belongsTo(Uso::class);
    }
    public function respuestas()
    {
        return $this->hasMany(PreguntaRespuesta::class);
    }
}
