<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        // return view('admin/pages/categories/index');
        return 'test';
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|unique:categories|max:255'
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return back()->with('success','Kategoria Zapisana');
    }
}
