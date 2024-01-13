<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    function index() {
        return view('add_recipe');
    }

    public function addRecipe(Request $request)
    {
        //return $request->input();
        $request->validate([
            'name'=>'required',
            'ingredients'=>'required',
            'steps'=>'required'
        ]);

        $query = DB::table('recipes')->insert([
            'name'=>$request->input('name'),
            'info'=>$request->input('info'),
            'time'=>$request->input('time'),
            'origin'=>$request->input('origin'),
            'difficulty'=>$request->input('difficulty'),
            'type'=>$request->input('type'),
            'ingredients'=>$request->input('ingredients'),
            'steps'=>$request->input('steps')
        ]);

        if ($query) {
            return back()->with('success', 'Úspešné pridanie receptu');
        } else {
            return back()->with('fail', 'Neúspešné pridanie receptu');
        }

        /*$recipe = new Recipe();
        $recipe->name = $request->input('name');
        $recipe->info = $request->input('info');
        $recipe->time = $request->input('time');
        $recipe->difficulty = $request->input('difficulty');
        $recipe->country = $request->input('country');
        $recipe->type = $request->input('type');
        $recipe->ingredients = $request->input('ingredients');
        $recipe->steps = $request->input('steps');

        $recipe->save();

        return response()->json(['message' => 'Recipe added successfully']);*/
    }

    public function updateRecipe() {

    }

    public function deleteRecipe() {

    }
}
