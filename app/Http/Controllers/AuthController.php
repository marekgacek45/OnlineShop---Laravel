<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function showLogin(){
        return view('pages/login');
    }
    function showRegister(){
        return view('pages/register');
    }
}
