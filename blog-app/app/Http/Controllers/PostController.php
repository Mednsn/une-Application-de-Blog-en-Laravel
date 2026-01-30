<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        $posts = Post::with('category')->get();

        // dd($posts);exit;
        return view('admin.postes', compact('categories','posts'));
    }

    
    public function create()
    {
       require  view('postes.create');
    }

    
    public function store(Request $request)
    {
    //    var_dump($request);exit;
        $validated = $request->validate([
            
        'title' => 'required|string|max:255',
        'content' => 'required',
        'image' => 'required|string',
        'author' => 'required|string|max:255',
        'read_time' => 'required',
        'category_id' => 'required|exists:categores,id',
    ]);
   
        Post::create($validated);
        return back();
    }

   
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
