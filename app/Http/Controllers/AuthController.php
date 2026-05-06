<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister() {
        return view('register');
    }

    public function showLogin() {
        return view('login');
    }

    public function handleLogin(Request $request) {
        $credentials = $request->only('login', 'password');

        if (Auth::attempt(['name' => $credentials['login'], 'password' => $credentials['password']])) {
            return redirect('/');
        }

        return back()->withErrors(['login' => 'Invalid credentials']);
    }

    public function handleRegister(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', 
        ]);

        Auth::login($user);
        return redirect('/');
    }
}