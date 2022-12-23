<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'role_name' => 'Super Admin',
                'role_slug' => 'superadmin',
            ],
            [
                'role_name' => 'Admin',
                'role_slug' => 'admin',
            ],
            [
                'role_name' => 'HR',
                'role_slug' => 'hr',
            ],
            [
                'role_name' => 'Finance',
                'role_slug' => 'finance',
            ],
            [
                'role_name' => 'Manager',
                'role_slug' => 'manager',
            ],
            [
                'role_name' => 'Employee',
                'role_slug' => 'employee',
            ],

        ]);
    }
}
