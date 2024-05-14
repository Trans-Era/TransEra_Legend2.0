<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\Request;


class AccountController extends Controller
{
    public function __contruct()
    { 
        $this->middleware('auth');
    }

    public function __invoke(): View
    {
        return view('dashboard.account.index');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'birth' => 'required|string|max:255',
            'adress' => 'required|string|max:255'
        ]);
        //dd($validatedData);
        $user = Auth::user(); 
        $user->update($validatedData);
        //dd($user);
        return redirect()->route('account.index')->with('success', 'Profil mis à jour avec succès !');
    }
}