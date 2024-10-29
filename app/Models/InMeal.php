<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InMeal extends Model
{
    use HasFactory;
    protected $table = 'in_meals';
    protected $fillable = [
        'meal_id',
        'ing_id',
    ];
    public function meal()
    {
        return $this->belongsToMany(Meal::class,'meal_id','id');
    }
    public function ingridents()
    {
        return $this->belongsToMany(Ingridents::class,'ing_id','id');
    }
}
