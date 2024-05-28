<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use AuthenticatesUsers;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('auth.login.index');
    }

    public function store(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], isset($request->remember_me))) {
            return redirect()->route('dashboard.index');
        } else {
            return view('auth.login.index')->withErrors(['email' => 'Mot de passe ou email incorrect.']);
        }    
    }

    public function __construct()
    {
        $this->middleware('guest')->except('toLogout');
    }

    public function toLogout()
    {
        auth()->logout();
        return redirect()->route('home.index');
    }
}
