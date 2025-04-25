<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;  // Importando el modelo User

class Propietarios extends Model
{
    protected $table = 'propiedades';

    protected $fillable = [
        'titulo',
        'descripcion',
        'precio_por_noche',
        'capacidad',
        'estado',
        'user_id',
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
