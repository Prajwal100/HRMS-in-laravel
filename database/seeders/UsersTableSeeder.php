<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
//            Admin
            [
                'first_name'=>'Prajwal',
                'last_name'=>'Admin',
                'phone'=>'9807009999',
                'employee_id'=>Str::random(10),
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('1111'),
                'gender'=>'male',
                'marital_status'=>'single',
                'role'=>'admin',
                'status'=>'active',
            ],
            [
                'first_name'=>'Prajwal',
                'last_name'=>'Employee',
                'phone'=>'9807009999',
                'employee_id'=>Str::random(10),
                'email'=>'employee@gmail.com',
                'password'=>Hash::make('1111'),
                'gender'=>'male',
                'marital_status'=>'single',
                'role'=>'employee',
                'status'=>'active',
            ]
        ]);
    }
}
