<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Profile;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama_panjang' => fake()->regexify('[A-Za-z0-9]{100}'),
            'pekerjaan' => fake()->regexify('[A-Za-z0-9]{100}'),
            'no_hp' => fake()->regexify('[A-Za-z0-9]{15}'),
            'email' => fake()->safeEmail(),
            'alamat' => fake()->regexify('[A-Za-z0-9]{100}'),
            'tgl_lahir' => fake()->date(),
            'link_fb' => fake()->text(),
            'link_ig' => fake()->text(),
            'link_x' => fake()->text(),
            'link_yt' => fake()->text(),
        ];
    }
}
