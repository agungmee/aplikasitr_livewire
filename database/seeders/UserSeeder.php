<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name'      => 'Agung Suro Santoso',
            'email'     => 'agung@sahabatabadi.com',
            'password'  => Hash::make('1234-abcd'),
        ]);
    }
}
