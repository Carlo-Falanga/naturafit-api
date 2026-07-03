<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifica Ricetta</title>
</head>
<body>
    <form action="{{ route('admin.recipes.update', $recipe) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Titolo</label>
        <input type="text" name="title" id="title" value="{{ old('title', $recipe->title) }}">

        <label for="description">Descrizione</label>
        <textarea name="description" id="description">{{ old('description', $recipe->description) }}</textarea>

        <label for="servings">Porzioni</label>
        <input type="number" name="servings" id="servings" value="{{ old('servings', $recipe->servings) }}">

        <label for="prep_time">Tempo di preparazione (min)</label>
        <input type="number" name="prep_time" id="prep_time" value="{{ old('prep_time', $recipe->prep_time) }}">

        <label for="cook_time">Tempo di cottura (min)</label>
        <input type="number" name="cook_time" id="cook_time" value="{{ old('cook_time', $recipe->cook_time) }}">

        <label for="difficulty">Difficoltà</label>
        <select name="difficulty" id="difficulty">
            <option value="">— Seleziona —</option>
            <option value="facile" @selected(old('difficulty', $recipe->difficulty) == 'facile')>Facile</option>
            <option value="media" @selected(old('difficulty', $recipe->difficulty) == 'media')>Media</option>
            <option value="difficile" @selected(old('difficulty', $recipe->difficulty) == 'difficile')>Difficile</option>
        </select>

        <label for="calories">Calorie (kcal)</label>
        <input type="number" name="calories" id="calories" value="{{ old('calories', $recipe->calories) }}">

        <label for="protein">Proteine (g)</label>
        <input type="number" step="0.01" name="protein" id="protein" value="{{ old('protein', $recipe->protein) }}">

        <label for="carbs">Carboidrati (g)</label>
        <input type="number" step="0.01" name="carbs" id="carbs" value="{{ old('carbs', $recipe->carbs) }}">

        <label for="fats">Grassi (g)</label>
        <input type="number" step="0.01" name="fats" id="fats" value="{{ old('fats', $recipe->fats) }}">

        <label for="fiber">Fibre (g)</label>
        <input type="number" step="0.01" name="fiber" id="fiber" value="{{ old('fiber', $recipe->fiber) }}">

        <label for="sugar">Zuccheri (g)</label>
        <input type="number" step="0.01" name="sugar" id="sugar" value="{{ old('sugar', $recipe->sugar) }}">

        <label for="instructions">Istruzioni</label>
        <textarea name="instructions" id="instructions">{{ old('instructions', $recipe->instructions) }}</textarea>

        <label for="category_id">Categoria</label>
        <select name="category_id" id="category_id">
            <option value="">— Seleziona —</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected(old('category_id', $recipe->category_id) == $category->id)>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <fieldset>
            <legend>Tag</legend>
            @foreach ($tags as $tag)
                <label>
                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                        @checked(in_array($tag->id, old('tags', $recipe->tags->pluck('id')->all())))>
                    {{ $tag->name }}
                </label>
            @endforeach
        </fieldset>

        <button type="submit">Salva</button>
    </form>
</body>
</html>
