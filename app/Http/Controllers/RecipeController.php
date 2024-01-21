<?php

namespace App\Http\Controllers;

use App\Models\Cousine;
use App\Models\Favorite;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    function index() {
        $recipes = Recipe::all();

        return view('add_recipe', compact('recipes'));
        //return view('add_recipe');
    }

    //recepty ku konkretnej kuchyni
    public function getCousinesRecipes($cousine_id)
    {
        $cousine = Cousine::find($cousine_id);
        $recipes = Recipe::where('cousine_id', $cousine_id)->get();

        //mozno navbar namiesto recipes
        return view('recipes', compact('recipes', 'cousine'));
    }

    public function showRecipeCards($cousine_id)
    {
        $recipes = Recipe::where('cousine_id', $cousine_id)->get();

        return response()->json(['recipes' => $recipes]);
    }

    //moje recepty spolus poctom oblubenych
    public function showMyRecipes() {
        $user_id = Auth::id();
        $recipes = Recipe::where('user_id', $user_id)->get();

        foreach ($recipes as $recipe) {
            $recipe->likes =  Favorite::where('recipe_id', $recipe->id)->count();
        }

        return response()->json(['recipes' => $recipes]);
    }

    //info o tom ci je recept oblubeny
    public function getRecipe($recipe_id) {
        $recipe = Recipe::find($recipe_id);
        $user = $recipe->author();
        $favorite = Favorite::where('recipe_id', $recipe_id)
                            ->where('user_id', Auth::id())
                            ->first();

        return view('single_recipe', compact('recipe', 'user', 'favorite'));
    }

    /*function my() {
        return view('my_recipes');
    }*/

    //spracovanie a vratenie co sa ma ulozit do stlpca na obrazky
    public function saveImg(Request $request) {
        if ($request->hasFile('imgpath')) {
        //if ($file && $file->isValid()) {
            $file = $request->file('imgpath');
            $extension = $file->getClientOriginalExtension();//img extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/recipe/', $filename);
            return $filename;
        } else {
            return "";
        }
    }

    //insert receptu do tabulky
    public function addRecipe(Request $request)
    {
        //return $request->input();
        $request->validate([
            'name'=>'required|string|max:100',
            'info'=>'nullable|max:80',
            'time'=>'nullable|max:20',
            'origin'=>'nullable|string|max:100',
            'type'=>'nullable|string|max:100',
            'ingredients'=>'required',
            'steps'=>'required'
        ]);

        $recipe = Recipe::create([
            'name'=>$request->input('name'),
            'info'=>$request->input('info'),
            'time'=>$request->input('time'),
            'origin'=>$request->input('origin'),
            'difficulty'=>$request->input('difficulty'),
            'type'=>$request->input('type'),
            'addinfo'=>$request->input('addinfo'),
            'imgpath'=>$this->saveImg($request),
            'ingredients'=>$request->input('ingredients'),
            'steps'=>$request->input('steps'),
            'user_id'=>Auth::id(),
            'cousine_id'=>$request->input('cousine_id'),
        ]);

        if ($recipe) {
            return back()->with('success', 'Úspešné pridanie receptu');
        } else {
            return back()->with('fail', 'Neúspešné pridanie receptu');
        }
    }

    //poslanie info o recepte a kuchyniach kvoli uprave receptu
    public function editRecipe($recipe_id) {
        $recipe = Recipe::find($recipe_id);
        $cousines = Cousine::all();

        return view('edit_recipe', compact('recipe', 'cousines'));
    }

    //aktualizacia obrazku
    public function updateImg(Request $request, $recipe) {
        if ($request->hasFile('imgpath')) {
            //echo "Tuto to je";
            $file = $request->file('imgpath');
            $extension = $file->getClientOriginalExtension();//img extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/recipe/', $filename);
            return $filename;
        } else {
            return $recipe->imgpath;
        }
    }

    //update receptu v databaze
    public function update(Request $request, $recipe_id) {
        $request->validate([
            'name'=>'required|string|max:100',
            'info'=>'nullable|max:80',
            'time'=>'nullable|max:20',
            'origin'=>'nullable|string|max:100',
            'type'=>'nullable|string|max:100',
            'ingredients'=>'required',
            'steps'=>'required'
        ]);

        $recipe = Recipe::find($recipe_id);
        $new_img = $this->updateImg($request, $recipe);

        $recipe->update([
            'name'=>$request->input('name'),
            'info'=>$request->input('info'),
            'time'=>$request->input('time'),
            'origin'=>$request->input('origin'),
            'difficulty'=>$request->input('difficulty'),
            'type'=>$request->input('type'),
            'addinfo'=>$request->input('addinfo'),
            'imgpath'=>$new_img,
            'ingredients'=>$request->input('ingredients'),
            'steps'=>$request->input('steps'),
            'user_id'=>$recipe->user_id,
            'cousine_id'=>$request->input('cousine_id'),
        ]);

        if ($recipe) {
            return back()->with('success', 'Úspešné upravenie receptu');
        } else {
            return back()->with('fail', 'Neúspešné upravenie receptu');
        }
    }

    //delete receptu v db
    public function deleteRecipe($recipe_id) {
        Recipe::find($recipe_id)->delete();
        return response()->json(['success'=>'Recept bol úspešne zmazaný.']);
    }

    //poskytnutie receptov ktore obsahuju zadany vyraz
    public function searching(Request $request) {
        $expression = $request->input('search');

        $recipes = Recipe::where('name', 'LIKE', "%{$expression}%")
                         ->orWhere('info', 'LIKE', "%{$expression}%")
                         ->get();

        return view('search', compact('recipes'));
    }
}
