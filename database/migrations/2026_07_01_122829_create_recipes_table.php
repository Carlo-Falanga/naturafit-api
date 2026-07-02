<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->string("image")->nullable();
            $table->integer("servings");
            $table->integer("prep_time");
            $table->integer("cook_time");
            $table->string("difficulty");
            $table->integer("calories");
            $table->decimal("protein", 5, 2);
            $table->decimal("carbs", 5, 2);
            $table->decimal("fats", 5, 2);
            $table->decimal("fiber", 5, 2);
            $table->decimal("sugar", 5, 2);
            $table->text("instructions");
            $table->foreignId("category_id")->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
