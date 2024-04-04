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
        Schema::create('profesor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('prof_DNI')->unique();
            $table->integer('telefono');
            $table->string('apellido', 100);
            $table->string('nombre', 100);
            $table->integer('diasClases');
            $table->integer('porcentajeLibre');
            $table->integer('porcentajePromocion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesor');
    }
};
