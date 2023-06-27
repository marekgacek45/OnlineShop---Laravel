<?php

namespace App\Http\Controllers;


use App\Models\Size;
use App\Models\Team;
use App\Models\Color;
use App\Models\Gender;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->orderBy('created_at', 'desc')->get();
        return view('admin.pages.products.index', ['products' => $products]);
    }

    public function create()
    {

        $categories = Category::all();
        $teams = Team::all();
        $sizes = Size::all();
        $genders = Gender::all();

        return view('admin.pages.products.create', ['categories' => $categories, 'teams' => $teams, 'sizes' => $sizes, 'genders' => $genders]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'price' => 'required',
            'category_id' => 'required',
            'team_id' => 'required',
            'genders' => 'required',
            'sizes' => 'required',

            'thumbnail' => 'required|image|mimes:jpg,png,jpeg,webp|max:5000',
        ]);

        $thumbnail_name = 'teams_logos/' . time() . rand(0, 99999) . "." . $request->thumbnail->getClientOriginalExtension();
        $request->thumbnail->storeAs('public', $thumbnail_name);

        $product = new Product([
            'title' => $request->title,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'team_id' => $request->team_id,
            'description' => $request->description,
            'thumbnail' => $thumbnail_name,
        ]);

        $product->save();
        $product->sizes()->attach($request->sizes);
        // $product->colors()->attach($request->colors);
        $product->genders()->attach($request->genders);


        return back()->with('success', 'Produkt dodany');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $teams = Team::all();
        $sizes = Size::all();
        $genders = Gender::all();


        return view('admin.pages.products.edit', ['product' => $product, 'categories' => $categories, 'teams' => $teams, 'sizes' => $sizes, 'genders' => $genders]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'team_id' => 'required',
            'sizes' => 'required',
            'genders' => 'required',
            'price' => 'required',
            'thumbnail' => 'image|mimes:jpg,png,jpeg,webp|max:5000',
        ]);
    
        $product = Product::findOrFail($id);
        $thumbnail_name = $product->thumbnail;
    
        if ($request->thumbnail) {
            $thumbnail_name = 'teams_logos/' . time() . rand(0, 99999) . "." . $request->thumbnail->getClientOriginalExtension();
            $request->thumbnail->storeAs('public', $thumbnail_name);
        }
    
        $product->update([
            'title' => $request->title,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'team_id' => $request->team_id,
            'description' => $request->description,
            'thumbnail' => $thumbnail_name,
        ]);
    
        $product->genders()->sync($request->genders);
        $product->sizes()->sync($request->sizes);
    
        return redirect('/')->with('success', 'produkt edytowany');
    }

    public function delete($id)
    {
        return 'delete';
    }
}