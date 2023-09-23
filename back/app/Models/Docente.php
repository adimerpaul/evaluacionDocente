<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'photo',
    ];
    public function materias()
    {
        return $this->belongsToMany(Materia::class);
    }
}
