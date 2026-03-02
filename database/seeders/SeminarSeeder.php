<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeminarSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('seminar')->insert([
            [
                'staff_id' => 'STAFF001',
                'topic' => 'AI in Agriculture',
                'department' => 'CSE',
                'date' => '2026-03-10',
                'time' => '10:30:00',
                'venue' => 'Seminar Hall A',
                'conductedby' => 'staff',
                'staff_name' => 'Dr. John',
                'student_name' => null,
                'reg_no' => null,
                'image' => 'seminars/ai.jpg',
                'pdf' => 'seminars/ai.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'staff_id' => 'STAFF002',
                'topic' => 'IoT Smart Farming',
                'department' => 'ECE',
                'date' => '2026-03-15',
                'time' => '11:00:00',
                'venue' => 'Hall B',
                'conductedby' => 'student',
                'staff_name' => null,
                'student_name' => 'Arun Kumar',
                'reg_no' => '21BIT045',
                'image' => 'seminars/iot.jpg',
                'pdf' => 'seminars/iot.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
