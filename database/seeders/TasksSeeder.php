<?php

namespace Database\Seeders;

use App\Models\TaskModel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            TaskModel::factory()->count(7)->forUser($user)->create();
        }
    }
}
