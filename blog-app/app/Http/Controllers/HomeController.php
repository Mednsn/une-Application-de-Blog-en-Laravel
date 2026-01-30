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
        $posts = Post::with('category')->get();

        return view('homepage.index', compact('posts'));
    }
    public function show(Post $post)
    {
       
        return view('homepage.detaille', compact('post'));
    }

}
