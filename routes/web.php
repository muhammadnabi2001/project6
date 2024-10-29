<?php

use App\Http\Controllers\IngController;
use App\Http\Controllers\MealController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MealController::class, 'index']);
Route::get('/create-meal', [MealController::class, 'create']);
Route::post('/meal', [MealController::class, 'meal']);
Route::post('/delete-meal', [MealController::class, 'destroy']);
Route::put('/update-meal/{meal}', [MealController::class, 'update'])->name('meal.update');
Route::get('/meal-search', [MealController::class, 'search'])->name('meal.search');

Route::get('/ing', [IngController::class, 'index']);
Route::get('/create-ing', [IngController::class, 'create']);
Route::post('/ing', [IngController::class, 'ing']);
Route::post('/delete-ing', [IngController::class, 'destroy']);
Route::put('/update-ing/{ing}', [IngController::class, 'update'])->name('ing.update');
Route::get('/ing-search', [IngController::class, 'search'])->name('ing.search');

