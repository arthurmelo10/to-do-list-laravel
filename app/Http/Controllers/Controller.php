<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use ToDo\Repository\Repository;

class Controller extends BaseController
{
    public function __construct(private readonly Repository $repository)
    {
    }

//    public function getFirstToDo(): string
//    {
//        return $this->repository->first();
//    }

    public function find(): string
    {
        return $this->repository->find();
    }

    public function create(): string
    {
        return $this->repository->create();
    }

    public function update(): string
    {
        return $this->repository->update();
    }

    public function delete(): string
    {
        return $this->repository->delete();
    }
}
