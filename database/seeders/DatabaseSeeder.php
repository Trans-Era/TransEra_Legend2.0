<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Modele;
use App\Models\Type;
use App\Models\User;
use App\Models\Description;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();
//________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
        Modele::factory()->create([
            'name' =>'Mustang 5.0'
        ],[
            'name' =>'Corvette C7'
        ],[
            'name' =>'Firebird GTA'
        ]);
//________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
        Brand::factory()->create([
            'name' =>'Ford',
            'year' =>'1903',
            'icon' =>'img/brand/logomu.png'
        ],[
            'name' =>'Chevrolet',
            'year' =>'1918',
            'icon' =>'img/brand/logoc.png'
        ],[
            'name' =>'Pontiac',
            'year' =>'1926',
            'icon' =>'img/brand/logofi.png'
        ]);
//________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
        Type::factory()->create([
            'name' =>'Muscle Car',
            'description' =>'Voiture de sport d origine USA'
        ],[
            'name' =>'Exotic Car',
            'description' =>'Coupé élégant de haut standing'
        ],[
            'name' =>'Old Car',
            'description' =>'Voiture ancienne de renommée'
        ]);
//________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
        Car::factory()->create([
            'name' => 'Corvette C7',
            'description' => 'Une symphonie de performance. Motorisation ronflante, allure racée, technologie de pointe. La Corvette est une supercar qui repousse les limites de l excitation.',
            'power' => 466,
            'couple' => 640,
            'timeAcc' => 4.2,
            'photo' => 'img/car/1/corvette.webp',
            'thumbnail' => 'img/car/1/corvette-wobg.webp',
            'year' => 2014,
            'price' => 350,
            'modele_id' => 2,
            'brand_id' => 2,
            'type_id' => 2,
            'slug' => 'chevrolet-corvette-c7',
        ],[
            'name' => 'Firebird GTA',
            'description' => 'Puissance et style incarnés. Lignes aérodynamiques, allure agressive, intérieur retro-futuriste. Une légende indémodable qui est cette Firebird Trans Am GTA de 1989, la Firebird brûle l asphalte avec une intensité inégalée.',
            'power' => 240,
            'couple' => 345,
            'timeAcc' => 6.5,
            'photo' => 'img/car/1/firebird.jpg',
            'thumbnail' => 'img/car/1/firebird-wobg.png',
            'year' => 1982,
            'price' => 150,
            'modele_id' => 3,
            'brand_id' => 3,
            'type_id' => 3,
            'slug' => 'pontiac-firebird-transam-gta',
        ],[
            'name' => 'Mustang V8 GT 5.0',
            'description' => 'Puissance et élégance réunies. Moteur 5.0L, 450 chevaux rugissants, design emblématique, confort moderne. La Mustang est une légende sur roues.',
            'power' => 450,
            'couple' => 529,
            'timeAcc' => 4.6,
            'photo' => 'img/car/1/mustang.jpg',
            'thumbnail' => 'img/car/1/mustang-wobg.webp',
            'year' => 2020,
            'price' => 300,
            'modele_id' => 1,
            'brand_id' => 1,
            'type_id' => 1,
            'slug' => 'ford-mustang-gt-v8-2020',
        ]);
