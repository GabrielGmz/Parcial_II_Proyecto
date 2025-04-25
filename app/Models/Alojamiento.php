<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alojamiento extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'precio',
        'direccion',
        'imagen',
        'user_id',
    ];

    public function propietario()
    {
        return $this->belongsTo(Login::class, 'user_id');
    }
}

