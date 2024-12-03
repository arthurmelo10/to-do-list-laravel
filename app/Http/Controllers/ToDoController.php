<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;
use ToDo\Service\Service;

class ToDoController extends Controller
{
    public function __construct(private readonly Service $service)
    {
    }

    public function index(string $id): InertiaResponse
    {
        $todos = $this->service->getTasksByUser($id);
        $user = request()->user();

        return Inertia::render('ToDo/List', [
            'todos' => $todos,
            'user' => $user,
        ]);
    }

    public function show(Request $request): InertiaResponse
    {
        $id = $request->route('toDoId');
        $todo = $this->service->findTaskById($id);

        return Inertia::render('ToDo/ToDo', [
            'todo' => $todo,
            'userId' => $request->route('id'),
            'toDoId' => $id,
        ]);
    }

    public function create(string $id): InertiaResponse
    {
        return Inertia::render('ToDo/CreateToDo', [
            'userId' => $id,
        ]);
    }

    public function store(Request $request, $userId): RedirectResponse
    {
        $request->validate(
            [
                'title' => 'required|string',
                'description' => 'required|string',
                'completed' => 'required|boolean',
            ]
        );

        $data = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'completed' => $request->get('completed'),
            'user_id' => $userId,
        ];

        $this->service->createTask($data);

        return to_route('index', $userId);
    }

    public function edit(Request $request): InertiaResponse
    {
        $id = $request->route('toDoId');
        $task = $this->service->findTaskById($id);

        return Inertia::render('ToDo/EditToDo', [
            'userId' => $request->route('id'),
            'toDoId' => $request->route('toDoId'),
            'taskTitle' => $task->title,
            'taskDescription' => $task->description
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'completed' => 'required',
        ]);

        $toDoId = $request->route('toDoId');

        $data = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'completed' => $request->get('completed')
        ];

        $this->service->updateTask($toDoId, $data);

        return to_route('index', $request->route('id'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        $this->service->deleteTask($request->route('toDoId'));

        return to_route('index', $request->route('id'));
    }
}
