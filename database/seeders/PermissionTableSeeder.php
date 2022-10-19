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

            'about-list',

            'about-create',

            'about-edit',

            'about-delete',

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
