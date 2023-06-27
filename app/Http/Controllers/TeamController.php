<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('admin/pages/teams', ['teams' => $teams]);
    }
    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|max:255',
            'logo' => 'required|image|mimes:jpg,png,jpeg,webp|max:5000',
        ]);
        $logo_name = 'products/' . time() . rand(0, 99999) . "." . $request->logo->getClientOriginalExtension();
        $request->logo->storeAs('public', $logo_name);
        //poprawić tą ścieżkę później

        $team = new Team([
            'name' => $request->name,
            'logo' => $logo_name
        ]);
        $team->save();

        return back()->with('succes', 'drużyna dodana poprawnie');
    }
    public function destroy($id){
        Team::findOrFail($id)->delete();
        return back()->with('succes', 'drużyna usunięta poprawnie');
    }
}