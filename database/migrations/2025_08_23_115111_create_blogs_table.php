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

        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('token', 8);
            $table->enum('status', ["active","inactive"]);
            $table->foreignId('kategori_id')->constrained()->cascadeOnDelete();
            $table->string('judul', 150);
            $table->date('tgl');
            $table->text('deskripsi');
            $table->string('gambar')->nullable();
            $table->foreignId('kategoriblog_id');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
