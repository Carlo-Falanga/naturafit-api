<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $difficulties = ['facile', 'media', 'difficile'];

        $categories = Category::all();
        $tags = Tag::all();

        for ($i = 0; $i < 10; $i++) {
            $newRecipe = new Recipe();

            $newRecipe->title       = $faker->sentence(3);
            $newRecipe->description = $faker->paragraph(2);
            $newRecipe->servings    = $faker->numberBetween(1, 8);
            $newRecipe->prep_time   = $faker->numberBetween(5, 45);
            $newRecipe->cook_time   = $faker->numberBetween(0, 90);
            $newRecipe->difficulty  = $faker->randomElement($difficulties);
            $newRecipe->calories    = $faker->numberBetween(150, 800);
            $newRecipe->protein     = $faker->randomFloat(2, 5, 50);
            $newRecipe->carbs       = $faker->randomFloat(2, 10, 90);
            $newRecipe->fats        = $faker->randomFloat(2, 2, 40);
            $newRecipe->fiber       = $faker->randomFloat(2, 0, 15);
            $newRecipe->sugar       = $faker->randomFloat(2, 0, 30);
            $newRecipe->instructions = $faker->paragraphs(4, true);

            $newRecipe->category_id = $categories->random()->id;
            $newRecipe->save();

            $randomTags = $tags->random($faker->numberBetween(1, 3))->pluck('id');
            $newRecipe->tags()->attach($randomTags);
        }
    }
}
