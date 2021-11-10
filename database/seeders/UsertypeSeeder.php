<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsertypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usertypes')->insert([
            [
                'usertype' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usertype' => 'User',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usertype' => 'Staff',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ]);
    }
}