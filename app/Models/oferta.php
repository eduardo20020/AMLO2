<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oferta extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'descripcion',
        'requisitos',
        'ubicacion',
        'tiempo',
        'user_id',
    ];
}
