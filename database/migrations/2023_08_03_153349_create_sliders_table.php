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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo_1')->nullable();
            $table->string('titulo_2')->nullable();
            $table->string('descripcion')->nullable();
            $table->text('url_explorar_mas')->nullable();
            $table->string('fondo')->nullable();
            $table->enum('vista',['SI','NO'])->default('NO');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
