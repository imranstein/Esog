<?php

namespace Database\Seeders;

use App\Models\Members;
use App\Models\Message;
use App\Models\News;
use App\Models\Publication;
use App\Models\Student;
use App\Models\Team;
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
        // \App\Models\User::factory(10)->create();
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        Student::factory(50)->create();
        Members::factory(50)->create();
        Team::factory(20)->create();
        News::factory(20)->create();
        Publication::factory(20)->create();
        Message::factory(10)->create();
    }
}
