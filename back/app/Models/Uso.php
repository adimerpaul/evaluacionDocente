<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uso extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'conocimiento_id'];
    public function conocimiento()
    {
        return $this->belongsTo(Conocimiento::class);
    }
    public function preguntas()
    {
        return $this->hasMany(Pregunta::class);
    }
}
