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
                'emp_id'         =>'GSYNC000',
                'role_id'        =>'0',
                'emp_status'     =>'0',
                'password'       => bcrypt('demo@123'),
            ],
            [
               'email'          =>'developer@globalsync.com.au',
               'emp_id'         =>'GSYNC001',
               'role_id'        =>'1',
               'emp_status'     =>'0',
               'password'       => bcrypt('developer@123'),
            ],
            [
                'email'          =>'admin@globalsync.com.au',
                'emp_id'         =>'GSYNC002',
                'role_id'        =>'2',
                'emp_status'     =>'0',
                'password'       => bcrypt('admin@123'),
             ],
             [
                'email'          =>'hr@globalsync.com.au',
                'emp_id'         =>'GSYNC003',
                'role_id'        =>'3',
                'emp_status'     =>'0',
                'password'       => bcrypt('hr@123'),
             ],
             [
                'email'          =>'finance@globalsync.com.au',
                'emp_id'         =>'GSYNC004',
                'role_id'        =>'4',
                'emp_status'     =>'0',
                'password'       => bcrypt('finance@123'),
             ],
             [
                'email'          =>'manager@globalsync.com.au',
                'emp_id'         =>'GSYNC005',
                'role_id'        =>'5',
                'emp_status'     =>'0',
                'password'       => bcrypt('manager@123'),
             ],
             [
                'email'          =>'employee@globalsync.com.au',
                'emp_id'         =>'GSYNC006',
                'role_id'        =>'6',
                'emp_status'     =>'0',
                'password'       => bcrypt('employee@123'),
             ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
