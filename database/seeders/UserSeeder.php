<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'lvl' => '1',
                'email' => 'admin@test.com',
                'password' => md5('admin786'),
                'status' => '1',
                'usertype_id' => '1',
                'role_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Manager',
                'last_name' => 'Manager',
                'lvl' => '1',
                'email' => 'manager@test.com',
                'password' => md5('manager786'),
                'status' => '1',
                'usertype_id' => '3',
                'role_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'User',
                'last_name' => 'User',
                'lvl' => '1',
                'email' => 'user@test.com',
                'password' => md5('user786@'),
                'status' => '1',
                'usertype_id' => '2',
                'role_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}