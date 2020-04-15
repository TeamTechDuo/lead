<?php

namespace App\Http\Controllers;

use App\Area;
use App\City;
use App\Country;
use App\Division;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $countries = Country::orderBy('name','asc')->get();
        $divisions = Division::orderBy('name','asc')->get();
        $cities = City::orderBy('name','asc')->get();
        $areas = Area::orderBy('name','asc')->paginate(8);
        return view('area.index', compact('divisions','countries','cities','areas'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'country_id' => 'required',
            'division_id' => 'required',
            'city_id' => 'required',
        ]);

        $area = new Area([
            'name' => $request->get('name'),
            'country_id' => $request->get('country_id'),
            'division_id' => $request->get('division_id'),
            'city_id' => $request->get('city_id'),
        ]);
        $area->save();
        return redirect()->back()->with('success', 'Area name successfully created!');   
    }

    public function edit(Area $area)
    {
        $area = Division::find($area->id);
        return view('area.edit', compact('division'));
    }

    public function update(Request $request, Area $area)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'country_id' => 'required',
            'division_id' => 'required',
            'city_id' => 'required',
        ]);

        $area = Area::find($area->id);
        $area->name = $request->get('name');
        $area->country_id = $request->get('country_id');
        $area->division_id = $request->get('division_id');
        $area->city_id = $request->get('city_id');
        $area->save();
        return redirect()->back()->with('success', 'Area name updated created!');   
    }

    public function destroy(Area $area)
    {
        $area = Area::find($area->id);
        $area->delete();
        return redirect()->back()->with('success', 'Area name successfully deleted!');   
    }
}
