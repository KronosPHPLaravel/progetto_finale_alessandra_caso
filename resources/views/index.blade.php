<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
</head>
<body>
    <h1>Films</h1>
    <a href="{{ route('films.create') }}">Crea un nuovo film</a>

    <ul>
        @foreach ($films as $film)
            <li>
                {{ $film->title }} ({{ $film->duration }} min)
                <a href="{{ route('films.edit', $film->id) }}">Modifica</a>
                <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
