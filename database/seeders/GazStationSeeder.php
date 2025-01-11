<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GazStationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('gaz_station')->insert([
            [
                'id' => (string) Str::uuid(),
                'terminals' => 5,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'location' => '40.712776, -74.005974',
                'name' => 'Yoshkar-Ola Gaz1',
                'owner' => 'John Doe',
                'phone' => '+1234567890',
                'work_hours' => '09:00 - 18:00'
            ],
            [
                'id' => (string) Str::uuid(),
                'terminals' => 10,
                'is_available' => false,
                'created_at' => now(),
                'updated_at' => now(),
                'location' => '34.052235, -118.243683',
                'name' => 'Yoshkar-Ola Gaz2',
                'owner' => 'Jane Smith',
                'phone' => '+0987654321',
                'work_hours' => '10:00 - 20:00'
            ]
        ]);
    }
}
