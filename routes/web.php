<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlojamientoController;  // Añadido controlador para alojamientos

// Ruta principal (bienvenida)
Route::get('/', function () {
    return view('welcome');
});

// Mostrar formulario de registro
Route::get('/registrar', function () {
    return view('auth.register'); // Asegúrate de que la vista exista
})->name('register');

// Procesar formulario de registro
Route::post('/registrar', [LoginController::class, 'register'])->name('registrar');

// Mostrar formulario de login
Route::get('/login', function () {
    return view('auth.login'); // Asegúrate de que la vista exista
})->name('login');

// Procesar formulario de login
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Ruta para explorar alojamientos, con middleware de autenticación
Route::get('/explorar', [AlojamientoController::class, 'explorar'])->middleware('auth')->name('explorar');

// Cerrar sesión
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
