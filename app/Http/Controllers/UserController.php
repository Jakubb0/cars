<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $user = new User;
        $user->login = $request->login;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->save();
    }

    public function login(Request $request)
    {
        $data = $request->only('login', 'password');

        if(Auth::attempt($data))
            return redirect()->intended('mainpage');
    }
}
