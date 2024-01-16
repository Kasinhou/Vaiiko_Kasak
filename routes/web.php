<?php

use App\Http\Controllers\CousineController;
use App\Http\Controllers\RecipeController;
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

Route::get('/', function () { return view('home'); });
Route::get('/home', function () { return view('home'); });

Route::get('/recipes', function () { return view('recipes'); });

Route::get('/my_recipes', function () { return view('my_recipes'); });
Route::get('/favourites', function () { return view('favourites'); });

Route::get('/recipe', function () { return view('single_recipe'); });

Route::get('/login', function () { return view('login'); });

/*Route::get('/add', function () {
    return view('add_recipe');
});*/


//Route::get('my_recipes', [RecipeController::class, 'my']);
Route::get('add', [RecipeController::class, 'index']);
Route::get('add', [CousineController::class, 'getCousines']);

Route::post('addRecipe', [RecipeController::class, 'addRecipe']);
Route::get('/insert', [CousineController::class, 'insertDefaultData']);

//Route::get('/delete', [RecipeController::class, 'deleteRecipe']);

Auth::routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
