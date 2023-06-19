<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin/pages/categories' ,['categories'=>$categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255'
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return back()->with('success', 'Kategoria Dodana');
    }

    public function destroy($id){
        Category::findOrFail($id)->delete();
        return back()->with('success','Kategoria Usunięta');
    }
}