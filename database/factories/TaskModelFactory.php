<?php

namespace Database\Factories;

use App\Models\TaskModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskModelFactory extends Factory
{
    protected $model = TaskModel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'status' => fake()->randomElement(TaskModel::STATUSES),
            'due_date' => fake()->date(),
            'user_id' => null,
        ];
    }
    public function forUser(User $user): static
    {
        return $this->state([
            'user_id' => $user->id,
        ]);
    }
}
