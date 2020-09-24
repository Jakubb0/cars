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
        $validatedData = $request->validate([
            'login' => 'required|unique:users',
            'password' => 'required|min:8',
            'email' => 'required|unique:users',
        ]);


        $user = new User;
        $user->login = $request->login;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->save();
        
        if(Auth::attempt(['login' => $request->login, 'password' => $request->password]))
            return redirect()->intended('cars');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'silogin' => 'required',
            'sipassword' => 'required',
        ]);


        if(Auth::attempt(['login' => $request->silogin, 'password' => $request->sipassword]))
            return redirect()->intended('cars');
        else
            return redirect()->back();  
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
