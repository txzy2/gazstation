<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class FuelTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fuel_data')->insert([
            [
                'id' => (string) Str::uuid(),
                'fuel_type' => '92',
                'price' => 48,
                'amount' => 5000,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'fuel_type' => '95',
                'price' => 50,
                'amount' => 3000,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'fuel_type' => '98',
                'price' => 1.8,
                'amount' => 55,
                'is_available' => false, // Топливо временно недоступно
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'fuel_type' => 'Diesel',
                'price' => 1.1,
                'amount' => 60,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}


