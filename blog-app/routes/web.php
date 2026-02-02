<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class,'index']);
Route::get('/home/detaille/{post}',[HomeController::class,'show'])->name('postdetaille');
Route::get('/home/filter',[HomeController::class,'filter'])->name('filtrage');
Route::resource('admin/categories', CategoryController::class); 
Route::resource('admin/posts', PostController::class);
Route::put('/posts/{post}/update', [PostController::class, 'update'])->name('posts.update');
Route::resource('home', HomeController::class);
Route::resource('home/detaille', HomeController::class);    
Route::resource('admin', AdminController::class);