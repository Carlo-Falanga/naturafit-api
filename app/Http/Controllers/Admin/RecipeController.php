<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\Tag;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::with('category', 'tags')->get();

        return view('admin.recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.recipes.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newRecipe = new Recipe();

        $newRecipe->fill($data);
        $newRecipe->save();

        $newRecipe->tags()->sync($data['tags'] ?? []);

        return redirect()->route('admin.recipes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.recipes.edit', compact('categories', 'tags', 'recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        $data = $request->all();
        $recipe->update($data);

        $recipe->tags()->sync($data['tags'] ?? []);

        return redirect()->route('admin.recipes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('admin.recipes.index');
    }
}
