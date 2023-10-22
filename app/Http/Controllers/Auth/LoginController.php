<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('auth.login.index');
    }

    public function store(LoginRequest $request): View
    {
        Auth::attempt(['email' => $request->email, 'password' => $request->password], isset($request->remember_me));
        return view('login.index');
    }
}
