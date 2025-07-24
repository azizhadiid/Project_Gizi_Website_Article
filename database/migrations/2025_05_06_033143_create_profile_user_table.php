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
        Schema::create('profile_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // relasi ke tabel users
            $table->string('education')->nullable();
            $table->string('job')->nullable();
            $table->text('disease_history')->nullable(); // Riwayat penyakit
            $table->string('phone', 20)->nullable();
            $table->string('address')->nullable();
            $table->string('country', 100)->nullable();

            // Sosial media
            $table->string('instagram')->nullable();
            $table->string('x_account')->nullable(); // X = Twitter
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();

            // Optional tambahan
            $table->string('profile_picture')->nullable(); // Path foto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_user');
    }
};
