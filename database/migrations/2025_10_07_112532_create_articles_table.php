<?php

use App\ArticleStatus;
use App\Models\ArticleCategory;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            // Relations
            $table->foreignIdFor(User::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(ArticleCategory::class)->constrained();

            // Content
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->longText('content');

            // Images
            $table->string('featured_image', 500)->nullable();
            $table->string('featured_image_alt')->nullable();

            // Author
            $table->string('author_name')->nullable();

            // Tags (JSON array)
            $table->json('tags')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            // Stats
            $table->unsignedInteger('view_count')->default(0);
            $table->boolean('featured')->default(false);

            // Status
            $table->enum('status', ArticleStatus::cases())->default(ArticleStatus::Draft);
            $table->boolean('is_active')->default(false);
            $table->timestamp('published_at')->nullable();

            $table->timestamps();

            $table->index('slug');
            $table->index(['status', 'published_at']);
            $table->index('featured');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
