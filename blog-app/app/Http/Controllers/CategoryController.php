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


    public function create()
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
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $validated['completed'] = $request->has('completed');

        $category->update($validated);

        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index');
    }
}
