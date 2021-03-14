<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            [
                'id'          => 1,
                'description' => 'Task 1',
                'user_id'     => 1,
                'created_at'  => '2020-12-15 00:07:42',
                'updated_at'  => '2020-12-15 00:07:42',
            ],
            [
                'id'          => 2,
                'description' => 'Task 2',
                'user_id'     => 1,
                'created_at'  => '2020-12-15 00:17:42',
                'updated_at'  => '2020-12-15 00:17:42',
            ],
        ];

        Task::insert($tasks);
    }
}
