<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use ToDo\Service\Service;
use User\Models\User;

class ToDoController extends Controller
{
    public function __construct(private readonly Service $service)
    {
    }

    public function index(string $id)
    {
        $todos = $this->service->getTasksByUser($id);

        return Inertia::render('ToDo/List', [
            'todos' => $todos,
            'userId' => $id,
        ]);
    }

    public function show(Request $request)
    {
        $id = $request->route('toDoId');
        $todo = $this->service->findTaskById($id);

        return Inertia::render('ToDo/ToDo', [
            'todo' => $todo,
            'userId' => $request->route('id'),
            'toDoId' => $id,
        ]);
    }

    public function create(string $id)
    {
        return Inertia::render('ToDo/CreateToDo', [
            'userId' => $id,
        ]);
    }
    public function store(Request $request, $userId)
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

    public function edit(Request $request)
    {
        $id = $request->route('toDoId');
        $this->service->findTaskById($id);

        return Inertia::render('ToDo/EditToDo', [
            'userId' => $request->route('id'),
            'toDoId' => $request->route('toDoId')
        ]);
    }

    public function update(Request $request)
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
    }

    public function destroy(Request $request)
    {
        return $this->service->deleteTask($request->route('toDoId'));
    }
}
