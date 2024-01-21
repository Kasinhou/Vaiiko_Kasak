<?php

use App\Http\Controllers\CousineController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\TipController;
use Illuminate\Support\Facades\Auth;
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
//domovska stranka
Route::get('/home', function () { return view('home'); });

//Route::get('/recipes', function () { return view('recipes'); });
//moje recepty, oblubene a info
Route::get('/my_recipes', function () { return view('my_recipes'); });
Route::get('/favorites', function () { return view('favorites'); });
Route::get('/info', function () { return view('info'); });

Route::get('/login', function () { return view('login'); });

//pridavanie receptov, presmerovanie a poskytnutie info o kuchyniach
Route::get('add', [RecipeController::class, 'index']);
Route::get('add', [CousineController::class, 'getCousines']);

//zapisanie receptu do db
Route::post('addRecipe', [RecipeController::class, 'addRecipe']);
Route::get('/insert', [CousineController::class, 'insertDefaultData']);

//poskytnutie receptov podla kuchyn
Route::get('/recipes/{cousine_id}', [RecipeController::class, 'getCousinesRecipes'])->name('cousineRecipes');

Route::get('/getRecipesCards/{cousine_id}', [RecipeController::class, 'showRecipeCards']);

Route::get('/getMyRecipes', [RecipeController::class, 'showMyRecipes']);
//insert tipu do db, konkretny recept, vsetky tipy receptu a update tipu
Route::post('/addTip', [TipController::class, 'insertTip']);
Route::get('/recipe/{recipe_id}', [RecipeController::class, 'getRecipe']);
Route::get('/getRecipeTips/{recipe_id}', [TipController::class, 'showRecipeTips']);//komentare
Route::put('/updateTip/{tip_id}', [TipController::class, 'updateTip']);//toto teraz

//oblubene
Route::get('/getFavorites', [FavoriteController::class, 'getMyFavorites']);

//reakcia na Oblubene
Route::post('/addFavorite', [FavoriteController::class, 'saveFavorite']);
Route::delete('/deleteFavorite/{recipe_id}', [FavoriteController::class, 'deleteFavorite']);

//update receptu
Route::put('updateRecipe/{recipe_id}', [RecipeController::class, 'update'])->name('updateRecipe');
Route::get('/update/{recipeId}', [RecipeController::class, 'editRecipe']);

//delete receptu a tipu
Route::delete('/delete/{recipe_id}', [RecipeController::class, 'deleteRecipe']);
Route::delete('/deleteTip/{tip_id}', [TipController::class, 'deleteTip']);

//reakcia na hladanie
Route::get('/search/', [RecipeController::class, 'searching'])->name('search');

Auth::routes();
