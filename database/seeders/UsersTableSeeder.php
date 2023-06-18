<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $users = [
        [
            'name' => 'paytrans',
            'email' => 'paytrans@gmail.com',
            'password' => Hash::make('12345678')
        ],
        [
            'name' => 'withtrans',
            'email' => 'withtrans@gmail.com',
            'password' => Hash::make('12345678')
        ],
        [
            'name' => 'baltrans',
            'email' => 'baltrans@gmail.com',
            'password' => Hash::make('12345678')
        ]
    ];

    foreach ($users as $userData) {
        User::create($userData);
    }
}


}