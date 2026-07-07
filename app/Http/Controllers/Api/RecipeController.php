<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class RecipeController extends Controller
{
    public function index(){
 
    $recipes = Recipe::with('category')->get();
 
       return response()->json(
            [
                "success" => true,
                "data" => $recipes
            ]
        );
    }

    public function show(Recipe $recipe){


        $recipe->load('category', 'tags');

        return response()->json(
            [
                "success" => true,
                "data" => $recipe
            ]
        );
    } 
}
