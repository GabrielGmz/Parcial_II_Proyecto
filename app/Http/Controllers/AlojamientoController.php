<?php

namespace App\Http\Controllers;

use App\Models\Alojamiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlojamientoController extends Controller
{
    public function explorar()
{
    $alojamientos = Alojamiento::all(); // O lo que necesites
    return view('explorar', compact('alojamientos'));
}
}
