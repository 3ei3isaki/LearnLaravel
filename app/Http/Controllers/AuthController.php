<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(Request $req)
    {
        if (Auth::attempt(['email' => $req->input('email'), 'password' => $req->input('password')])) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->withInput();
        }
    }

    public function login()
    {
        return view('login');
    }

    public function logout(Request $req)
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
