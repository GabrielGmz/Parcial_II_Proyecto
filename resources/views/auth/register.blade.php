@extends('layouts.app')

@section('title', 'Registro')

@section('content')
<div class="max-w-md mx-auto bg-white rounded-2xl shadow-lg p-8">
    <h2 class="text-2xl font-bold mb-6 text-center text-pink-600">Crear una cuenta</h2>

    @if ($errors->any())
        <div class="mb-4 bg-red-100 text-red-700 p-4 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/registrar') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="nombre" class="block font-semibold">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
        </div>

        <div>
            <label for="email" class="block font-semibold">Correo electrónico</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
        </div>

        <div>
            <label for="password" class="block font-semibold">Contraseña</label>
            <input type="password" name="password" id="password" required
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
        </div>

        <div>
            <label for="rol" class="block font-semibold">Rol</label>
            <select name="rol" id="rol" required
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
                <option value="">Selecciona un rol</option>
                <option value="cliente">Cliente</option>
                <option value="propietario">Propietario</option>
            </select>
        </div>

        <div>
            <button type="submit"
                class="w-full bg-pink-600 text-white py-2 px-4 rounded-lg hover:bg-pink-700 transition">
                Registrarse
            </button>
        </div>
    </form>
</div>
@endsection
