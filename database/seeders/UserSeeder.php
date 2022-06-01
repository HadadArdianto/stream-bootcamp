<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Hash;

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
            'name' => 'Hadad',
            'email' => 'hadad.ardianto72@gmail.com',
            'password' => Hash::make('mantapjiwa'),
            'phone_number' => '082238014932',
            'avatar' => '',
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now() 
        ]);
    }
}
