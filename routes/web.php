<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'recipes' => Recipe::with('category')->latest()->get(),
        'totRecipes' => Recipe::count(),
        'totCategories' => Category::count(),
        'totTags' => Tag::count(),
        'mediaKcal' => round(Recipe::avg('calories')),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {

        Route::resource('categories', CategoryController::class)->only(['index', 'store', 'update', 'destroy']);
        Route::resource('tags', TagController::class)->only(['index', 'store', 'update', 'destroy']);
        Route::resource('recipes', RecipeController::class);
    });

require __DIR__.'/auth.php';
