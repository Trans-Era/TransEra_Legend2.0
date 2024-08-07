<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Brand;
use App\Models\Type;

class DashboardLayout extends Component
{
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
        return view('layouts.dashboard');
    }
}