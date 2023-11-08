<?php

namespace App\View\Components\Car;

use App\Models\Brand;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Brands extends Component
{
    /**
     * Brands for the Brand component.
     *
     * @var Collection<int, Brand>
     */
    public Collection $brands;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->brands = Brand::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section.car.brands');
    }
}
