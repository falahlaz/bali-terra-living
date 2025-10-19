<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        $features = [
            // Amenities
            ['name' => 'Air Conditioning', 'category' => 'amenity'],
            ['name' => 'WiFi', 'category' => 'amenity'],
            ['name' => 'Fully Furnished', 'category' => 'amenity'],
            ['name' => 'Kitchen', 'category' => 'amenity'],
            ['name' => 'Hot Water', 'category' => 'amenity'],
            ['name' => 'TV & Cable', 'category' => 'amenity'],
            ['name' => 'Washing Machine', 'category' => 'amenity'],
            ['name' => 'Generator/Backup Power', 'category' => 'amenity'],
            ['name' => 'Safe Box', 'category' => 'amenity'],
            ['name' => 'Sound System', 'category' => 'amenity'],

            // Facilities
            ['name' => 'Swimming Pool', 'category' => 'facility'],
            ['name' => 'Parking', 'category' => 'facility'],
            ['name' => 'Security 24/7', 'category' => 'facility'],
            ['name' => 'Gym/Fitness Center', 'category' => 'facility'],
            ['name' => 'Private Chef', 'category' => 'facility'],
            ['name' => 'Housekeeping', 'category' => 'facility'],
            ['name' => 'Spa/Massage Room', 'category' => 'facility'],
            ['name' => 'BBQ Area', 'category' => 'facility'],
            ['name' => 'Gazebo/Bale', 'category' => 'facility'],
            ['name' => 'Staff Quarters', 'category' => 'facility'],

            // Views
            ['name' => 'Ocean View', 'category' => 'view'],
            ['name' => 'Rice Field View', 'category' => 'view'],
            ['name' => 'Mountain View', 'category' => 'view'],
            ['name' => 'Jungle View', 'category' => 'view'],
            ['name' => 'Garden View', 'category' => 'view'],
            ['name' => 'River View', 'category' => 'view'],
            ['name' => 'Sunset View', 'category' => 'view'],
            ['name' => 'Beachfront', 'category' => 'view'],

            // Outdoor
            ['name' => 'Private Garden', 'category' => 'outdoor'],
            ['name' => 'Terrace/Balcony', 'category' => 'outdoor'],
            ['name' => 'Outdoor Shower', 'category' => 'outdoor'],
            ['name' => 'Pool Deck', 'category' => 'outdoor'],
            ['name' => 'Rooftop', 'category' => 'outdoor'],
            ['name' => 'Outdoor Dining', 'category' => 'outdoor'],
            ['name' => 'Sun Loungers', 'category' => 'outdoor'],
            ['name' => 'Jacuzzi', 'category' => 'outdoor'],

            // Other
            ['name' => 'Pet Friendly', 'category' => 'other'],
            ['name' => 'Child Friendly', 'category' => 'other'],
            ['name' => 'Wheelchair Accessible', 'category' => 'other'],
            ['name' => 'Eco-Friendly', 'category' => 'other'],
            ['name' => 'Solar Panels', 'category' => 'other'],
            ['name' => 'Water Filtration', 'category' => 'other'],
            ['name' => 'Rainwater Harvesting', 'category' => 'other'],
            ['name' => 'Internet Fibre', 'category' => 'other'],
            ['name' => 'Workspace/Office', 'category' => 'other'],
            ['name' => 'EV Charging Station', 'category' => 'other'],
        ];

        foreach ($features as $feature) {
            Feature::create([
                'name' => $feature['name'],
                'slug' => Str::slug($feature['name']),
                'category' => $feature['category'],
                'is_active' => true,
            ]);
        }
    }
}
