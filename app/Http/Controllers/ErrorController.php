<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ErrorController extends Controller
{
    public function __invoke(): View
    {
        return view('error.index');
    }
}