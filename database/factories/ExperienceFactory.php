<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Experience;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'tenggat_waktu' => fake()->regexify('[A-Za-z0-9]{15}'),
            'nama_pengalaman' => fake()->regexify('[A-Za-z0-9]{50}'),
            'jabatan' => fake()->regexify('[A-Za-z0-9]{15}'),
        ];
    }
}
