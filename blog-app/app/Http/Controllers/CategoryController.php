<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{

    public function index()
    {
        // return 'wslat index';exit;
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }


    public function show()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        Category::create($validated);
        return back();
    }

    public function edit(Category $category)
    {
        // var_dump($category); exit;
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);

        $category->update($validated);

        return back();
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back();
    }
}
