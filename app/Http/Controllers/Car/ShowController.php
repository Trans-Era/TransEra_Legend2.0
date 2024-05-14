<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Description;
use App\Models\Photo;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Car $car) : View
    {
        $descriptions = Description::where('car_id', $car->id)->get();
        $data = [];

        $photos = Photo::where('car_id', $car->id)->get();
        $daata = [];

        foreach($descriptions as $description){
            $data[$description->name] = $description->value;
        }

        foreach($photos as $photo){
            $daata[$photo->name] = $photo->path;
        }

        return view('cars.show', [
            'car' => $car,
            'descriptions' => $data,
            'photos' => $daata
        ]);
    }
}
