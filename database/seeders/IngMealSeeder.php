<?php

namespace Database\Seeders;

use App\Models\InMeal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngMealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InMeal::factory(10)->create();
    }
}
