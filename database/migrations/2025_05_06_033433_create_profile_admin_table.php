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
        Schema::create('profile_admin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // relasi ke users, role: admin
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable(); // redundan jika sudah ada di tabel users, tapi bisa disinkronkan
            $table->string('position')->nullable(); // Jabatan, misalnya: Administrator Sistem
            $table->string('profile_picture')->nullable(); // path ke foto profil
            $table->string('experience')->nullable(); // pengalaman admin
            $table->text('note')->nullable(); // catatan tambahan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_admin');
    }
};
