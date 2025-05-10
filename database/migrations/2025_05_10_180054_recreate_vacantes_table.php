<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Borra la tabla si ya existe
        Schema::dropIfExists('vacantes');

        // Crea la nueva tabla
        Schema::create('vacantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vacante_id'); // ID de la vacante
            $table->string('vacante'); // Nombre de la vacante
            $table->string('nombre'); // Nombre del postulante
            $table->string('telefono');
            $table->string('correo');
            $table->string('cv_path'); // Ruta del PDF
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vacantes');
    }
};
