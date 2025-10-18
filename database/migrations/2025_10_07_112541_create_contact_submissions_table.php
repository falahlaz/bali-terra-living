<?php

use App\ContactStatus;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_submissions', function (Blueprint $table) {
            $table->id();

            // Contact Info
            $table->string('full_name');
            $table->string('email');
            $table->string('phone_number')->nullable();
            $table->string('interested_in')->nullable();
            $table->text('message')->nullable();

            // Tracking
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->string('referrer', 500)->nullable();

            // Status Management
            $table->enum('status', ContactStatus::cases())->default(ContactStatus::New);
            $table->foreignIdFor(User::class, 'assigned_to')->nullable()->constrained('users')->nullOnDelete();
            $table->text('notes')->nullable();

            $table->timestamp('processed_at')->nullable();
            $table->foreignIdFor(User::class, 'processed_by')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();

            $table->index('status');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_submissions');
    }
};
