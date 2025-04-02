<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'nama' => 'Abdul Rahman',
            'email' => 'abdul@gmail.com',
            'password' => bcrypt('abdul123')

        ];

        $user1 = [
            'nama' => 'user1',
            'email' => 'abdul1@gmail.com',
            'password' => bcrypt('abdul1234')
        ];
        
        User::insert($user);
        User::insert($user1);
    }

}
