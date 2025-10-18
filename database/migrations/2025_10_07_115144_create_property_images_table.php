<?php

use App\Models\Property;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('property_images', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Property::class)->constrained()->cascadeOnDelete();

            $table->string('image_url', 500);
            $table->string('path', 500)->nullable();
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('alt_text')->nullable();

            $table->integer('display_order')->default(0);
            $table->boolean('is_primary')->default(false);
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index(['property_id', 'display_order']);
            $table->index(['property_id', 'is_primary']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_images');
    }
};
