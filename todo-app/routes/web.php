<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return 'Bienvenue dans Laravel !';
});
use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);

Route::get('/hello/{nom}', function ($nom) {
    return "Bonjour, $nom !";
});


