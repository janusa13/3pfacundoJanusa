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
        Schema::create('student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('alumn_DNI')->unique();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->integer('asistencias')->default(0);
            $table->date('fecha_nac')->nullable();
            $table->enum('grupo', ['A', 'B'])->default('A');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};



