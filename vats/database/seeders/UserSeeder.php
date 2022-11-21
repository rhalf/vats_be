<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $users = [
            [
                'name' => 'rhalf',
                'email' => 'rhalfcaacbay@gmail.com',
                'password' => Hash::make('123546'),
            ],
            [
                'name' => 'rhalf yopmail',
                'email' => 'rhalf@yopmail.com',
                'password' => Hash::make('123546'),
            ],

        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
