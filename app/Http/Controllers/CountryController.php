<?php

namespace App\Http\Controllers;

use App\Area;
use App\City;
use App\Country;
use App\Division;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::orderBy('name','asc')->paginate(8);
        return view('country.index', compact('countries'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
        ]);

        $country = new Country([
            'name' => $request->get('name'),
        ]);
        $country->save();
        return redirect()->back()->with('success', 'Country name successfully created!');   
    }

    public function edit(Country $country)
    {
        $country = Country::find($country->id);
        return view('country.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
        ]);

        $country = Country::find($country->id);
        $country->name = $request->get('name');
        $country->save();
        return redirect()->back()->with('success', 'Country name updated created!');   
    }

    public function destroy(Country $country)
    {
        $country = Country::find($country->id);
        $country->delete();
        $area = Area::where('country_id', $country->id)->delete();
        $city = City::where('country_id', $country->id)->delete();
        $division = Division::where('country_id', $country->id)->delete();
        return redirect()->back()->with('success', 'Country name successfully deleted!');   
    }
}
