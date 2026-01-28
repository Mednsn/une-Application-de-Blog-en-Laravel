<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{

    public function index()
    {
        $articles = [
            [
                'title' => 'Mastering MVC in Laravel 11',
                'slug' => 'mastering-mvc-laravel-11',
                'excerpt' => 'Understanding the Model-View-Controller architecture...',
                'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085',
                'category' => 'Laravel',
                'category_color' => 'bg-indigo-600',
                'date' => 'Jan 24, 2026',
                'read_time' => '5 min read',
                'author' => 'John Doe',
                'author_initials' => 'JD',
            ],
            [
                'title' => 'Designing Clean UIs with Tailwind CSS',
                'slug' => 'clean-ui-tailwind',
                'excerpt' => 'Tailwind CSS provides a utility-first approach...',
                'image' => 'https://images.unsplash.com/photo-1555099962-4199c345e5dd',
                'category' => 'Tailwind',
                'category_color' => 'bg-emerald-500',
                'date' => 'Jan 22, 2026',
                'read_time' => '8 min read',
                'author' => 'Alice Smith',
                'author_initials' => 'AS',
            ],
        ];

        return view('categories.index', compact('articles'));


        // $categories = Category::all()->with('post');
        // return view('categories.index', compact('categories'));
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

        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
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
