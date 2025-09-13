<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::factory()->create([
            'deskripsi' => 'Seorang mahasiswa Informatika dengan pengalaman dalam pengembangan website, pelatihan coding, serta pembuatan sistem informasi berbasis web. Memiliki pengalaman sebagai mentor coding, freelance web developer, serta aktif sebagai kreator konten gaming di YouTube. Terampil dalam pemrograman web, manajemen database, dan pengelolaan konten digital. ',
        ]);
    }
}
