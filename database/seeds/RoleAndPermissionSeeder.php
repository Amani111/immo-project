<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'view backend',
            'guard_name' => 'view backend',
        ]);
         Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);
        Role::create([
            'name' => 'user',
            'guard_name' => 'web',
        ]);
    }
}
