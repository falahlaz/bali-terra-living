<?php

use App\Models\PageSection;
use App\SectionContentType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('section_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PageSection::class)->constrained()->cascadeOnDelete();

            $table->string('content_key', 100); // 'title', 'subtitle', 'description'
            $table->text('content_value')->nullable();
            $table->enum('content_type', SectionContentType::cases())->default(SectionContentType::Text);

            $table->integer('display_order')->default(0);

            $table->timestamps();

            $table->unique(['page_section_id', 'content_key']);
            $table->index('page_section_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('section_contents');
    }
};
