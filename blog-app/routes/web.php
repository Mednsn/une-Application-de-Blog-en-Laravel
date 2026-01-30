<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

Route::get('/', [AdminController::class,'index']);

// Route::resource('', AdminController::class); 
Route::resource('admin/categories', CategoryController::class); 
Route::resource('admin/posts', PostController::class);
