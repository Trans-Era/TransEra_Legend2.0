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
        Modele::factory()->create([
            'name' =>'Corvette C7'
        ]);
        Modele::factory()->create([
            'name' =>'Firebird transAm GTA'
        ]);       
        Brand::factory()->create([
            'name' =>'Ford',
            'year' =>'1903',
            'icon' =>'img/brand/logomu.png'
        ]);
        Brand::factory()->create([
            'name' =>'Chevrolet',
            'year' =>'1918',
            'icon' =>'img/brand/logoc.png'
        ]);
        Brand::factory()->create([
            'name' =>'Pontiac',
            'year' =>'1926',
            'icon' =>'img/brand/logofi.png'
        ]);
        Type::factory()->create([
            'name' =>'Muscle Car',
            'description' =>'Voiture de sport d origine USA'
        ]);
        Type::factory()->create([
            'name' =>'Exotic Car',
            'description' =>'Coupé élégant de haut standing'
        ]);
        Type::factory()->create([
            'name' =>'Old Car',
            'description' =>'Voiture ancienne de renommée'
        ]);
        Car::factory()->create([
            'name' => 'Mustang V8 GT 5.0',
            'description' => 'Puissance et élégance réunies. Moteur 5.0L, 450 chevaux rugissants, design emblématique, confort moderne. Une légende sur roues.',
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
        Car::factory()->create([
            'name' => 'Corvette C7',
            'description' => 'Une symphonie de performance. Motorisation ronflante, allure racée, technologie de pointe. Une supercar qui repousse les limites de l excitation.',
            'power' => 466,
            'couple' => 640,
            'timeAcc' => 4.2,
            'photo' => 'img/car/1/c2.webp',
            'thumbnail' => 'img/car/1/c3.webp',
            'year' => 2014,
            'price' => 350,
            'modele_id' => 2,
            'brand_id' => 2,
            'type_id' => 2,
        ]);
        Car::factory()->create([
            'name' => 'Firebird GTA',
            'description' => 'Puissance et style incarnés. Lignes aérodynamiques, allure agressive, intérieur retro-futuriste. Une légende indémodable, brûlant l asphalte avec une intensité inégalée.',
            'power' => 246,
            'couple' => 300,
            'timeAcc' => 8.0,
            'photo' => 'img/car/1/3.jpg',
            'thumbnail' => 'img/car/1/3.jpg',
            'year' => 1982,
            'price' => 150,
            'modele_id' => 3,
            'brand_id' => 3,
            'type_id' => 3,
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}