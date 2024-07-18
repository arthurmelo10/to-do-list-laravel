<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use ToDo\Repository\Repository;

class Controller extends BaseController
{
    public function __construct(private readonly Repository $repository)
    {
    }

    public function getFirstToDo(): string
    {
        return $this->repository->first();
    }
}
