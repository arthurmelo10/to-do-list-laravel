<?php

namespace ToDo\Service;

use ToDo\Models\ToDo;
use ToDo\Repository\Repository;

class Service
{
    public function __construct(private readonly Repository $repository)
    {
    }

    public function getTasksByUser(string $userId): array
    {
        return $this->repository->getAllTodoByUser($userId);
    }

    public function findTaskById(string $id): ToDo
    {
        return $this->repository->findTodoById($id);
    }

    public function createTask(array $data): ToDo
    {
        return $this->repository->createTodo($data);
    }

    public function updateTask(int $id, array $data): ?ToDo
    {
        return $this->repository->updateTodo($id, $data);
    }

    public function deleteTask(string $id): bool
    {
        return $this->repository->deleteTodo($id);
    }

}
