<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postulaciones extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_oferta',
    ];


    protected $attributes = [
        'id_user'=> 44,
        'id_oferta'=> 44,
    ];
}
