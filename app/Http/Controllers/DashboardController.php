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
        $user = Auth::user();

        $lastReservation = $user ? $user->getLastReservation() : null;
        $penultimateReservation = $user ? $user->getLastReservation() : null;
        
        return view('dashboard.home.index', [
            'lastReservation' => $lastReservation,
            'penultimateReservation' => $penultimateReservation
        ]);
    }
}