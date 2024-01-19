<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*function index() {
        $tip = Tip::all();

        return view('single_recipe', compact('tip'));
    }*/

    public function insertTip(Request $request)
    {
        //echo $request;
        $request->validate([
            'text'=>'required',
            //'user_id'=>'required',
            'recipe_id'=>'required'
        ]);

        Tip::create([
            'text'=>$request->input('text'),
            'user_id'=>Auth::id(),
            //'user_id'=>$request->input('user_id'),
            'recipe_id'=>$request->input('recipe_id'),
        ]);

        return response()->json(['success'=>'Ďakujeme za zdieľanie názoru.']);
    }

    public function updateTip() {

    }

    public function deleteTip() {

    }
}
