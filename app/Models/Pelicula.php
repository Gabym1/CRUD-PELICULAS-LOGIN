<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    // Permitir asignación masiva para el campo 'titulo'
    protected $fillable = [
        'titulo',
    ];
}
