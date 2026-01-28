<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier la Tâche</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; padding: 20px; }
        form { display: flex; flex-direction: column; }
        label { margin-top: 10px; font-weight: bold; }
        input, textarea { padding: 8px; margin-top: 5px; border: 1px solid #ddd; border-radius: 3px; }
        button { margin-top: 20px; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 3px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Modifier la Tâche</h1>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Titre:</label>
        <input type="text" name="title" id="title" value="{{ $category->title }}" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4">{{ $category->description }}</textarea>

        <label>
            <input type="checkbox" name="completed" value="1" {{ $category->completed ? 'checked' : '' }}>
            Tâche terminée
        </label>

        <button type="submit">Mettre à jour</button>
    </form>

    <br>
    <a href="{{ route('categories.index') }}">Retour à la liste</a>
</body>
</html>
