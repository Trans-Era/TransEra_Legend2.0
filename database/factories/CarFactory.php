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
        return [
            'name' => fake()->sentence(5),
            'desscription' => fake()->text(),
            'slug' => Str::slug(fake()->sentence(5), '-'),
            'brand_id' => Brand::factory(),
            'photo' => 'img/car/1/bg1.webp',
            'thumbnail' => 'img/car/1/thumbnail.webp',
            'year' => fake()->numberBetween(2000, 2023),
            'power' =>  fake()->numberBetween(60, 500),
            'couple' =>  fake()->numberBetween(200, 600),
            'timeAcc' =>  fake()->numberBetween(3, 5),
            'price' => fake()->numberBetween(250, 500),
        ];
    }
}
