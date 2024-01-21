<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//oblubene, like
class Favorite extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'favorites';

    protected $fillable = ['user_id', 'recipe_id'];

    //zistenie akemu receptu patri lajk
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }

    /*public function user()
    {
        return $this->belongsTo(User::class);
    }*/
}
