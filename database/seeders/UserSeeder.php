<?php

namespace Database\Seeders;

//Used DB and Hash Classes
use DB;
use Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('12345678'),
            'role' => '0'
        ]);
    }
}
