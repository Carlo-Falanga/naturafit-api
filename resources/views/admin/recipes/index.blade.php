<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recipes Index</title>
</head>
<body>
    @foreach ($recipes as $recipe)
        <div>
            <h2>{{ $recipe->title }}</h2>
            <p>{{ $recipe->description }}</p>

            @if ($recipe->image)
                <img src="{{ $recipe->image }}" alt="{{ $recipe->title }}" width="200">
            @endif

            <ul>
                <li>Categoria: {{ $recipe->category?->name ?? '—' }}</li>
                <li>Porzioni: {{ $recipe->servings }}</li>
                <li>Preparazione: {{ $recipe->prep_time }} min</li>
                <li>Cottura: {{ $recipe->cook_time }} min</li>
                <li>Difficoltà: {{ $recipe->difficulty }}</li>
                <li>Calorie: {{ $recipe->calories }} kcal</li>
                <li>Proteine: {{ $recipe->protein }} g</li>
                <li>Carboidrati: {{ $recipe->carbs }} g</li>
                <li>Grassi: {{ $recipe->fats }} g</li>
                <li>Fibre: {{ $recipe->fiber }} g</li>
                <li>Zuccheri: {{ $recipe->sugar }} g</li>
            </ul>

            <h3>Istruzioni</h3>
            <p>{{ $recipe->instructions }}</p>

            <h3>Tag</h3>
            <ul>
                @forelse ($recipe->tags as $tag)
                    <li>{{ $tag->name }}</li>
                @empty
                    <li>Nessun tag</li>
                @endforelse
            </ul>

            <a href="{{ route('admin.recipes.edit', $recipe) }}" class="btn btn-warning">
                Modifica
            </a>

            <form action="{{ route('admin.recipes.destroy', $recipe) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Elimina</button>
            </form>
        </div>
    @endforeach
</body>
</html>