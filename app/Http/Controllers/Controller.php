<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use ToDo\Repository\Repository;

class Controller extends BaseController
{
    public function __construct(private readonly Repository $repository)
    {
    }

    public function find(string $id): string
    {
        return $this->repository->findTodoById($id);
    }

    public function create(array $input): string
    {
        return $this->repository->createTodo($input);
    }

    public function update(string $id, array $input): string
    {
        return $this->repository->updateTodo($id, $input);
    }

    public function delete(string $id): string
    {
        return $this->repository->deleteTodo($id);
    }
}
