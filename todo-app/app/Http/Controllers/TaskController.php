<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        Task::create($validated);

        return redirect()->route('tasks.index');
    }

    public function show(string $id)
    {
        //
    }
    
    public function edit(Task $task)
{
    return view('tasks.edit', compact('task'));
}

public function update(Request $request, Task $task)
{
    $validated = $request->validate([
        'title' => 'required|max:255',
        'description' => 'nullable',
    ]);

    $validated['completed'] = $request->has('completed');

    $task->update($validated);

    return redirect()->route('tasks.index');
}

public function destroy(Task $task)
{
    $task->delete();

    return redirect()->route('tasks.index');
}

}
