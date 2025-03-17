<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            Permission::create(['name' => 'List User']);
            Permission::create(['name' => 'Create User']);
            Permission::create(['name' => 'Update User']);
            Permission::create(['name' => 'Delete User']);
            Permission::create(['name' => 'List Role']);
            Permission::create(['name' => 'Create Role']);
            Permission::create(['name' => 'Update Role']);
            Permission::create(['name' => 'Delete Role']);
            Permission::create(['name' => 'List Report']);
            Permission::create(['name' => 'Create Report']);
            Permission::create(['name' => 'Update Report']);
            Permission::create(['name' => 'Delete Report']);
            Permission::create(['name' => 'List Comment']);
            Permission::create(['name' => 'Create Comment']);
            Permission::create(['name' => 'Checked']);
            Permission::create(['name' => 'Feivied']);
        }
    }
}
