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
        Schema::disableForeignKeyConstraints();

        Schema::create('projeks', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ["active","inactive"]);
            $table->foreignId('kategori_id')->constrained()->cascadeOnDelete();
            $table->string('nama_projek', 100);
            $table->string('alat', 100);
            $table->string('client', 100)->nullable();
            $table->text('preview')->nullable();
            $table->text('deskripsi');
            $table->string('gambar')->nullable();
            $table->foreignId('kategoriprojek_id');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projeks');
    }
};
