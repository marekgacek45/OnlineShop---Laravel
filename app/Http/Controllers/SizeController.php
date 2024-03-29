<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index(){
        $sizes = Size::all();
        return view('admin.pages.sizes',['sizes'=>$sizes]);
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|unique:sizes|max:255',
        ]);
        $size = new Size();
        $size->name = $request->name;
        $size->save();

        return back()->with('success','Rozmiar dodany');

    }

    public function destroy($id){
        Size::findOrFail($id)->delete();
        return back()->with('success','Rozmiar usunięty');
    }
}
