<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index(){
        $colors = Color::all();
        return view('admin.pages.colors',['colors'=>$colors]);
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|unique:colors|max:255',
            'code'=> 'required|unique:colors|max:255'
        ]);
        $color = new Color();
        $color->name = $request->name;
        $color->code = $request->code;
        $color->save();

        return back()->with('success','Kolor dodany');

    }

    public function destroy($id){
        Color::findOrFail($id)->delete();
        return back()->with('success','Kolor usunięty');
    }
}
