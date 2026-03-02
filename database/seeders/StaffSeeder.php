<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('staff')->insert([
            [
                'staff_id' => 'STAFF001',
                'name' => 'Dr. John',
                'email' => 'john@aubit.edu',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'staff_id' => 'STAFF002',
                'name' => 'Dr. Priya',
                'email' => 'priya@aubit.edu',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
