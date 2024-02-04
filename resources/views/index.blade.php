<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1>Comics List</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>{{ $comic->title }} - <a href="{{ route('comics.show', $comic->id) }}">mostra dettagli</a></li>
        @endforeach
    </ul>
    <a href="{{ route('comics.create') }}">Inserisci una nuova pasta</a>
</body>

</html>
