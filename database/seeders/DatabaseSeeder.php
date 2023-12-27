<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Modele;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Modele::factory()->create([
            'name' =>'Mustang V8 GT 5.0'
        ]);
        Brand::factory()->create([
            'name' =>'Ford',
            'icon' =>'img/brand/logof.png'
        ]);
        Type::factory()->create([
            'name' =>'Muscle Car'
        ]);
        Car::factory()->create([
            'name' => 'Ford Mustang V8 GT 5.0',
            'description' => 'Unleash the power and freedom of the iconic Ford Mustang GT. With its mesmerizing V8 engine, it delivers a captivating soundtrack and exhilarating acceleration. Its timeless design and sporty driving experience take you on a thrilling journey of performan',
            'power' => 450,
            'couple' => 529,
            'timeAcc' => 4.6,
            'photo' => 'img/car/1/profil.webp',
            'thumbnail' => 'img/car/1/thumbnail.webp',
            'year' => 2020,
            'price' => 300,
            'modele_id' => 1,
            'brand_id' => 1,
            'type_id' => 1,
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}