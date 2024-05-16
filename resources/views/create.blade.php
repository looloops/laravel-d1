<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuova Attività</title>
</head>

<body>
    <h1>Nuova Attività</h1>
    <!-- Form per creare una nuova attività -->
    <form action="{{ route('create') }}" method="post">
        <label for="title">Titolo:</label>
        <input type="text" name="title" id="title">
        <button type="submit">Crea Attività</button>
    </form>
</body>

</html>