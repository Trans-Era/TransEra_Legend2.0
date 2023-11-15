<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(5);
        $slug = Str::slug($title, '-');

        return [
            'name' => $title,
            'description' => fake()->text(),
            'slug' => $slug,
            'brand_id' => Brand::factory(),
            'photo' => 'img/car/1/profil.webp',
            'thumbnail' => 'img/car/1/thumbnail.webp',
            'year' => fake()->numberBetween(2000, 2023),
        ];
    }
}
