<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name','asc')->paginate(8);
        return view('category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
        ]);

        $category = new Category([
            'name' => $request->get('name'),
        ]);
        $category->save();
        return redirect()->back()->with('success', 'Company Category name successfully created!');   
    }

    public function edit(Category $category)
    {
        $category = Category::find($category->id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
        ]);

        $category = Category::find($category->id);
        $category->name = $request->get('name');
        $category->save();
        return redirect()->back()->with('success', 'Company category name updated created!');   
    }

    public function destroy(Category $category)
    {
        $category = Category::find($category->id);
        $category->delete();
        $subcategory = SubCategory::where('category_id', $category->id)->delete();
        return redirect()->back()->with('success', 'Company category name successfully deleted!');   
    }
}
