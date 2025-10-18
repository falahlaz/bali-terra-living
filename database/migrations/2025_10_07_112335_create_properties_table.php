<?php

use App\Models\PropertyCategory;
use App\Models\Location;
use App\PropertyStatus;
use App\PropertyUnitOfMeasure;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PropertyCategory::class)->constrained();
            $table->foreignIdFor(Location::class)->nullable()->constrained();

            // Basic Info
            $table->string('name');
            $table->string('slug')->unique();
            $table->enum('status', PropertyStatus::cases())->default(PropertyStatus::Available);

            // Pricing
            $table->decimal('price', 15, 2);
            $table->string('currency', 3)->default('USD');
            $table->boolean('price_negotiable')->default(false);

            // Location Details
            $table->string('location_detail')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();

            // Measurements
            $table->decimal('surface_area', 10, 2)->nullable();
            $table->decimal('building_area', 10, 2)->nullable();
            $table->enum('uom', PropertyUnitOfMeasure::cases())->default(PropertyUnitOfMeasure::SquareMeter);

            // Property Features (villa/house)
            $table->unsignedTinyInteger('rooms')->nullable();
            $table->unsignedTinyInteger('bathrooms')->nullable();
            $table->year('year_built')->nullable();

            // Content
            $table->text('description')->nullable();
            $table->string('short_description', 500)->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();

            // Stats & Settings
            $table->unsignedInteger('view_count')->default(0);
            $table->unsignedInteger('inquiry_count')->default(0);
            $table->boolean('featured')->default(false);
            $table->integer('priority')->default(0);
            $table->boolean('is_active')->default(false);

            // Timestamps
            $table->timestamp('published_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

            // Indexes
            $table->index(['status', 'is_active']);
            $table->index(['featured', 'priority']);
            $table->index('published_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
