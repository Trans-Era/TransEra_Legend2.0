<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CguController extends Controller
{
    public function __invoke(): View
    {
        return view('services.cgu');
    }
}

