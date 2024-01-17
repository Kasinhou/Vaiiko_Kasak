<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cousine;
use Illuminate\Http\Request;

class CousineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCousines()
    {
        $cousines = Cousine::all();

        return view('add_recipe', compact('cousines'));
    }

    public function insertDefaultData()
    {
        /*Cousine::create([
            'name' => '',
            'info' => '',
            'img_path' => 'public/images/slovenska.jpg',
            ]);

        return 'Default data inserted successfully.';*/
    }
}
