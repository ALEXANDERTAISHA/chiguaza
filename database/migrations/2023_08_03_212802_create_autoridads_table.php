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
        Schema::create('autoridads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('foto')->nullable();
            $table->string('foto2')->nullable();
            $table->string('url_video')->nullable();
            $table->string('nombres_completos')->nullable();
            $table->string('rol')->nullable();
            $table->string('frase')->nullable();
            $table->string('logro_1')->nullable();
            $table->string('logro_2')->nullable();
            $table->string('logro_3')->nullable();
            $table->string('logro_4')->nullable();
            $table->string('anio_experiencia')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autoridads');
    }
};
