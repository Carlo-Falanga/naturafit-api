<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuova Categoria</title>
</head>
<body>
    <form action="{{ route('admin.categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}">

        <button type="submit">Salva</button>
    </form>
</body>
</html>
