<?php

namespace Database\Seeders;

use App\Models\Kategoriblog;
use Database\Factories\KategoriblogFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategoriblog::factory()->count(4)->create();
    }
}
