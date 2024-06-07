<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

        [   'name' => 'info',
            'email' => 'info@mail.com',
            'password' => Hash::make(123),
        ], 

        [   'name' => 'adm',
            'email' => 'adm@mail.com',
            'password' => Hash::make(12345),
        ], 
        ]);

        // php artisan db:seed --class=UserSeeder
    }
}
