<?php

use App\Models\Property;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Property::class)->constrained()->cascadeOnDelete();

            $table->string('session_id')->nullable();
            $table->string('email')->nullable();

            $table->timestamps();

            $table->index('property_id');
            $table->index('session_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
