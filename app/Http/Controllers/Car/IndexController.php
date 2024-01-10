<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Brand;
use App\Models\Type;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke() : View
    {
        return view('cars.index', [
            'cars' => Car::all(),
            'brands' => Brand::all(),
            'types' => Type::all(),
        ]);
    }
}
