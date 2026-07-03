<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuovo Recipe</title>
</head>
<body>
    <form action="{{ route('admin.tags.store') }}" method="POST">
        @csrf

        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">

        <button type="submit">Salva</button>
    </form>
</body>
</html>
