<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        "title",
        "description",
        "image",
        "servings",
        "prep_time",
        "cook_time",
        "difficulty",
        "calories",
        "protein",
        "carbs",
        "fats",
        "fiber",
        "sugar",
        "instructions",
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
