<?php

namespace App\Http\Controllers;

use App\Models\Cousine;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //vsetky recepty zoberie a
    function index() {
        $recipes = Recipe::all();

        return view('add_recipe', compact('recipes'));
        //return view('add_recipe');
    }

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

    public function showMyRecipes() {
        $user_id = Auth::id();
        $recipes = Recipe::where('user_id', $user_id)->get();

        return response()->json(['recipes' => $recipes]);
    }

    public function getRecipe($recipe_id) {
        $recipe = Recipe::find($recipe_id);
        $user = $recipe->author();

        return view('single_recipe', compact('recipe', 'user'));
    }

    /*function my() {
        return view('my_recipes');
    }*/

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

    public function addRecipe(Request $request)
    {
        //return $request->input();
        $request->validate([
            'name'=>'required',
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
//---------------------------------imageee
            'imgpath'=>$this->saveImg($request),
            'likes'=>0,
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

    public function editRecipe($recipe_id) {
        $recipe = Recipe::find($recipe_id);
        $cousines = Cousine::all();

        return view('edit_recipe', compact('recipe', 'cousines'));
    }

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

    public function update(Request $request, $recipe_id) {
        $request->validate([
            'name'=>'required',
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
            'likes'=>$recipe->likes,
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

    public function deleteRecipe($recipe_id) {
        Recipe::find($recipe_id)->delete();
        return response()->json(['success'=>'Recept bol úspešne zmazaný.']);
    }

}
