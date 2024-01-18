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

//Route::get('/', function () { return view('home'); });
Route::get('/home', function () { return view('home'); });

//Route::get('/recipes', function () { return view('recipes'); });

Route::get('/my_recipes', function () { return view('my_recipes'); });
Route::get('/favorites', function () { return view('favorites'); });
Route::get('/tips', function () { return view('tips'); });

Route::get('/recipe', function () { return view('single_recipe'); });

Route::get('/login', function () { return view('login'); });


//Route::get('my_recipes', [RecipeController::class, 'my']);
Route::get('add', [RecipeController::class, 'index']);
Route::get('add', [CousineController::class, 'getCousines']);

Route::post('addRecipe', [RecipeController::class, 'addRecipe']);
Route::get('/insert', [CousineController::class, 'insertDefaultData']);

Route::get('/recipes/{cousine_id}', [RecipeController::class, 'getCousinesRecipes'])->name('cousineRecipes');

Route::get('/getRecipesCards/{cousine_id}', [RecipeController::class, 'showRecipeCards']);

Route::get('/getMyRecipes', [RecipeController::class, 'showMyRecipes']);

Route::get('/recipe/{recipe_id}', [RecipeController::class, 'getRecipe']);

Route::put('updateRecipe/{recipe_id}', [RecipeController::class, 'update'])->name('updateRecipe');
Route::get('/update/{recipeId}', [RecipeController::class, 'editRecipe']);


Route::delete('/delete/{recipe_id}', [RecipeController::class, 'deleteRecipe']);

//Route::get('/delete', [RecipeController::class, 'deleteRecipeDefault']);

Auth::routes();
