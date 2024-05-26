<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Provider\RouteServiceProviders;
use App\Models\User;
use Illuminate\Foundation\Auth\RegisterUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function createUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'=> ['required', 'string', 'min:8']
        ]);

        // Si la validation échoue, redirigez avec les erreurs
        if ($validator->fails()) {
            return redirect()->route('register.index')
                            ->withErrors($validator)
                            ->withInput()
                            ->with('error','Veuillez vérifier les champs et réessayer.');

        }

        // Si la validation réussit, appelez la fonction createUser pour créer un nouvel utilisateur
        $user = User::create([
            'name' => 'Utilisateur',
            'birth' => '01.01.1900',
            'adress' => '1 rue du Luxembourg, Belval',
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'cgu' => 'accepted'
        ]);

        Auth::login($user);

        // Vous pouvez ensuite rediriger l'utilisateur vers une autre page ou afficher un message de succès
        return redirect()->route('dashboard.index')->with('success', 'Votre compte a été créé avec succès !');
    }

    public function index(): View
    {
        return view('auth.register.index');
    }
}
