<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show (){
        return 'show';
    }
    public function create (){
        return 'create';
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
