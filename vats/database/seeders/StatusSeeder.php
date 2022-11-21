<?php

namespace Database\Seeders;

use App\Models\Status;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
                'name' => 'Active',
                'value' => 'ACTIVE',
            ],
            [
                'name' => 'Inactive',
                'value' => 'INACTIVE',
            ],

        ];

        foreach ($statuses as $status) {
            Status::create($status);
        }
    }
}
