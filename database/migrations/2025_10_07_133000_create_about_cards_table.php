<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_cards', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description')->nullable();

            // Icon
            $table->string('icon', 100)->nullable();
            $table->enum('icon_type', ['svg', 'class', 'image'])->default('svg');
            $table->text('icon_content')->nullable(); // SVG code or icon class

            $table->integer('display_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index(['is_active', 'display_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_cards');
    }
};
