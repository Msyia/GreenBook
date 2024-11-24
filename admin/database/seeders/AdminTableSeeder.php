<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('admin')->insert([
            [
                'username' => 'admin1',
                'password' => Hash::make('password123'), // Hash password
            ],
            [
                'username' => 'admin2',
                'password' => Hash::make('password456'),
            ],
        ]);
    }
}
