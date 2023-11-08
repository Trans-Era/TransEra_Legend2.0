<?php

namespace App\View\Components\Car;

use App\Models\Car;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;
class Featured extends Component
{
    /**
     * The cars for the featured component.
     *
     * @var Collection<int, Car>
     */
    public Collection $cars;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->cars = Car::latest()->take(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section.car.featured');
    }
}
