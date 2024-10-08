<?php

namespace ToDo\Service;

use ToDo\Repository\Repository;

class Service
{
    public function __construct(private readonly Repository $repository)
    {
    }

    public function getTasks()
    {
        return $this->repository->getAllTodo();
    }

    public function findTaskById(string $id)
    {
        return $this->repository->findTodoById($id);
    }

    public function createTask(array $data)
    {
        return $this->repository->createTodo($data);
    }

    public function updateTask(int $id, array $data)
    {
        return $this->repository->updateTodo($id, $data);
    }

    public function deleteTask(string $id): bool
    {
        return $this->repository->deleteTodo($id);
    }

}
