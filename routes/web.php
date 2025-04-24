<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('auth.register');
});

Route::post('/registrar', [LoginController::class, 'register']);

Route::get('/registro', function () {
    return view('auth.register');
})->name('registro');

Route::post('/registrar', [LoginController::class, 'register'])->name('registrar');
