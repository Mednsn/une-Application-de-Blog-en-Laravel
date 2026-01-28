<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Bienvenue dans Laravel !';
});

Route::get('/hello/{nom}', function ($nom) {
    return "Bonjour, $nom !";
});
use App\Http\Controllers\CategoryController;

Route::resource('categories', CategoryController::class);
