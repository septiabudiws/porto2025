<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Edukasi;

class EdukasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Edukasi::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'tenggat_waktu' => fake()->regexify('[A-Za-z0-9]{15}'),
            'nama_pendidikan' => fake()->regexify('[A-Za-z0-9]{50}'),
            'jurusan' => fake()->regexify('[A-Za-z0-9]{50}'),
        ];
    }
}
