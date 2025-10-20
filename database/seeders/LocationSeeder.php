<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            // Wilayah wisata & hiburan
            ['name' => 'Kuta', 'is_active' => true],
            ['name' => 'Seminyak', 'is_active' => true],
            ['name' => 'Canggu', 'is_active' => true],
            ['name' => 'Legian', 'is_active' => true],
            ['name' => 'Ubud', 'is_active' => true],
            ['name' => 'Nusa Dua', 'is_active' => true],
            ['name' => 'Jimbaran', 'is_active' => true],
            ['name' => 'Uluwatu', 'is_active' => true],

            // Wilayah aktivitas lokal & bisnis
            ['name' => 'Denpasar', 'is_active' => true],
            ['name' => 'Singaraja', 'is_active' => true],
            ['name' => 'Tabanan', 'is_active' => true],
            ['name' => 'Gianyar', 'is_active' => true],
        ];

        DB::table('locations')->insert($locations);
    }
}
