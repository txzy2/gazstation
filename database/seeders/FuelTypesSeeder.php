<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FuelTypesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('fuel_types')->insert([
            [
                'id' => Str::uuid(),
                'fuel_type_name' => 'Diesel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'fuel_type_name' => 'Petrol',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'fuel_type_name' => 'Electric',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
