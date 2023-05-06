<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $su = Role::create(['name' => 'superuser']);
        $admin = Role::create(['name' => 'admin']);
//        $editor = Role::create(['name' => 'editor']);


        Permission::create(['name' => 'show user'])->syncRoles([$su, $admin]);
        Permission::create(['name' => 'create user'])->syncRoles([$su, $admin]);
        Permission::create(['name' => 'edit user'])->syncRoles([$su, $admin]);
        Permission::create(['name' => 'delete user'])->syncRoles([$su]);



    }
}
