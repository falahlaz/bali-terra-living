<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('page_sections', function (Blueprint $table) {
            $table->id();

            $table->string('page_name', 100); // 'home', 'about', 'contact'
            $table->string('section_key', 100); // 'hero', 'about', 'why_choose'
            $table->string('section_name');

            $table->integer('display_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->unique(['page_name', 'section_key']);
            $table->index(['page_name', 'is_active', 'display_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_sections');
    }
};
