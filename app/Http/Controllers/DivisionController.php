<?php

namespace App\Http\Controllers;

use App\Area;
use App\City;
use App\Country;
use App\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $countries = Country::orderBy('name','asc')->get();
        $divisions = Division::orderBy('name','asc')->paginate(8);
        return view('division.index', compact('divisions','countries'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'country_id' => 'required',
        ]);

        $division = new Division([
            'name' => $request->get('name'),
            'country_id' => $request->get('country_id'),
        ]);
        $division->save();
        return redirect()->back()->with('success', 'Division name successfully created!');   
    }

    public function edit(Division $division)
    {
        $division = Division::find($division->id);
        return view('division.edit', compact('division'));
    }

    public function update(Request $request, Division $division)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'country_id' => 'required',
        ]);

        $division = Division::find($division->id);
        $division->name = $request->get('name');
        $division->country_id = $request->get('country_id');
        $division->save();
        return redirect()->back()->with('success', 'Division name updated created!');   
    }

    public function destroy(Division $division)
    {
        $division = Division::find($division->id);
        $division->delete();
        $area = Area::where('division_id', $division->id)->delete();
        $city = City::where('division_id', $division->id)->delete();
        return redirect()->back()->with('success', 'Division name successfully deleted!');   
    }
}
