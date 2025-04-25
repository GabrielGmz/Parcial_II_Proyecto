@extends('layouts.app')

@section('title', 'Explorar')

@section('content')
<h2 class="text-2xl font-bold mb-6 text-pink-600">Alojamientos disponibles</h2>

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($alojamientos as $alojamiento)
        <div class="bg-white shadow-md rounded-xl p-4">
            <h3 class="text-xl font-bold text-pink-600">{{ $alojamiento->titulo }}</h3>
            <p class="text-gray-700 mt-2">{{ $alojamiento->descripcion }}</p>
            <p class="mt-2 text-sm text-gray-500">Ubicación: {{ $alojamiento->direccion }}</p>
            <p class="mt-2 font-semibold text-gray-800">${{ $alojamiento->precio }}</p>
            <p class="mt-2 text-xs text-gray-400">Publicado por: {{ $alojamiento->propietario->nombre }}</p>
        </div>
    @endforeach
</div>
@endsection
