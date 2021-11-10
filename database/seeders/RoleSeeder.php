<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            [
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'web_user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'employee',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ]);
    }
}