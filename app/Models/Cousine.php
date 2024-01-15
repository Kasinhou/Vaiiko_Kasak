<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cousine extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = ['name', 'info', 'img_path'];
}
