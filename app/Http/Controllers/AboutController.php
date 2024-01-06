<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Brand;

class AboutController extends Controller
{
    public function __invoke(): View
    {
        return view('about.index', [
            'brands' => Brand::all(),
        ]);
    }
}