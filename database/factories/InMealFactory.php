<?php

namespace Database\Factories;

use App\Models\Ingridents;
use App\Models\InMeal;
use App\Models\Meal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InMeal>
 */
class InMealFactory extends Factory
{
    protected $model=InMeal::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'meal_id' => Meal::inRandomOrder()->first()->id,
            'ing_id' => Ingridents::inRandomOrder()->first()->id
        ];
    }
}
