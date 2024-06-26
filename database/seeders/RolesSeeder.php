<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $managerRole = Role::create(['name' => 'manager']);
        $employerRole = Role::create(['name'=>'employer']);

        $editPermission = Permission::where('name', 'delete user')->first();
        $sendPermission = Permission::where('name', 'view payment')->first();

        $adminRole->givePermissionTo($editPermission,$sendPermission);
    }
}
