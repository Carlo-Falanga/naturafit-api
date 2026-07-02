<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Colazione',
            'Pranzo',
            'Cena',
            'Snack',
            'Dolci',
            'Primi piatti',
            'Secondi piatti',
            'Contorni',
        ];

        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->save();
        }
    }
}
