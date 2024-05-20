<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $superAdmin = Role::create(['name' => 'super-admin']);
        $manager = Role::create(['name' => 'manager']);
        $supervisor = Role::create(['name' => 'supervisor']);

        // Create permissions
        Permission::create(['name' => 'user.add']);
        Permission::create(['name' => 'user.edit']);
        Permission::create(['name' => 'user.delete']);
        Permission::create(['name' => 'user.view']);

        // Assign permissions to roles
        $superAdmin->givePermissionTo(['user.add', 'user.edit', 'user.delete', 'user.view']);
        $manager->givePermissionTo(['user.add', 'user.edit', 'user.view']);
        $supervisor->givePermissionTo(['user.add', 'user.view']);
    }
}
