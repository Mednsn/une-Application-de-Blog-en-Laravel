<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle Tâche</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; padding: 20px; }
        form { display: flex; flex-direction: column; }
        label { margin-top: 10px; font-weight: bold; }
        input, textarea { padding: 8px; margin-top: 5px; border: 1px solid #ddd; border-radius: 3px; }
        button { margin-top: 20px; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 3px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Nouvelle Tâche</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <label for="title">Titre:</label>
        <input type="text" name="title" id="title" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4"></textarea>

        <button type="submit">Créer</button>
    </form>

    <br>
    <a href="{{ route('categories.index') }}">Retour à la liste</a>
</body>
</html>
