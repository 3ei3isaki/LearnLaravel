<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(Request $req)
    {
        return view('register');
    }

    public function register(Request $req)
    {
        if (!$req->filled(['name', 'email', 'password'])) {
            $req->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ]);

            return redirect()->route('registerView')->withInput();
        }

        $user = new User($req->input());
        $user->password = password_hash($req->input('password'), PASSWORD_BCRYPT);
        $user->save();

        return redirect()->route('login');
    }
}
