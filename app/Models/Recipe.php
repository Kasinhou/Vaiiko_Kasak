<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Recipe extends Authenticatable
{
    public $timestamps = true;
    protected $table = 'recipes';
    protected $fillable =
        ['name', 'info', 'time', 'origin', 'difficulty',
            'type', 'addinfo', 'imgpath', 'likes', 'ingredients',
            'steps', 'user_id', 'cousine_id'];

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getDate() {
        return \Carbon\Carbon::parse($this->created_at)->format('d.m.20y');
    }

    public function getTime() {
        return $this->time ? $this->time : "";
    }

}
