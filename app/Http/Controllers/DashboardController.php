<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __contruct()
    { 
        $this->middleware('auth');
    }

    public function __invoke(): View
    {
        return view('dashboard.home.index', [
            'cars' => Car::all(),
            'brands' => Brand::all(),
        ]);
    }
}