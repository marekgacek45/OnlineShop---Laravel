<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // function showLogin()
    // {
    //     return view('pages/login');
    // }
    function showLogin()
    {
        return view('pages/log-reg');
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
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        //login new User
        Auth::login($user);
        //return
        return redirect()->intended('/')->with('success', 'Rejestracja zakończona sukcesem!');

    }
    function postLogin(Request $request)
    {
        //val
        $details = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //login
        if (Auth::attempt($details)) {
            return redirect()->intended('/')->with('success', 'Zalogowano poprawnie');
        } else {
            return back()->withErrors([
                'loginError' => __('auth.failed')
            ]);
        }
    }
    function postLogout()
    {
        Auth::logout();
        return redirect()->intended('/')->with('success', 'Wylogowałeś się');
    }
}