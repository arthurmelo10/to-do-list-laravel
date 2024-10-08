<?php

namespace Database\Factories\ToDo\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use ToDo\Models\ToDo;
use User\Models\User;

///**
// * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Model>
// */
class ToDoFactory extends Factory
{

    /**
     * @var string
     */
    protected $model = ToDo::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title,
            'description' => fake()->text(),
            'completed' => fake()->boolean,
            'user_id' => User::factory(),
        ];
    }
}
