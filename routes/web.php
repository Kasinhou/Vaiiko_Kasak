<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home');
});

Route::get('/recipes', function () {
    return view('recipes');
});

Route::get('/recipes/recipe', function () {
    return view('single_recipe');
});

Route::get('/login', function () {
    return view('login');
});
