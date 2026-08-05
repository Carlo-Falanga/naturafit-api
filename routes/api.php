<?php

use App\Http\Controllers\Api\RecipeController;
use Illuminate\Support\Facades\Route;


Route::get('recipes', [RecipeController::class, 'index']);

Route::get('recipes/{recipe}', [RecipeController::class, 'show']);

