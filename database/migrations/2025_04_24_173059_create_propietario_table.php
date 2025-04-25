<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Relación con usuarios (propietario)
            $table->string('titulo');
            $table->text('descripcion');
            $table->integer('precio_por_noche');
            $table->integer('capacidad');
            $table->string('estado');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('propiedades');
    }
};

