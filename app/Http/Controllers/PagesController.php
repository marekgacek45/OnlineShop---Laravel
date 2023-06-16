<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {
        return (view('pages/home'));
    }
    function userPanel()
    {
        return (view('pages/user'));
    }
}