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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_admin_id')->constrained('profile_admin')->cascadeOnDelete(); // relasi ke profile_admin
            $table->string('title');
            $table->string('penulis');
            $table->text('content');
            $table->string('cover_image')->nullable(); // path ke gambar artikel
            $table->string('status')->default('draft');
            $table->timestamp('published_at')->nullable(); // kapan artikel dipublikasikan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};
