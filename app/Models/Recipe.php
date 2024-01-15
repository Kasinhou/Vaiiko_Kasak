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


    /*protected string $name;
    protected string $info;
    protected int $time;
    protected string $origin;
    protected string $difficulty;
    protected string $type;
    protected string $ingredients;
    protected string $steps;


    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getInfo(): string
    {
        return $this->info;
    }

    public function setInfo(string $info): void
    {
        $this->info = $info;
    }

    public function getTime(): int
    {
        return $this->time;
    }

    public function setTime(int $time): void
    {
        $this->time = $time;
    }

    public function getOrigin(): string
    {
        return $this->origin;
    }

    public function setOrigin(string $origin): void
    {
        $this->origin = $origin;
    }

    public function getDifficulty(): string
    {
        return $this->difficulty;
    }

    public function setDifficulty(string $difficulty): void
    {
        $this->difficulty = $difficulty;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getIngredients(): string
    {
        return $this->ingredients;
    }

    public function setIngredients(string $ingredients): void
    {
        $this->ingredients = $ingredients;
    }

    public function getSteps(): string
    {
        return $this->steps;
    }

    public function setSteps(string $steps): void
    {
        $this->steps = $steps;
    }*/

    //doplnit dalsie funkcie
}
