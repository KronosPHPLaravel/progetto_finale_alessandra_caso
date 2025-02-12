<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Film</title>
</head>
<body>
    <h1>Modifica il Film: {{ $film->title }}</h1>
    <form action="{{ route('films.update', $film->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="title">Titolo:</label>
        <input type="text" name="title" value="{{ $film->title }}" required><br>

        <label for="duration">Durata (min):</label>
        <input type="number" name="duration" value="{{ $film->duration }}" required><br>

        <label for="synopsis">Trama:</label>
        <textarea name="synopsis" required>{{ $film->synopsis }}</textarea><br>

        <button type="submit">Aggiorna</button>
    </form>
</body>
</html>
