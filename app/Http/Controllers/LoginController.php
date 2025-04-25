<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

<<<<<<< HEAD
class loginController extends Controller
=======
class LoginController extends Controller
>>>>>>> 53b2923874475e8fa017dfb620ca8ea9c3c21f8c
{
    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'rol' => 'required|in:cliente,propietario,admin',
        ]);

        $login = Login::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol' => $request->rol,
        ]);

        return response()->json(['login' => $login, 'mensaje' => 'Usuario registrado con éxito']);
    }
}
