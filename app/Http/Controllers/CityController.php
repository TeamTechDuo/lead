<?php

namespace App\Http\Controllers;

use App\Area;
use App\City;
use App\Country;
use App\Division;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $countries = Country::orderBy('name','asc')->get();
        $divisions = Division::orderBy('name','asc')->get();
        $cities = City::orderBy('name','asc')->paginate(8);
        return view('city.index', compact('divisions','countries','cities'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'country_id' => 'required',
            'division_id' => 'required',
        ]);

        $city = new City([
            'name' => $request->get('name'),
            'country_id' => $request->get('country_id'),
            'division_id' => $request->get('division_id'),
        ]);
        $city->save();
        return redirect()->back()->with('success', 'City name successfully created!');   
    }

    public function edit(City $city)
    {
        $city = Division::find($city->id);
        return view('city.edit', compact('city'));
    }

    public function update(Request $request, City $city)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'country_id' => 'required',
            'division_id' => 'required',
        ]);

        $city = City::find($city->id);
        $city->name = $request->get('name');
        $city->country_id = $request->get('country_id');
        $city->division_id = $request->get('division_id');
        $city->save();
        return redirect()->back()->with('success', 'City name updated created!');   
    }

    public function destroy(City $city)
    {
        $city = City::find($city->id);
        $city->delete();
        $area = Area::where('city_id', $city->id)->delete();
        return redirect()->back()->with('success', 'City name successfully deleted!');   
    }
}
