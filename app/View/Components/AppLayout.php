<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Type;

class AppLayout extends Component
{
    /**
     * Brands for the Brand component.
     *
     * @var Collection<int, Brand>
     */
    public Collection $brandsNav;
    public Collection $typesNav;

    public function __construct()
    {
        $this->brandsNav = Brand::all();
        $this->typesNav = Type::all();
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
