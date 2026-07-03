<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorie Index</title>
</head>
<body>
    @foreach ($categories as $category)
        <li>{{ $category->name }}</li>
        <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning">
            Modifica
        </a>
        <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">


            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Elimina</button>

        </form>
    @endforeach
</body>
</html>