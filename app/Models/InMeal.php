<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InMeal extends Model
{
    protected $table='in_meals';
    protected $fillable=['meal_id','ing_id'];
}
