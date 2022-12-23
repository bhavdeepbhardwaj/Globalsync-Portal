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
                'name'           =>'Demo',
                'last_name'      =>'Globalsync',
                'email'          =>'demo@globalsync.com.au',
                'phone'          =>'9000990009',
                'role_id'        =>'0',
                'password'       => bcrypt('demo@123'),
            ],
            [
               'name'           =>'Super Admin',
               'last_name'      =>'Developer',
               'email'          =>'superadmin@globalsync.com.au',
               'phone'          =>'9368336220',
               'role_id'        =>'1',
               'password'       => bcrypt('superadmin@123'),
            ],
            [
                'name'           =>'Admin',
                'last_name'      =>'Globalsync',
                'email'          =>'admin@globalsync.com.au',
                'phone'          =>'9999988888',
                'role_id'        =>'2',
                'password'       => bcrypt('admin@123'),
             ],
             [
                'name'           =>'Hr',
                'last_name'      =>'Globalsync',
                'email'          =>'hr@globalsync.com.au',
                'phone'          =>'8888877777',
                'role_id'        =>'3',
                'password'       => bcrypt('hr@123'),
             ],
             [
                'name'           =>'Finance',
                'last_name'      =>'Globalsync',
                'email'          =>'finance@globalsync.com.au',
                'phone'          =>'7777766666',
                'role_id'        =>'4',
                'password'       => bcrypt('finance@123'),
             ],
             [
                'name'           =>'Manager',
                'last_name'      =>'Globalsync',
                'email'          =>'manager@globalsync.com.au',
                'phone'          =>'6666655555',
                'role_id'        =>'5',
                'password'       => bcrypt('manager@123'),
             ],
             [
                'name'           =>'Employee',
                'last_name'      =>'Globalsync',
                'email'          =>'employee@globalsync.com.au',
                'phone'          =>'5555544444',
                'role_id'        =>'6',
                'password'       => bcrypt('employee@123'),
             ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
