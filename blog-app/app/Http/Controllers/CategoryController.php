<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }


    public function create()
    {
        return view('categories.create');
    }

    public function store()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update()
    {
       //
    }


    public function destroy()
    {
        //
    }
}
