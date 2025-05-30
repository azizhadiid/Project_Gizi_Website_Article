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
        Schema::create('konsul', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // relasi ke users, role: admin
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('jenis_konsultasi')->nullable();
            $table->date('tanggal_konsultasi')->nullable();
            $table->string('umur')->nullable();
            $table->text('keluhan')->nullable(); // catatan tambahan
            $table->string('status')->default('menunggu'); // Status default
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsul');
    }
};
