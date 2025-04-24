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
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->string('titulo');
            $table->text('detalle');
            $table->string('foto')->nullable();
            $table->enum('vista',['SI','NO'])->default('NO');
            
            $table->foreignId('user_id')->constrained(
                table: 'users'
            );


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
