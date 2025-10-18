<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            $table->string('setting_group', 100)->default('general');
            $table->string('setting_key', 100)->unique();
            $table->text('setting_value')->nullable();
            $table->enum('setting_type', ['text', 'number', 'boolean', 'json', 'image', 'url'])->default('text');
            $table->string('description', 500)->nullable();

            $table->timestamps();

            $table->index('setting_group');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
