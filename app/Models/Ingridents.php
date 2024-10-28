<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingridents extends Model
{
    use HasFactory;
    protected $table='ingridents';
    protected $fillable=[
        'name'
    ];
}
