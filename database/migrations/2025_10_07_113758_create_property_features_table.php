<?php

use App\FeatureCategory;
use App\Models\Feature;
use App\Models\Property;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Create features lookup table first
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('slug', 100)->unique();
            $table->string('icon', 100)->nullable();
            $table->enum('category', FeatureCategory::cases())->default(FeatureCategory::Amenity);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index('category');
        });

        // Create pivot table
        Schema::create('property_features', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Property::class)->constrained()->cascadeOnDelete();
            $table->ForeignIdFor(Feature::class)->constrained()->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['property_id', 'feature_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_features');
        Schema::dropIfExists('features');
    }
};
