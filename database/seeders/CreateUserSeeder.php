<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'contact'=>'0245125199',
                'dob'=>'24-01-1990',
                'role'=>'admin',
                'password'=> bcrypt('1111'),
            ],
            [
                'name'=>'User',
                'email'=>'user@gmail.com',
                'contact'=>'0247895199',
                'dob'=>'06-01-1998',
                'role'=>'user',
                'password'=> bcrypt('0000'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
