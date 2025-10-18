<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();

            // Client Info
            $table->string('client_name');
            $table->string('client_title')->nullable(); // "Investor from Sydney"
            $table->string('client_initials', 5)->nullable(); // "JL"
            $table->string('client_avatar', 500)->nullable();

            // Testimonial
            $table->unsignedTinyInteger('rating')->default(5); // 1-5 stars
            $table->text('testimonial_text');

            // Settings
            $table->integer('display_order')->default(0);
            $table->boolean('featured')->default(false);
            $table->boolean('is_active')->default(false);

            $table->timestamps();

            $table->index(['is_active', 'display_order']);
            $table->index('featured');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
