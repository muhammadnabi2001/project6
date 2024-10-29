<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;
    protected $table = 'meals';
    protected $fillable = [
        'name',
    ];
    public function ingridents()
    {
        return $this->belongsToMany(Ingridents::class,'in_meals','meal_id','ing_id');
    }
}
