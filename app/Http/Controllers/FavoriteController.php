<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //insert oblubeneho do db
    public function saveFavorite(Request $request) {
        $request->validate([
            'recipe_id'=>'required|integer'
        ]);

        Favorite::create([
            'user_id'=>Auth::id(),
            'recipe_id'=>$request->input('recipe_id'),
        ]);

        return response()->json(['success' => 'Pridane do oblubenych.']);
    }

    //delete oblubeneho do db
    public function deleteFavorite($recipe_id) {
        $user = Auth::id();
        Favorite::where('recipe_id', $recipe_id)
                ->where('user_id', $user)
                ->delete();
    }

    //oblubene receptu prihlaseneho uzivatela
    public function getMyFavorites() {
        $user = Auth::id();
        $favorites = Favorite::with('recipe')->where('user_id', $user)->get();

        //to do
        return response()->json(['favorites' => $favorites]);
    }
}
