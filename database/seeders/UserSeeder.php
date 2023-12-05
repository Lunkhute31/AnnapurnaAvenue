<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([[
'name'=>"Admin User",
'username'=>'username1',
'email'=>'randomadmin@gmail.com',
'role'=>'admin',
'status'=>'active',
'password'=>bcrypt('password'),
'images'=>null,
'phone_number'=>null,
'email_verified_at'=>null
        ],
        [
            'name'=>"Normal User",
'username'=>'user1',
'email'=>'randomuser@gmail.com',
'role'=>'users',
'status'=>'active',
'password'=>bcrypt('normaluser'),
'images'=>null,
'phone_number'=>null,
'email_verified_at'=>null
        ],
        [
            'name'=>"VendorUser",
'username'=>'vendoruser1',
'email'=>'vendoruser@gmail.com',
'role'=>'vendor',
'status'=>'active',
'password'=>bcrypt('vendoruser'),
'images'=>null,
'phone_number'=>null,
'email_verified_at'=>null
        ],

    ]);
    }
}
