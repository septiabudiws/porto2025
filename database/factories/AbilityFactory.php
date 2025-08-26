<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Ability;

class AbilityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ability::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->regexify('[A-Za-z0-9]{50}'),
            'deskripsi' => fake()->text(),
        ];
    }
}
