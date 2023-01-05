<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.

     *

     * @return void
     */
    public function run()
    {
        $permissions = [

            'role-list',

            'role-create',

            'role-edit',

            'role-delete',

            'user-list',

            'user-create',

            'user-edit',

            'user-delete',

            'member-list',

            'member-create',

            'member-edit',

            'member-delete',

            'member-approve',

            'news-list',

            'news-create',

            'news-edit',

            'news-delete',

            'publication-list',

            'publication-create',

            'publication-edit',

            'publication-delete',

            'team-list',

            'team-create',

            'team-edit',

            'team-delete',

            'message-list',

            'message-create',

            'message-edit',

            'message-delete',

            'guidelines-list',

            'guidelines-create',

            'guidelines-edit',

            'guidelines-delete',

            'slider-list',

            'slider-create',

            'slider-edit',

            'slider-delete',

            'advocacy-list',

            'advocacy-create',

            'advocacy-edit',

            'advocacy-delete',

            'course-list',

            'course-create',

            'course-edit',

            'course-delete',

            'memberCourse-list',

            'memberCourse-create',

            'memberCourse-edit',

            'memberCourse-delete',

            'memberCourse-approve',

            'myProfile',

            'project-list',

            'project-create',

            'project-edit',

            'project-delete',

            'partner-list',

            'partner-create',

            'partner-edit',

            'partner-delete',

            'conference-list',

            'conference-create',

            'conference-edit',

            'conference-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
