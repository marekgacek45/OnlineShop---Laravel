<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.pages.products.index');
    }

    public function create()
    {
        $categories = Category::all();
        $colors = Color::all();
        return view('admin.pages.products.create', ['categories' => $categories, 'colors' => $colors]);
    }

    public function store(Request $request)
    { 
        $request->validate([
            'title' => 'required|max:255',
            'price' => 'required',
            'category_id' => 'required',
            'colors' => 'required',
            'thumbnail' => 'required|image|mimes:jpg,png,jpeg,webp|max:5000',
        ]);

        $image_name = 'products/' . time() . rand(0, 99999) . "." . $request->thumbnail->getClientOriginalExtension();
        $request->thumbnail->storeAs('public', $image_name);

        $product = new Product([
            'title' => $request->title,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'thumbnail' => $image_name,
        ]);

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