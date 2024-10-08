<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ToDo\Service\Service;
use User\Models\User;

class ToDoController extends Controller
{
    public function __construct(private readonly Service $service)
    {
    }

    public function index(string $id)
    {
        $todos = User::with('toDo')->find($id);

        //return
    }

    public function findById(Request $request)
    {
        $id = $request->route('toDoId');
        return json_encode($this->service->findTaskById($id));

    }
    public function store(Request $request)
    {
        $data = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'completed' => $request->get('completed')
        ];

        return $this->service->createTask($data);
    }

    public function edit(string $id)
    {
        return $this->service->findTaskById($id);
    }

    public function update(Request $request, string$id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'completed' => 'required',
        ]);

        $data = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'completed' => $request->get('completed')
        ];

        $this->service->updateTask($id, $data);
    }

    public function destroy(string $id)
    {
        return $this->service->deleteTask($id);
    }
}
