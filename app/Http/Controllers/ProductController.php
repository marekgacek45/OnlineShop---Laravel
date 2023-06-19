<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index (){
        return view('admin.pages.products.index');
    }
    public function create (){
        $categories = Category::all();
        return view('admin.pages.products.create',['categories'=>$categories]);
    }
    public function store (Request $request){
        return 'store';
    }
    public function edit (){
        return 'edit';
    }
    public function update (){
        return 'update';
    }
    public function delete ($id){
        return 'delete';
    }
}
