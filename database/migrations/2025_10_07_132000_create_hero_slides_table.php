<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hero_slides', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('subtitle')->nullable();
            $table->text('description')->nullable();

            // Image
            $table->string('image_url', 500)->nullable();
            $table->string('image_alt')->nullable();

            // CTA Buttons
            $table->string('primary_button_text', 100)->nullable();
            $table->string('primary_button_url')->nullable();
            $table->string('secondary_button_text', 100)->nullable();
            $table->string('secondary_button_url')->nullable();

            // Settings
            $table->integer('display_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index(['is_active', 'display_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hero_slides');
    }
};
