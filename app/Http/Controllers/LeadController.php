<?php

namespace App\Http\Controllers;

use App\Area;
use App\Category;
use App\City;
use App\Country;
use App\Division;
use App\Lead;
use App\SubCategory;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name','asc')->get();
        $subcategories = SubCategory::orderBy('name','asc')->get();
        $countries = Country::orderBy('name','asc')->get();
        $divisions = Division::orderBy('name','asc')->get();
        $cities = City::orderBy('name','asc')->get();
        $areas = Area::orderBy('name','asc')->get();
        $leads = Lead::orderBy('id', 'DESC')->paginate(10);
        return view('lead.index', compact('categories','subcategories','countries','divisions','cities','areas','leads'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'company_name' => 'max:255',
            'company_email' => 'max:255',
            'company_phone' => 'max:255',
            'company_website' => 'max:255',
            'first_name' => 'max:255',
            'last_name' => 'max:255',
            'designation' => 'max:255',
            'email' => 'max:255',
            'phone' => 'max:255',
            'company_facebook' => 'max:255',
            'company_twitter' => 'max:255',
            'company_linkdin' => 'max:255',
            'company_instagram' => 'max:255',
            'postcode' => 'max:255',
            'address' => 'max:255',
        ]);
        $lead = new Lead([
            'company_name' => $request->get('company_name'),
            'category_id' => $request->get('category_id'),
            'subcategory_id' => $request->get('subcategory_id'),
            'company_email' => $request->get('company_email'),
            'company_phone' => $request->get('company_phone'),
            'company_website' => $request->get('company_website'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'designation' => $request->get('designation'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'company_facebook' => $request->get('company_facebook'),
            'company_twitter' => $request->get('company_twitter'),
            'company_linkdin' => $request->get('company_linkdin'),
            'company_instagram' => $request->get('company_instagram'),
            'country_id' => $request->get('country_id'),
            'division_id' => $request->get('division_id'),
            'city_id' => $request->get('city_id'),
            'area_id' => $request->get('area_id'),
            'postcode' => $request->get('postcode'),
            'address' => $request->get('address'),
        ]);
        $lead->save();
        return redirect()->back()->with('success', 'New Lead successfully created!');   
    }
}
