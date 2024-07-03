<?php

namespace App\Http\Controllers;

use ToDo\Repository\Repository;

class Controller
{
    public function __construct(private readonly Repository $repository)
    {
    }

    public function getFirstToDo(): string
    {
        return $this->repository->first();
    }
}
