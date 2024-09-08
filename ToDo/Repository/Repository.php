<?php

namespace ToDo\Repository;

use ToDo\Models\ToDo;

class Repository
{
    public function getAllTodo()
    {
        $model = $this->getModel();

        return $model->all();
    }

    public function findTodoById(string $id): ToDo
    {
        $model = $this->getModel();

        return $model->first($id);
    }

    public function createTodo(array $input): ToDo
    {
        $model = $this->getModel();
        $model->fill(...$input);
        $model->save();

        return $model;
    }

    public function updateTodo(string $id, array $input): ?ToDo
    {
       if (!$task = $this->findTodoById($id)) {
           return null;
       }

       $task->fill($input, $task);

        $task->save();

        return $task;

    }

    public function deleteTodo(string $id): bool
    {
        if ($deleteTask = $this->findTodoById($id)) {
            return false;
        }

        return $deleteTask->delete();
    }

    private function getModel(): ToDo
    {
        return new ToDo();
    }
}
