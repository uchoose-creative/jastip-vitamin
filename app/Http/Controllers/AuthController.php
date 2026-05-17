<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{

    // REGISTER
    public function register(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',

        ]);

        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',

        ]);

        return redirect('/login');
    }

    // LOGIN
    public function login(Request $request)
    {
        $credentials = $request->validate([

            'email' => ['required', 'email'],
            'password' => ['required'],

        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            if (trim(Auth::user()->role) === 'admin') {

                return redirect('/admin/dashboard');
            }

            return redirect('/catalog');
        }

        return back()->withErrors([
            'email' => 'Login gagal',
        ]);
    }

    // LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function googleLogin()
{

    return Socialite::driver('google')->redirect();

}

public function googleCallback()
{

    $googleUser = Socialite::driver('google')->user();

    $user = User::where('email', $googleUser->email)->first();

    if(!$user)
    {

        $user = User::create([

            'name' => $googleUser->name,

            'email' => $googleUser->email,

            'password' => bcrypt('google123'),

        ]);

    }

    Auth::login($user);

    return redirect('/catalog');

}
}