<?php

namespace Database\Seeders;

use App\Models\PropertyCategory;
use Illuminate\Database\Seeder;

class PropertyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PropertyCategory::query()
            ->insert([
                [
                    'name' => 'Land',
                    'is_active' => true,
                ],
                [
                    'name' => 'Villa',
                    'is_active' => true,
                ],
                [
                    'name' => 'House',
                    'is_active' => true,
                ],
            ]);
    }
}
