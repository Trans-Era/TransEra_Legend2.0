<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'brand_id' => Brand::factory(),
            'photo' => 'img/car/1/profil.webp',
            'thumbnail' => 'img/car/1/thumbnail.webp',
            'year' => fake()->numberBetween(2000, 2023),
        ];
    }
}