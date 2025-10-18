<?php

use App\Models\Property;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Property::class)->constrained()->cascadeOnDelete();

            $table->string('detail_key', 100);
            $table->text('detail_value');
            $table->integer('display_order')->default(0);

            $table->timestamps();

            $table->unique(['property_id', 'detail_key']);
            $table->index('property_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_details');
    }
};