//________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
        Description::factory()->create([
            'name' =>'info1',
            'value' =>'Fastback',
            'car_id' => 1,
        ],[
            'name' =>'info2',
            'value' =>'Red Race',
            'car_id' => 1,
        ],[
            'name' =>'info3',
            'value' =>'Roue 19" Noir',
            'car_id' => 1,
        ],[
            'name' =>'info4',
            'value' =>'V8 5.0L coyote',
            'car_id' => 1,
        ],[
            'name' =>'design',
            'value' =>'Son design iconique allie la nostalgie du passé à l innovation du futur, avec des lignes musclées, une calandre emblématique et des détails sophistiqués.',
            'car_id' => 1,
        ],[
            'name' =>'miniTitre1',
            'value' =>'Design sportif',
            'car_id' => 1,
        ],[
            'name' =>'miniTitre2',
            'value' =>'Technologie Led',
            'car_id' => 1,
        ],[
            'name' =>'miniTitre3',
            'value' =>'Compteur digital',
            'car_id' => 1,
        ],[
            'name' =>'mini1',
            'value' =>'Avec une ligne bodybuildé a l image de l amérique',
            'car_id' => 1,
        ],[
            'name' =>'mini2',
            'value' =>'Découvrez l éclat inimitable des phares LED de la Chevrolet Corvette C7. Avec leur design audacieux et leur technologie de pointe',
            'car_id' => 1,
        ],[
            'name' =>'mini3',
            'value' =>'Plongez dans l univers captivant de son compteur. Élégant, moderne, chaque virage, chaque accélération est sublimé par la précision de ce compteur',
            'car_id' => 1,
        ],[
            'name' =>'princialInterior',
            'value' =>'Les sièges baquets offrent un excellent maintien latéral, tandis que le volant sport et les commandes ergonomiques garantissent une prise en main optimale.  l intérieur de cette C7 est l endroit où le confort, le style et la technologie se rejoignent pour offrir une expérience de conduite exceptionnelle.',
            'car_id' => 1,
        ],[
            'name' =>'interiorTitle1',
            'value' =>'Led d intérieur',
            'car_id' => 1,
        ],[
            'name' =>'interiorTitle2',
            'value' =>'Siège electrique',
            'car_id' => 1,
        ],[
            'name' =>'interior1',
            'value' =>'Une option qui vous fera rêver, tout en conservant le caractère intemporel.',
            'car_id' => 1,
        ],[
            'name' =>'interior2',
            'value' =>'Que ce soit par temps froid ou chaud, ces fonctionnalités offrent une expérience de conduite plus agréable.',
            'car_id' => 1,
        ],[
            'name' =>'info1',
            'value' =>'Roadster',
            'car_id' => 2,
        ],[
            'name' =>'info2',
            'value' =>'GBA Black',
            'car_id' => 2,
        ],[
            'name' =>'info3',
            'value' =>'Roue 20" Noir',
            'car_id' => 2,
        ],[
            'name' =>'info4',
            'value' =>'V8 6.2L',
            'car_id' => 2,
        ],[
            'name' =>'design',
            'value' =>'Séduisant par son design agressif, mariant élégance et puissance à travers des lignes sculptées et aérodynamiques. Avec sa calandre massive, ses prises d air prononcées et ses phares effilés, elle dégage une présence imposante.  En résumé, la C7 incarne la quintessence de la performance et du design audacieux.',
            'car_id' => 2,
        ],[
            'name' =>'miniTitre1',
            'value' =>'Design sportif',
            'car_id' => 2,
        ],[
            'name' =>'miniTitre2',
            'value' =>'Technologie Led',
            'car_id' => 2,
        ],[
            'name' =>'miniTitre3',
            'value' =>'Compteur digital',
            'car_id' => 2,
        ],[
            'name' =>'mini1',
            'value' =>'Le kit aéro ajoute une dimension impressionnante à son allure, renforçant ainsi son identité de supercar ultime.',
            'car_id' => 2,
        ],[
            'name' =>'mini2',
            'value' =>'Découvrez l éclat inimitable des phares LED de la Chevrolet Corvette C7. Avec leur design audacieux et leur technologie de pointe',
            'car_id' => 2,
        ],[
            'name' =>'mini3',
            'value' =>'Plongez dans l univers captivant de son compteur. Élégant, moderne, chaque virage, chaque accélération est sublimé par la précision de ce compteur',
            'car_id' => 2,
        ],[
            'name' =>'princialInterior',
            'value' =>' Les sièges baquets offrent un excellent maintien latéral, tandis que le volant sport et les commandes ergonomiques garantissent une prise en main optimale.  l intérieur de cette C7 est l endroit où le confort, le style et la technologie se rejoignent pour offrir une expérience de conduite exceptionnelle.',
            'car_id' => 2,
        ],[
            'name' =>'interiorTitle1',
            'value' =>'Toit panoramique amovible',
            'car_id' => 2,
        ],[
            'name' =>'interiorTitle2',
            'value' =>'All Black !',
            'car_id' => 2,
        ],[
            'name' =>'interior1',
            'value' =>'Une option qui vous laissera toujours eblouis par le soleil et le plaisir de conduire',
            'car_id' => 2,
        ],[
            'name' =>'interior2',
            'value' =>'Plongez dans l élégance ténébreuse du "all black", une symphonie de puissance et de mystère.',
            'car_id' => 2,
        ],[
            'name' =>'info1',
            'value' =>'Roadster',
            'car_id' => 3,
        ],[
            'name' =>'info2',
            'value' =>'GBA Black',
            'car_id' => 3,
        ],[
            'name' =>'info3',
            'value' =>'Roue 16" Alluminium',
            'car_id' => 3,
        ],[
            'name' =>'info4',
            'value' =>'V8 5.7L',
            'car_id' => 3,
        ],[
            'name' =>'design',
            'value' =>'Plongez dans l univers légendaire de la Firebird, un véritable symbole de l ingéniosité automobile. Inspirée du mythique kit2000 de la célèbre série américaine, cette voiture incarne la fusion parfaite entre la technologie futuriste et le design rétro.',
            'car_id' => 3,
        ],[
            'name' =>'miniTitre1',
            'value' =>'Design rétro',
            'car_id' => 3,
        ],[
            'name' =>'miniTitre2',
            'value' =>'Technologie escamotable',
            'car_id' => 3,
        ],[
            'name' =>'miniTitre3',
            'value' =>'Compteur rétro',
            'car_id' => 3,
        ],[
            'name' =>'mini1',
            'value' =>'Avec ses lignes longues et élancées, ses dimensions à l américaine et ses phares escamotables, elle incarne parfaitement l esprit iconique des muscle cars.',
            'car_id' => 3,
        ],[
            'name' =>'mini2',
            'value' =>'Cette technologie, bien que simple, est devenue une caractéristique emblématique de la Firebird Trans Am et a contribué à son attrait visuel distinctif.',
            'car_id' => 3,
        ],[
            'name' =>'mini3',
            'value' =>'De nombreux cadrans rectangulaires et circulaires affichent une multitude d informations, donnant l impression de se trouver dans le cockpit d un engin aéronautique.',
            'car_id' => 3,
        ],[
            'name' =>'princialInterior',
            'value' =>'L intérieur de cette Trans Am  est un mélange de rétro et de futuriste. Les sièges en cuir sport offrent un excellent soutien latéral, tandis que le tableau de bord est doté de nombreux cadrans et indicateurs, donnant à l habitacle une allure de cockpit d avion. Offrant une expérience de conduite agréable et immersive.',
            'car_id' => 3,
        ],[
            'name' =>'interiorTitle1',
            'value' =>'Le T-Top emblème',
            'car_id' => 3,
        ],[
            'name' =>'interiorTitle2',
            'value' =>'Roue à l américaine',
            'car_id' => 3,
        ],[
            'name' =>'interior1',
            'value' =>'Il s agit d un toit amovible en deux parties, offrant la possibilité de profiter de la conduite en plein air tout en conservant la rigidité de la carrosserie. Cela permet également de transformer rapidement la voiture en coupé pour une conduite plus confortable par mauvais temps.',
            'car_id' => 3,
        ],[
            'name' =>'interior2',
            'value' =>'Ces roues sont un élément crucial de son design. Elles sont généralement en alliage léger, ce qui réduit le poids non suspendu et améliore la maniabilité. La dimension est de 16 pouces de diamètre, ce qui permet d installer des pneus plus larges pour une meilleure adhérence. Que ce soit par temps froid ou chaud, ces fonctionnalités offrent une expérience de conduite plus agréable.',
            'car_id' => 3,
        ]);
