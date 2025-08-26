<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Kategori;
use App\Models\Kategoriblog;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'status' => fake()->randomElement(["active","inactive"]),
            'kategori_id' => Kategori::factory(),
            'judul' => fake()->regexify('[A-Za-z0-9]{150}'),
            'tgl' => fake()->date(),
            'deskripsi' => fake()->text(),
            'gambar' => fake()->word(),
            'kategoriblog_id' => Kategoriblog::factory(),
        ];
    }
}
