<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Kategori;
use App\Models\Kategoriprojek;
use App\Models\Projek;

class ProjekFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Projek::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'status' => fake()->randomElement(["active","inactive"]),
            'kategori_id' => Kategori::factory(),
            'nama_projek' => fake()->regexify('[A-Za-z0-9]{100}'),
            'alat' => fake()->regexify('[A-Za-z0-9]{100}'),
            'client' => fake()->regexify('[A-Za-z0-9]{100}'),
            'preview' => fake()->text(),
            'deskripsi' => fake()->text(),
            'gambar' => fake()->word(),
            'kategoriprojek_id' => Kategoriprojek::factory(),
        ];
    }
}
