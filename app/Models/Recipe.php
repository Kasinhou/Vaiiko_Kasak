<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

//konkretny recept
class Recipe extends Authenticatable
{
    public $timestamps = true;
    protected $table = 'recipes';
    protected $fillable =
        ['name', 'info', 'time', 'origin', 'difficulty',
            'type', 'addinfo', 'imgpath', 'ingredients',
            'steps', 'user_id', 'cousine_id'];

    //pouzivatel ktory vytvoril recept
    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    //kuchyna do ktorej recept patri
    public function cousine() {
        return $this->belongsTo(Cousine::class, 'cousine_id');
    }

    //formatovany datum vytvorenia
    public function getDate() {
        return \Carbon\Carbon::parse($this->created_at)->format('d.m.20y');
    }

    public function getTime() {
        return $this->time ? $this->time : "";
    }

    public function favorites() {
        return $this->hasMany(Favorite::class);
    }
}
