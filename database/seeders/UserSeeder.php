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
            [
                'name' => 'johndoe',
                'email' => 'johndoe@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'janedoe',
                'email' => 'janedoe@example.com',
                'password' => Hash::make('password456'),
            ],
            [
                'name' => 'alexsmith',
                'email' => 'alexsmith@example.com',
                'password' => Hash::make('securepass789'),
            ],
            [
                'name' => 'maryjohnson',
                'email' => 'maryjohnson@example.com',
                'password' => Hash::make('mypassword101'),
            ],
            [
                'name' => 'lucasbrown',
                'email' => 'lucasbrown@example.com',
                'password' => Hash::make('lucas1234'),
            ],
            [
                'name' => 'emilywhite',
                'email' => 'emilywhite@example.com',
                'password' => Hash::make('emily5678'),
            ],
            [
                'name' => 'michaelmiller',
                'email' => 'michaelmiller@example.com',
                'password' => Hash::make('michael2023'),
            ],
            [
                'name' => 'susanwilliams',
                'email' => 'susanwilliams@example.com',
                'password' => Hash::make('susansafe'),
            ],
            [
                'name' => 'davidlee',
                'email' => 'davidlee@example.com',
                'password' => Hash::make('davidpass789'),
            ],
            [
                'name' => 'elizabethmoore',
                'email' => 'elizabethmoore@example.com',
                'password' => Hash::make('elizabe@t123'),
            ],
        ]);
    }
}