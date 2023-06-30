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
    ->orderBy('created_at', 'desc')
    ->get();
        $hats = Product::with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'czapki');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        $teams = Team::all();
        return (view('pages/home', ['products' => $products, 'teams' => $teams, 'jerseys' => $jerseys, 'hats' => $hats]));
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
    function jerseys()
    {
        $jerseys = Product::with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'koszulki');
            })
            ->get();


        return (view('pages/jerseys', ['jerseys' => $jerseys,]));
    }
    function hats()
    {
        $hats = Product::with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'czapki');
            })
            ->get();
        return (view('pages/hats', ['hats' => $hats,]));
    }
    function newest()
    {
        $products = Product::orderByDesc('created_at')->get();
        return (view('pages/newest', ['products' => $products]));
    }
    function team($id)
    {
        $team = Team::findOrFail($id);
        $teamId = $team->id;
        $products = Product::where('team_id', $teamId)->get();
        return (view('pages/team', ['products' => $products]));
    }
}