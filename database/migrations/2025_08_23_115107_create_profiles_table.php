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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('nama_panjang', 100);
            $table->string('pekerjaan', 100);
            $table->string('no_hp', 15);
            $table->string('email', 50);
            $table->string('alamat', 100);
            $table->date('tgl_lahir');
            $table->text('link_fb')->nullable();
            $table->text('link_ig')->nullable();
            $table->text('link_x')->nullable();
            $table->text('link_yt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
