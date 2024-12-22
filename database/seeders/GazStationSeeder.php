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
                'id' => Str::uuid(),
                'station_name' => 'Station Alpha',
                'location' => 'City Center',
                'contact_info' => 'alpha@example.com',
                'opening_hours' => '08:00-20:00',
                'manager_name' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'station_name' => 'Station Beta',
                'location' => 'North Side',
                'contact_info' => 'beta@example.com',
                'opening_hours' => '09:00-21:00',
                'manager_name' => 'Jane Smith',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
