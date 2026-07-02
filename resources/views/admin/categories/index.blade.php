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
    @endforeach
</body>
</html>