<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Admin',
                'value' => '1',
                'description' => 'Administrates the system'
            ],
            [
                'name' => 'Police',
                'value' => '2',
                'description' => 'Monitors accidents'
            ],

        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
