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
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->string('carrera')->nullable();
            $table->string('departamento')->nullable();
            $table->string('mension')->nullable();
            $table->unsignedBigInteger('docente_materia_id')->nullable();
            $table->foreign('docente_materia_id')->references('id')->on('docente_materia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formularios');
    }
};
