<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'kevinrick',
                'email' => 'kevinrickypradana@gmail.com',
                'password' => Hash::make('admin'),
            ],
        ]);
    }
}