<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Gender;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {
        $sizes = Size::all();
        return (view('pages/home',['sizes'=>$sizes]));
    }
    function userPanel()
    {
        return (view('pages/user'));
    }
}