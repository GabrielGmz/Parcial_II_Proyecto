<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasController extends Controller
{
public function store(Request $request)
{
    $request->validate([
        'id_user' => 'required|integer',
        'id_propiedad' => 'required|integer',
        'fecha_inicio' => 'required|date',
        'fecha_fin' => 'required|date|after:fecha_inicio',
        'estado' => 'required|string',
        'metodo_pago' => 'required|string',
        'monto' => 'required|numeric'
    ]);

    $reserva = Reservas::create([
        'id_user' => $request->id_user,
        'id_propiedad' => $request->id_propiedad,
        'fecha_inicio' => $request->fecha_inicio,
        'fecha_fin' => $request->fecha_fin,
        'estado' => $request->estado,
        'metodo_pago' => $request->metodo_pago,
        'monto' => $request->monto
    ]);

    return response()->json(['reserva' => $reserva, 'mensaje' => 'Reserva creada con éxito']);
}
}
