<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('contrasena')->nullable();
            $table->string('estado');
            $table->integer('telefono')->nullable(); // Cambiado a integer
            $table->integer('celular')->nullable();  // Cambiado a integer
            $table->string('direccion')->nullable(); // Nuevo campo para dirección        
            $table->unsignedBigInteger('tipoUsuario_id');
            $table->unsignedBigInteger('rol_id');
        
            $table->foreign('tipoUsuario_id')->references('id')
                  ->on('tipo_usuario')->onDelete('restrict'); // Evita la eliminación en cascada
            $table->foreign('rol_id')->references('id')
                  ->on('rol')->onDelete('restrict'); // Evita la eliminación en cascada
        
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
