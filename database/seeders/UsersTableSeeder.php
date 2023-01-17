<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'email'          =>'demo@globalsync.com.au',
                'role_id'        =>'0',
                'user_status'    =>'0',
                'password'       => bcrypt('demo@123'),
            ],
            [
               'email'          =>'superadmin@globalsync.com.au',
               'role_id'        =>'1',
               'user_status'    =>'0',
               'password'       => bcrypt('superadmin@123'),
            ],
            [
                'email'          =>'admin@globalsync.com.au',
                'role_id'        =>'2',
                'user_status'    =>'0',
                'password'       => bcrypt('admin@123'),
             ],
             [
                'email'          =>'hr@globalsync.com.au',
                'role_id'        =>'3',
                'user_status'    =>'0',
                'password'       => bcrypt('hr@123'),
             ],
             [
                'email'          =>'finance@globalsync.com.au',
                'role_id'        =>'4',
                'user_status'    =>'0',
                'password'       => bcrypt('finance@123'),
             ],
             [
                'email'          =>'manager@globalsync.com.au',
                'role_id'        =>'5',
                'user_status'    =>'0',
                'password'       => bcrypt('manager@123'),
             ],
             [
                'email'          =>'employee@globalsync.com.au',
                'role_id'        =>'6',
                'user_status'    =>'0',
                'password'       => bcrypt('employee@123'),
             ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
