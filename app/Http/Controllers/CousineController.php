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
            'name' => 'Mexická',
            'info' => 'Mexická kuchyňa si získava obľubu pre svoju rýchlu prípravu, jednoduché zloženie, aj keď niekedy ťažkú prípravu, no najmä pre hodnotu výživovú, ale aj kultúrnu. Úplne základnými potravinami, o ktorých si tu budeme hovoriť aj podrobnejšie informácie sú: cukrová trstina, chilli papriky, strukoviny (jednoznačne nezabudnuteľná fazuľka rôznej farby a veľkosti), a rajčiny, plodiny starých Mayov a Aztékov.
                        Mexická kuchyňa predstavu už z názvu územie štátu pre ktoré je aj charakteristickým znakom vo svete. Bežne na dedine sa celkovo kuchyňa a príprava jedál spolieha na prítomnosť zeleniny a tej je tu dostatok. Pestuje sa tu minimálne 50 druhov fazulí a 150 druhov papričiek, pričom každá má svoju chuť, tvar, veľkosť, ale aj použitie. Práve tieto dve posledné plodiny robia zrejme mexickú kuchyňu mexickou a tak charakteristickou.
                        Musíme však spomenúť aj jeden prvok, či vec bez ktorej klasická mexická kuchyňa ani nemôže byť klasickou. Tortilla. Z nekysnutého cesta okrúhla kukuričná placka, ktorú m Mexičania používajú ako tanier, nádoba, ale aj ako pečivo, niekedy naberačka omáčok a podobne.',
            'img_path' => 'public/images/mexicka.webp',
            ]);*/

        return 'Default data inserted successfully.';
    }
}
