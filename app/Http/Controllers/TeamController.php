<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::all();
        return view('admin/pages/teams', ['teams'=>$teams]);
    }
public function store(Request $request){
    $request->validate([
        'name'=>'required|max:255',
        'logo' => 'required|image|mimes:jpg,png,jpeg,webp|max:5000',
    ]);
    $logo_name = 'teams/' .time() . "."  . $request->logo->getClientOriginalExtension();
    $request->logo->storeAs('public', $logo_name);

    $team = new Team([
        'name'=>$request->name,
        'logo'=>$logo_name
    ]);
$team->save();
return back()->with('success', 'Drużyna Dodana');

}

    public function destroy($id){
        Team::findOrFail($id)->delete();
        return back()->with('Success', 'Drużyna usunięta poprawnie');
    }
}
