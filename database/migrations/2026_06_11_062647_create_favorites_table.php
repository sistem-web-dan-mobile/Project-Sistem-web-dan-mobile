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
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();

            // Relasi ke tabel users
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade');

            // Data film dari OMDb API
            $table->string('imdb_id');
            $table->string('title');
            $table->string('year');
            $table->text('poster')->nullable();

            $table->timestamps();

            // Mencegah user menyimpan film yang sama berkali-kali
            $table->unique(['user_id', 'imdb_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};