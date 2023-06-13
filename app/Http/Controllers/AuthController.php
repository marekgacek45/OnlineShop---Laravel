<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function showLogin()
    {
        return view('pages/login');
    }
    function showRegister()
    {
        return view('pages/register');
    }

    function postRegister(Request $request)
    {
        //val
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:5| regex:/^(?=.*[0-9]).+$/| confirmed',
        ]);
        //register
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->name,
            'password'=>Hash::make($request->name),
        ]);
        //login new User
        Auth::login($user);
        //return
        return redirect()->intended('/')->with('success', 'Rejestracja zakończona sukcesem!');

    }
    function postLogin(Request $request)
    {
        dd($request->all());
    }
}