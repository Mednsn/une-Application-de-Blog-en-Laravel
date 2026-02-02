<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::with('category')->get();

        return view('homepage.index', compact('posts', 'categories'));
    }
    public function show(Post $post)
    {

        return view('homepage.detaille', compact('post'));
    }

    public function filter(Request $request)
    {
        $search_id = $request->searsh;
        // dd($search_id);
        
        if ($search_id) {
            // echo "hjbhjbjk";
        $posts = Post::where('category_id', $search_id)->get();
        // dd($posts);exit;
     }
     else {
        $posts = Post::all();
       return redirect()->route('home.index');
;
    }
// dd($posts);
        $categories = Category::all();

        return view('homepage.index', compact('posts','categories'));
    }
}
