<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conocimiento extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function usos()
    {
        return $this->hasMany(Uso::class);
    }
}
