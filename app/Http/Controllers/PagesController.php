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
    {
        $products = Product::all();
        $jerseys = Product::with('category')
                ->whereHas('category', function ($query) {
                    $query->where('name', 'koszulki');
                })
                ->get();
        $hats = Product::with('category')
                ->whereHas('category', function ($query) {
                    $query->where('name', 'czapki');
                })
                ->get();

        $teams = Team::all();
        return (view('pages/home', ['products' => $products, 'teams' => $teams,'jerseys'=>$jerseys,'hats'=>$hats]));
    }
    function userPanel()
    {
        return (view('pages/user'));
    }
    function product($id)
    {

        $product = Product::findOrFail($id);
        $team = $product->team->id;
        $products = Product::where('team_id', $team)->get();


        return (view('pages/product', ['product' => $product, 'products' => $products, 'team' => $team]));
    }
}