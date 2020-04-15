<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name','asc')->get();
        $subcategories = SubCategory::orderBy('name','asc')->paginate(8);
        return view('subcategory.index', compact('categories','subcategories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'category_id' => 'required',
        ]);

        $subcategory = new SubCategory([
            'name' => $request->get('name'),
            'category_id' => $request->get('category_id'),
        ]);
        $subcategory->save();
        return redirect()->back()->with('success', 'Company subcategory name successfully created!');   
    }

    public function edit(SubCategory $subcategory)
    {
        $subcategory = SubCategory::find($subcategory->id);
        return view('subcaregory.edit', compact('subcategory'));
    }

    public function update(Request $request, SubCategory $subcategory)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'category_id' => 'required',
        ]);

        $subcategory = SubCategory::find($subcategory->id);
        $subcategory->name = $request->get('name');
        $subcategory->category_id = $request->get('category_id');
        $subcategory->save();
        return redirect()->back()->with('success', 'Company subcategory name updated created!');   
    }

    public function destroy(SubCategory $subcategory)
    {
        $subcategory = SubCategory::find($subcategory->id);
        $subcategory->delete();
        return redirect()->back()->with('success', 'Company subcategory name successfully deleted!');   
    }
}
