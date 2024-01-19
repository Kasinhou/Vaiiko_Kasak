<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'tips';

    protected $fillable = ['text', 'user_id', 'recipe_id'];

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
