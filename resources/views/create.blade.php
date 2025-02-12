<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea Film</title>
</head>
<body>
    <h1>Crea un nuovo Film</h1>
    <form action="{{ route('films.store') }}" method="POST">
        @csrf
        <label for="title">Titolo:</label>
        <input type="text" name="title" required><br>

        <label for="duration">Durata (min):</label>
        <input type="number" name="duration" required><br>

        <label for="synopsis">Trama:</label>
        <textarea name="synopsis" required></textarea><br>

        <button type="submit">Salva</button>
    </form>
</body>
</html>
