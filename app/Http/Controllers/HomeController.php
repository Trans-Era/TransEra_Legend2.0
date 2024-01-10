<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view('home.index', [
            'cars' => Car::all(),
            'brands' => Brand::all(),
        ]);
    }
}
