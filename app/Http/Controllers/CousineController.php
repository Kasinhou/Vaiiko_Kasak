<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cousine;
use Illuminate\Http\Request;

class CousineController extends Controller
{
    public function getCousines()
    {
        $cousines = Cousine::all();

        return view('add_recipe', compact('cousines'));
    }

    public function insertDefaultData()
    {
        /*Cousine::create([
            'name' => 'Talianska',
            'info' => 'Taliansko je vďaka bohatej histórií, rozmanitej kultúre, unikátnej architektúre i chutnej kuchyni obľúbenou európskou destináciou. Svojimi jedinečnými kulinárskymi špecialitami si Taliansko získalo srdcia mnohých cestovateľov. Talianska kuchyňa sa teší celosvetovej obľube a je známa kombináciou výrazných chutí a čerstvých ingrediencií ako je olivový olej, paradajky, cesnak, syr a cestoviny.

Medzi obľúbené jedlá patria lasagne, špagety bolognese, pizza, rizoto i polievka minestrone. Milovníkov sladkého poteší zmrzlina, tiramisu či cannoli.
Talianske pokrmy sa vyznačujú používaním čerstvých surovín ako sú syr, cesnak, paradajky či olivový olej s dôrazom na ich výrazné prírodné chute. Radosť z varenia a pečenia, ktorá je pre Talianov typická, sa odráža vo všetkých druhoch slaných a sladkých pochúťok.',
            'img_path' => 'public/images/talianska.webp',
            ]);

        return 'Default data inserted successfully.';*/
    }
}
