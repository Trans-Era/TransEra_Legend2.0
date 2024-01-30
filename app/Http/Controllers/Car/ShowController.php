<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Description;
use Illuminate\View\View;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Car $car) : View
    {
        $descriptions = Description::where('car_id', $car->id)->get();
        $data = [];

        foreach($descriptions as $description){
            $data[$description->name] = $description->value;
        }

        return view('cars.show', [
            'car' => $car,
            'descriptions' => $data
        ]);
    }
}
