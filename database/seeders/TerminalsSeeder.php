<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TerminalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('terminals')->insert([
            [
                'id' => Str::uuid(),
                'gaz_station_id' => 'existing-gaz-station-uuid-1', // заменить на реальный UUID
                'fuel_type_id' => 'existing-fuel-type-uuid-1',     // заменить на реальный UUID
                'terminal_name' => 'Terminal A1',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'gaz_station_id' => 'existing-gaz-station-uuid-2', // заменить на реальный UUID
                'fuel_type_id' => 'existing-fuel-type-uuid-2',     // заменить на реальный UUID
                'terminal_name' => 'Terminal B1',
                'status' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
