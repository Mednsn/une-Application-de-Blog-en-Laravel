<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Tâches</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }
        .task { border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 5px; }
        .completed { background-color: #d4edda; }
        .btn { padding: 8px 15px; margin: 5px; text-decoration: none; border-radius: 3px; }
        .btn-primary { background-color: #007bff; color: white; }
        .btn-success { background-color: #28a745; color: white; }
        .btn-danger { background-color: #dc3545; color: white; }
    </style>
</head>
<body>
    <h1>Mes Tâches</h1>

    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Nouvelle Tâche</a>

    @foreach($tasks as $task)
        <div class="task {{ $task->completed ? 'completed' : '' }}">
            <h3>{{ $task->title }}</h3>
            <p>{{ $task->description }}</p>
            <p>Statut: {{ $task->completed ? 'Terminée' : 'En cours' }}</p>

            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-success">Modifier</a>

            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    @endforeach
</body>
</html>
