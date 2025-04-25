@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-pink-50">
    <div class="bg-white rounded-2xl shadow-xl p-10 max-w-md text-center">
        <h1 class="text-3xl font-bold text-pink-600 mb-6">¡Bienvenido a la App de Alojamientos!</h1>
        <p class="text-gray-600 mb-8">Explorá alojamientos increíbles y hacé tu próxima reserva.</p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('login') }}"
                class="bg-pink-600 text-white px-6 py-2 rounded-lg hover:bg-pink-700 transition">
                Iniciar sesión
            </a>

            <a href="{{ url('/registrar') }}"
                class="bg-white border border-pink-600 text-pink-600 px-6 py-2 rounded-lg hover:bg-pink-50 transition">
                Registrarse
            </a>
        </div>
    </div>
</div>
@endsection
