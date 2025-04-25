<?php

namespace App\Http\Controllers;

use App\Models\Propietarios;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'precio_por_noche' => 'required|integer|min:1',
            'capacidad' => 'required|integer|min:1',
            'estado' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

        $propiedad = Propietarios::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'precio_por_noche' => $request->precio_por_noche,
            'capacidad' => $request->capacidad,
            'estado' => $request->estado,
            'user_id' => $request->user_id,
        ]);

        return response()->json([
            'propiedad' => $propiedad,
            'mensaje' => 'Propiedad registrada con éxito'
        ]);
    }
}
