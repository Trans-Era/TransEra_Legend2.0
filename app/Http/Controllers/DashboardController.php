<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Reservation;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __contruct()
    { 
        $this->middleware('auth');
    }

    public function __invoke(): View
    {
        return view('dashboard.home.index', [
            'reservation' => $this->getLastReservationByUser(Auth::user()),
        ]);
    }
}