<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();

            $table->enum('menu_location', ['header', 'footer', 'mobile']);
            $table->foreignId('parent_id')->nullable()->constrained('menus')->cascadeOnDelete();

            $table->string('label');
            $table->string('url', 500);
            $table->enum('target', ['_self', '_blank'])->default('_self');
            $table->string('icon', 100)->nullable();

            $table->integer('display_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index(['menu_location', 'is_active', 'display_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
