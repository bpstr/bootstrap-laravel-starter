<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Division;
use App\Models\Document;
use App\Models\Project;
use App\Models\Task;
use App\Models\TaskRelation;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@localhost',
            'password' => bcrypt('admin'),
        ]);
    }
}
