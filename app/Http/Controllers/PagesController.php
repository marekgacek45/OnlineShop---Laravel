<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Team;
use App\Models\Gender;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {$products = Product::all();
        $teams = Team::all();
        return (view('pages/home',['products'=>$products,'teams'=>$teams]));
    }
    function userPanel()
    {
        return (view('pages/user'));
    }
    function product($id)
    {$product = Product::findOrFail($id);
        
        return (view('pages/product',['product'=>$product]));
    }
}