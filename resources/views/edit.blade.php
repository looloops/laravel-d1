<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Attività</title>
</head>

<body>
    <h1>Modifica Attività</h1>
    <!-- Form per modificare un'attività esistente -->
    <form action="" method="post">
        <label for="title">Titolo:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}">
        <button type="submit">Salva Modifiche</button>
    </form>
</body>

</html>