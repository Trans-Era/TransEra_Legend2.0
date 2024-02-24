<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Description;
use App\Models\Photo;
use Illuminate\View\View;

class IndexController extends Controller
{
    public static function getDescription($carId, $value)
    {
        $descriptions = Description::where('car_id', $carId)->get();
        $data = "";

        foreach ($descriptions as $description) {
            if ($description->name == $value) {
                $data = $description->value;
                break;
            }
        }

        return $data;
    }

    public static function getBrandIcon($brandId)
    {
        $brand = Brand::where('id', $brandId)->first();
        return $brand->icon;
    }


    public function __invoke() : View
    {
        return view('cars.index', [
            'cars' => Car::all(),
            'brands' => Brand::all(),
            'types' => Type::all()
        ]);
    }
}
