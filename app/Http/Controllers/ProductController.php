<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Category;
use App\Models\Product;
use App\Models\Team;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->orderBy('created_at','desc')->get();
        return view('admin.pages.products.index',['products'=>$products]);
    }

    public function create()
    {
        $categories = Category::all();
        $teams = Team::all();
        $colors = Color::all();
        return view('admin.pages.products.create', ['categories' => $categories, 'colors' => $colors,'teams'=>$teams]);
    }

    public function store(Request $request)
    { 
        $request->validate([
            'title' => 'required|max:255',
            'price' => 'required',
            'category_id' => 'required',
            'team_id' => 'required',
            'colors' => 'required',
            'thumbnail' => 'required|image|mimes:jpg,png,jpeg,webp|max:5000',
        ]);

        $image_name = 'teams_logos/' . time() . rand(0, 99999) . "." . $request->thumbnail->getClientOriginalExtension();
        $request->thumbnail->storeAs('public', $image_name);

        $product = new Product([
            'title' => $request->title,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'team_id' => $request->team_id,
            'description' => $request->description,
            'thumbnail' => $image_name,
        ]);

        $product->save();
        $product->colors()->attach($request->colors);

        return back()->with('success', 'Produkt dodany');
    }

    public function edit()
    {
        return 'edit';
    }

    public function update()
    {
        return 'update';
    }

    public function delete($id)
    {
        return 'delete';
    }
}