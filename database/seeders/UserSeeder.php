<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('123456789'),

        ]);
        User::create([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('123456789'),

        ]);
        User::create([
            'name' => 'user3',
            'email' => 'user3@gmail.com',
            'password' => Hash::make('123456789'),

        ]);
    }
}
