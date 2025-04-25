<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Registrar un nuevo usuario
    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:logins,email',
            'password' => 'required|string|min:6',
            'rol' => 'required|in:cliente,propietario,admin',
        ]);

        // Crear el nuevo usuario
        $login = Login::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol' => $request->rol,
        ]);

        // Redirigir al login después del registro
        return redirect('/login')->with('success', 'Cuenta creada correctamente. Inicia sesión.');
    }

    // Iniciar sesión con un usuario
    public function login(Request $request)
    {
        // Validar los datos del formulario de login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Buscar al usuario por el correo
        $user = Login::where('email', $request->email)->first();

        // Verificar si el usuario existe y la contraseña es correcta
        if ($user && Hash::check($request->password, $user->password)) {
            // Iniciar sesión
            Auth::login($user);

            // Redirigir al usuario a la página de exploración
            return redirect('/explorar');
        }

        // Si la autenticación falla, volver con error
        return back()->withErrors([
            'email' => 'Correo o contraseña incorrectos.',
        ])->withInput();
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();

        // Redirigir al inicio
        return redirect('/');
    }
}
