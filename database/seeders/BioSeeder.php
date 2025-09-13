<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::factory()->create([
            'foto' => '77NlV.jpg',
            'nama_panjang' => 'John Doe',
            'pekerjaan' => 'Web Developer',
            'no_hp' => '085335255308',
            'email' => 'septiabudiws@gmail.com',
            'alamat' => 'Indonesia',
            'tgl_lahir' => '2003-09-20',
            'link_fb' => 'https://www.tiktok.com/@septiabudi.ws?_t=ZS-8zDsvBC6r3I&_r=1',
            'link_ig' => 'https://www.instagram.com/septiabudi.ws/',
            'link_x' => 'cv_moh_septiabudi_w.pdf',
            'link_yt' => 'https://www.youtube.com/c/SeptiabudiWS',
        ]);
    }
}