//________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
        Photo::factory()->create([
            'name' =>'lateral',
            'path' =>'img/car/1/mustang-late.png',
            'car_id' => 1,
        ],[
            'name' =>'int0',
            'path' =>'img/car/1/mustang-int0.jpeg',
            'car_id' => 1,
        ],[
            'name' =>'int1',
            'path' =>'img/car/1/mustang-int1.png',
            'car_id' => 1,
        ],[
            'name' =>'int2',
            'path' =>'img/car/1/mustang-int2.jpg',
            'car_id' => 1,
        ],[
            'name' =>'lateral',
            'path' =>'img/car/2/corvette-lateral.png',
            'car_id' => 2,
        ],[
            'name' =>'int0',
            'path' =>'img/car/2/corvette-int0.jpeg',
            'car_id' => 2,
        ],[
            'name' =>'int1',
            'path' =>'img/car/2/corvette-int1.jpg',
            'car_id' => 2,
        ],[
            'name' =>'int2',
            'path' =>'img/car/2/corvette-int2.jpg',
            'car_id' => 2,
        ],[
            'name' =>'lateral',
            'path' =>'img/car/3/firebird-lateral.png',
            'car_id' => 3,
        ],[
            'name' =>'int0',
            'path' =>'img/car/3/firebird-int0.jpeg',
            'car_id' => 3,
        ],[
            'name' =>'int1',
            'path' =>'img/car/3/firebird-int1.jpg',
            'car_id' => 3,
        ],[
            'name' =>'int2',
            'path' =>'img/car/3/firebird-int2.jpg',
            'car_id' => 3
        ]);
//________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
        User::factory()->create([
            'name' => 'Test User',
            'city' => '',
            'email' => 'test@example.com',
            'password' => 'password',
            'birth' => '14/03/1999',
            'adress' => '10 Rue du test'
        ]);
    }
}