<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    protected $fillable = [
        'id_user',
        'id_propiedad',
        'fecha_inicio',
        'fecha_fin',
        'estado',
        'metodo_pago',
        'monto'
    ];
    protected $table = 'reservas';
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
