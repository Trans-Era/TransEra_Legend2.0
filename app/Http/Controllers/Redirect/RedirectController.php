<?php

namespace App\Http\Controllers\Redirect;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class RedirectController extends Controller
{
    public function fordRedirect()
    {
        return Redirect::to('/cars/ford-mustang-gt-v8-2020', 301);
    }

    public function C7Redirect()
    {
        return Redirect::to('/cars/chevrolet-corvette-C7', 301);
    }

    public function firebirdRedirect()
    {
        return Redirect::to('/cars/pontiac-firebird-transam-gta', 301);
    }
}
