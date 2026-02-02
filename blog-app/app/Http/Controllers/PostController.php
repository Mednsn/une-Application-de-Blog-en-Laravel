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

        // dd($categories);exit;
        return view('admin.postes', compact('categories', 'posts'));
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
        echo "wslat hna show";exit;
        
    }


    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.edit', compact('categories','post'));
    }

    public function update(Request $request,Post $post)
    {
        $validated = $request->validate([
           'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|string',
            'author' => 'required|string|max:255',
            'read_time' => 'required',
            'category_id' => 'required|exists:categores,id',
        ]);
        $post->update($validated);
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back();
    }
}
